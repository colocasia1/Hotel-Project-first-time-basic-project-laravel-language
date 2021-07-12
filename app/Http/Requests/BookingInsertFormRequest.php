<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingInsertFormRequest extends FormRequest
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
            'name'=>'required',
            'phone'=>'required',
            'checkin'=>'required',
            'checkout'=>'required',
            'roomtype'=>'required',
            'price'=>'required',
            'guest'=>'required',
            'message'=>'required',
        ];
    }
}
