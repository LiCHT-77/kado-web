<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['integer', 'nullable'],
            'book_category_id' => ['integer', 'nullable'],
            'reference_number' => ['string', 'required', 'between:1,20'],
            'name' => ['string', 'required', 'between:1,20'],
            'author' => ['string', 'required', 'between:1,20'],
            'publisher' => ['string', 'required', 'between:1,20'],
            'description' => ['string', 'required', 'between:1,200'],
            'purchase_date' => ['date', 'nullable'],
            'image' => ['image', 'nullable'],
        ];
    }
}
