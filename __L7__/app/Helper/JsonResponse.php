<?php

namespace App\Helper;

class JsonResponseError
{
    public $code;
    public $message;
    public $errors;

    public function toArray()
    {
        return get_object_vars($this);
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}

class JsonResponse
{
    static function make($data, array $headers = [])
    {
        return response()->json($data, 200, $headers);
    }

    static function error(JsonResponseError $obj, $status = 200, array $headers = [])
    {
        return response()->json($obj, $status, $headers);
    }
}
