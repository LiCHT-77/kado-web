<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookCategoryRequest;
use App\Http\Requests\UpdateBookCategoryRequest;
use App\Models\BookCategory;
use App\Services\BookService;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BookService $bookService)
    {
        $bookCategories = $bookService->getBookCategories();

        return view('admin.book-categories', ['bookCategories' => $bookCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-book-categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookCategoryRequest $request, BookService $bookService)
    {
        $bookService->saveBookCategory($request->all());

        return redirect()->route('admin.book_categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BookCategory $bookCategory, $id)
    {
        return view('admin.edit-book-categories', ['bookCategory' => $bookCategory->findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookCategoryRequest  $request
     * @param  BookService $bookService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookCategoryRequest $request, BookService $bookService)
    {
        $bookService->saveBookCategory($request->all());
        return redirect()->route('admin.book_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookCategory  $bookCategory
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookCategory $bookCategory, int $id)
    {
        $bookCategory->destroy($id);
        return redirect()->route('admin.book_categories.index');
    }
}
