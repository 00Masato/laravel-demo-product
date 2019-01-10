<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /*public function authorize()
    {
        if ($this->path() == 'update') {
            return true;
        } else {
            return false;
        }
    }*/

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'book' => 'required',
            'category' => 'required',
            'pageNumber' => 'required|integer',
            'icon' => 'required',
            'image' => 'required|image',
            'review' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'book.required' => '※必須項目です。',
            'category.required' => '※必須項目です。',
            'pageNumber.required' => '※必須項目です。',
            'icon.required' => '※必須項目です。',
            'image.required' => '※必須項目です。',
            'review.required' => '※必須項目です。',
            'pageNumber.integer' => '※ページ数は整数で入力してください。',
            'image.image' => '※画像(jpg、png、bmp、gif、svg)ファイルを選択してください',
        ];

    }
}