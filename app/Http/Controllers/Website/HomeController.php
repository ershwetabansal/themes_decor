<?php

namespace App\Http\Controllers\Website;

use App\Product;
use App\Service;
use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $data = Cache::rememberForever('homepage', function () {
            $data['images'] = array_merge($this->browser->listAllFilesIn('/themes/'),
                $this->browser->listAllFilesIn('/services/'));
            $data['products'] = Product::orderBy('created_at', 'desc')->limit(10)->get();
            $data['products']->map(function ($product) {
               $product->images =   $this->browser->listAllFilesIn('/products/' . $product->slug);
            });
            $data['servicesWithImages'] = Service::orderBy('created_at', 'desc')->limit(10)->get();
            $data['servicesWithImages']->map(function ($service) {
                $service->images =   $this->browser->listAllFilesIn('/services/' . $service->slug);
            });
            $data['packages'] = Package::orderBy('created_at', 'asc')->get();

            return $data;
        });

        extract($data);
        
        return view('home', compact('images', 'products', 'servicesWithImages', 'packages'));
    }
}
