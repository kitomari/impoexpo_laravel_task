
PROJECT IS CREATED BY USING LARAVEL 7

Clone repository of project from https://github.com/kitomari/impoexpo_laravel_task.git

Create your database and rename .env file in the project with database name of yours

Run php artisan migrate to Migrate table to your database table

Run php artisan serve to run your project

Click the link provided (http://127.0.0.1:8000) to open your project in browser

1. Once user open the project he/she will be able to enter url and generate short link with form provided
2. After generating link user will click in generated link to open the URL
3. To view and manage all URL generated user must REGISTER or LOGIN in the system using registration and login link in top left
4. TO VIEW logged in user will see all URL and SHORT LINK generated
5. TO UPDATE logged in user will be able to REGENERATE SHORT LINK with the same or different url link
6. TO DELETE logged in user will delete url and link permanently from the database
7. TO DISABLE logged in user will do soft deletes where the disabled link will not display but still exists in the database
8. In Username drop down user will be able to Change personal details and Logout
