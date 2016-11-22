<?php

namespace App\Http\Controllers\Website;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->path = '/products/';
    }


    /**
     * Show the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
        $products->each(function($product) {
            $product->images = $this->browser->listFilesIn($this->path . $product->slug);
        });

        return view('app.products.index', compact('products'));
    }


    /**
     * Show the product details.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $images = $this->browser->listFilesIn($this->path . $product->slug);

        return view('app.products.show', compact('product', 'images'));
    }


}