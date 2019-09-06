<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class ProductController extends Controller
{
	private $product;

	public function __construct(Product $product) 
	{
		$this->product = $product;
	}

    public function index()
    {
    	return $this->product->all();
    }

    public function show(Product $id)
    {
    	return $id;
    }
}
