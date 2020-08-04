<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class BookManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::All();

        return response()->json([
            "success" => true,
            "data" => $books
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'author_id' => 'required',
            'title' => 'required',
            'pages' => 'required'
        ]);

        $authorexit = Author::find($request->author_id);
        $bookexist = Book::where('title', $request->title)->get();
        if(strlen($authorexit) > 0){
            if(sizeof($bookexist) > 0){
                return response()->json([
                    'success' => false,
                    'message' => "this book title already exist",
                ], 200);
            }
            $book = new Book();
            $book->title = $request->title;
            $book->pages = $request->pages;
            $book->author_id = $request->author_id;
            $book->save();

            return response()->json([
                'success' => true,
                'data' => $book,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => "invalid author ID",
            ], 400);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $book = Book::find($id);
        // return $book;
        if(strlen($book) > 0)
            return response()->json([
                'success' => true,
                'data' => $book,
            ], 200);
        else
            return response()->json([
                'success' => false,
                'message' => "invalid book ID",
            ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        if(strlen($book) > 0){
            $book->delete();

            return response()->json([
                'success' => true,
                'message' => "book deleted successfully",
            ], 200);
        } else
            return response()->json([
                'success' => false,
                'message' => "invalid book ID",
            ], 200);        
    }
}
