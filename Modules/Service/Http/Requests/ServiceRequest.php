<?php

namespace Modules\Service\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'              => 'required|max:191',
            'slug'              => 'nullable|max:191|unique:services,slug',
//            'intro'             => 'required',
            'content'           => 'required',
            'created_by_alias'  => 'nullable|max:191',
            'featured_image'    => 'required|max:191',
            'is_featured'       => 'required',
            'order'             => 'nullable|numeric',
            'status'            => 'required',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['slug'] = 'nullable|max:191|unique:services,slug,' . $this->route()->parameter('service');
        }

        return $rules;
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
