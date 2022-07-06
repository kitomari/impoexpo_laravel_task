<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $short_links = Url::latest()->get();
        return view('home', compact('short_links'));
    }

    public function viewLink($id){
        $single_link = Url::where('id',$id)->get();
        return view('links.view_link', compact('single_link'));
    }

    public function editLink($id){
        // $edit_url = Links::where('id',$id)->get();
        $edit_url = Url::find($id);
        return view('links.edit_url', compact('edit_url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $url = Url::whereUrl($request->url)->first();
        if($url == null){
            $code = $this->generateUrl();
            Url::create([
             'url' => $request->url,
                'code' => $code
            ]);

            $url = Url::whereUrl($request->url)->first();
        }
        return view('links.short', compact('url'));
    }
    public function generateUrl(){
        $result = base_convert(rand(1000, 99999),10,36);
        $data = Url::whereCode($result)->first();
        if($data != null){
            $this->generateUrl();
        }
        return $result;
    }


    public function shortLinks($link){
        // $url = Url::whereCode($link)->first();
        // $url = Url::select('url')->where($link)->first();
        // return redirect($url->url);
        $url = Url::whereCode($link)->first();
        return redirect($url->url);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(url $url)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function updateUrl(Request $request, url $url, $id)
    {
        $url = Url::find($id);
        $url = Url::whereUrl($request->url)->first();
        if($url != null){
            $code = $this->generateUrl();
            Url::create([
             'url' => $request->url,
                'code' => $code
            ]);

            $url = Url::whereUrl($request->url)->first();
        }
        return view('home')->with('Success', 'Short link regenerated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(url $url)
    {
        //
    }
}
