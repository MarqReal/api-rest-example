<?php

namespace App\API;

use Illuminate\Database\Eloquent\Model;

class ApiError extends Model
{
    public static function errorMessage($message, $code)
    {
    	return [
    		'data' => [
    			'msg' => $message,
    			'code' =>  $code
    		]
    	];
    }
}
