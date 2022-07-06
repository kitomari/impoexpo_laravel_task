<?php

namespace App\Http\Controllers;

use App\Links;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $short_links = Links::latest()->get();
        return view('links.view_all_links', compact('short_links'));
    }

    public function viewLink($id){
        $single_link = Links::where('id',$id)->get();
        return view('links.view_link', compact('single_link'));
    }

    public function editLink($id){
        // $edit_url = Links::where('id',$id)->get();
        $edit_url = Links::find($id);
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
    public function store(Request $request)
    {
        $request->validate([
            'shortlink' => 'required',
        ]);

        $links = new Links();
        $links->shortlink = $request->input('shortlink');
        $links->link = Str::random(6);
        $links->save();

        return redirect('view_all_links')->with('Success', 'Short link generated');
    }

    public function localLink($link){
        $find = Links::where('link',$link)->first();
        return redirect($find->links);
    }

    public function updateUrl(Request $request, $id)
    {
        $request->validate([
            'shortlink' => 'required',
        ]);
        $links = Links::find($id);
        // $links = new Links();
        $links->shortlink = $request->input('shortlink');
        $links->link = Str::random(6);
        $links->update();

        return redirect('view_all_links')->with('Success', 'Short link regenerated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function show(Links $links)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function edit(Links $links)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Links $links)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function destroy(Links $links)
    {
        //
    }
}
