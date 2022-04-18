<?php

namespace App\Services;

use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Support\Arr;

class BookService
{

    /**
     * BookCategory model
     *
     * @var BookCategory
     */
    protected $bookCategoryModel;


    /**
     * Book model
     *
     * @var Book
     */
    protected $bookModel;

    /**
     * construct
     *
     * @param BookCategory $bookCategory
     * @param Book $book
     */
    public function __construct(BookCategory $bookCategory, Book $book)
    {
        $this->bookCategoryModel = $bookCategory;
        $this->bookModel = $book;
    }

    /**
     * Get BookCategories
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getBookCategories()
    {
        return $this->bookCategoryModel->query()->get();
    }

    /**
     * Get a BookCategory
     *
     * @param int $id
     * @return void
     */
    public function getBookCategory(int $id)
    {
        return $this->bookCategoryModel->findOrFail($id);
    }
    
    /**
     * Save a BookCategory
     *
     * @param array $attribute
     * @return void
     */
    public function saveBookCategory(array $attribute)
    {
        $this->bookCategoryModel->updateOrCreate(
            Arr::only($attribute, ['id', 'name']),
            Arr::only($attribute, ['description'])
        );
    }

    /**
     * Get Books
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getBooks()
    {
        return $this->bookModel->query()->get();
    }

    /**
     * Save a Book
     *
     * @param array $attribute
     * @return void
     */
    public function saveBook(array $attribute)
    {
        $this->bookModel->updateOrCreate(
            Arr::only($attribute, ['id']),
            Arr::only($attribute, [
                'book_category_id',
                'reference_number',
                'name',
                'author',
                'publisher',
                'description',
                'purchase_date',
                'image_path',
            ])
        );
    }
}
