## FS Sample Application

Please use the @TODO to find the things we are wanting you to complete

### Instructions

`Run composer update`

Before you have created a user run the migration scripts

`php artisan migrate:fresh --seed`

to seed the database with some data

Then Create a user account by clicking the Register link.

Log in to the application and you should see a "Book" link on the top navigation 

Feel free to navigate through the test application and add and edit books

The API URIs are 

List of all books
/api/books/show?api_token=[your_api_token]

1 book
/api/books/get/1?api_token=[your_api_token]

