<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BookController extends Controller
{
    public function index()
    {
        $book_r = BookResource::collection(Book::orderBy('name', 'asc')->get());
        return view("home", ['data'=>$book_r]);
        // return response($book_r);
    }

    public function showViewAdd()
    {
        return view("addform");
    }

    public function store(Request $request)
    {
        if ($request->post()) {
            $book = Book::create($request->all());
            $book_r = new BookResource($book);
            // return response($book_r, response::HTTP_CREATED);
            $book_all = BookResource::collection(Book::orderBy('name', 'asc')->get());
            return view("home", ['data'=>$book_all]);
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->post()) {
            if ($request->name) {
                Book::where('id', $id)->update(['name' => $request->name]);
            }
            if ($request->description) {
                Book::where('id', $id)->update(['description' => $request->description]);
            }
            if ($request->description) {
                Book::where('id', $id)->update(['image_url' => $request->image_url]);
            }
            $book = Book::findOrFail($id);
            $book_r = new BookResource($book);
            return response($book_r, response::HTTP_OK);
        }
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        $book_all = BookResource::collection(Book::orderBy('name', 'asc')->get());
        return redirect('/api/book/index');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $book_r = new BookResource($book);
        if ($book_r) {
            return view("editform", ['data'=>$book_r]);
        }else{
            return response('Data Not Found',response::HTTP_NOT_FOUND);
        }
    }
}
