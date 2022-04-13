<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CashflowFormRequest extends FormRequest
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
        
        //dd(auth()->user()->id);
        return [
            'user_id' => [auth()->id()],
            'flow' => ['required'],
            'category' => ['required', 'max:25'],
            'name' => ['required', 'max:25'],
            'amount' => ['required', 'max:15'],
        ];
    }
}
