Simple laravel task to add author and add books

serve with: <b>php artisan serve</b>

## api to add author
http://127.0.0.1:8000/api/addauthor
<b>body</b>
{
	"firstname": "name",
	"lastname": "name",
	"email": "email@host.com"
}

## api to add book
http://127.0.0.1:8000/api/addbook
<b>body</b>
{
	"author_id": 1,
    "title": "second book",
    "pages": 10
}

## api to add display a book
http://127.0.0.1:8000/api/getbook/{id} example http://127.0.0.1:8000/api/getbook/1

## api to add delete a book
http://127.0.0.1:8000/api/deletebook/{id} example http://127.0.0.1:8000/api/deletebook/1

Thank you :)
