<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Services\BookService;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BookService $bookService)
    {
        $books = $bookService->getBooks();

        return view('admin.books', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(BookService $bookService)
    {
        return view('admin.create-book', [
            'categories' => $bookService->getBookCategories(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request, BookService $bookService)
    {
        $bookService->saveBook($request->all());

        return redirect()->route('admin.books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book, BookService $bookService, $id)
    {
        return view('admin.edit-book', [
            'categories' => $bookService->getBookCategories(),
            'book' => $book->findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBookRequest $request, BookService $bookService)
    {
        $bookService->saveBook($request->all());

        return redirect()->route('admin.books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book, int $id)
    {
        $book->destroy($id);
        return redirect()->route('admin.books.index');
    }
}
