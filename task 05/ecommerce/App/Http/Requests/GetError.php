<?php
namespace App\Http\Requests;
class GetError {
    public static function message(string $message) :string
    {
        // repalce _ in values like (first_name) by Space
        return str_replace('_',' ',$message);
    }
}