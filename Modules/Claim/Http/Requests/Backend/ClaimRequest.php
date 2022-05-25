<?php

namespace Modules\Claim\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ClaimRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date'             => 'nullable|date',
            'description'            => 'nullable',
            'check_image'            => 'max:191',
            'url'            => 'max:191'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
