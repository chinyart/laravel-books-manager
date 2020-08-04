Simple laravel task to add author and add books

serve with: <b>php artisan serve</b>

<b>api to add author</b>
http://127.0.0.1:8000/api/addauthor
## body
{
	"firstname": "name",
	"lastname": "name",
	"email": "email@host.com"
}

<b>api to add book</b>
http://127.0.0.1:8000/api/addbook
## body
{
	"author_id": 1,
    "title": "second book",
    "pages": 10
}

<b>api to add display a book</b>
http://127.0.0.1:8000/api/getbook/{id} example http://127.0.0.1:8000/api/getbook/1

<b>api to add delete a book</b>
http://127.0.0.1:8000/api/deletebook/{id} example http://127.0.0.1:8000/api/deletebook/1

Thank you :)
