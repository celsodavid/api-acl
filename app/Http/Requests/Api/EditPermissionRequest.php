<?php

namespace App\Http\Requests\Api;

class EditPermissionRequest extends StorePermissionRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = parent::rules();
        $rules['description'] = 'required|min:3|max:255|string';

        return $rules;
    }
}
