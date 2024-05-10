<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest{

    public function Authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            "nama" =>"required|string|min:10",
            "price" => "required|integer|min:10",
            "stock" => "required|integer|min:10",
            "weight" => "required|integer|min:10",
            "image" => "required|text|min:10",
            "description" => "required|text|max:200" 
        ];
    }
}

