<?php

namespace Modules\Quote\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class QuotesRequest extends FormRequest
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
            'title'              => 'required|max:191',
            'quote_by'              => 'required|max:191',
            'description'       => 'required',
            'image'    => 'required|max:191',
            'status'            => 'required',
            'url'            => 'required',
        ];
    }
}
