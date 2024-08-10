<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->query("page", 1);
        $size = $request->query("size", 12);
        $order = $request->query("order", -1);

        $o_column = "";
        $o_order = "";

        switch ($order) {
            case 1:
                $o_column = "created_at";
                $o_order = "DESC";
                break;
            case 2:
                $o_column = "created_at";
                $o_order = "ASC";
                break;
            case 3:
                $o_column = "regular_price";
                $o_order = "ASC";
                break;
            case 4:
                $o_column = "regular_price";
                $o_order = "DESC";
                break;
            default:
                $o_column = "id";
                $o_order = "DESC";
        }

        $products = Product::orderBy('created_at', 'DESC')
            ->orderBy($o_column, $o_order)
            ->paginate($size);
            $q_brands = $request->input('q_brands', ''); // Adjust the key accordingly


        $brands = Brand::orderBy('name', 'ASC')->get();

      // Assuming $q_brands is calculated or obtained in your controller
return view('shop.shop', compact('products', 'page', 'size', 'order', 'brands', 'q_brands'));

    }

    public function productDetails($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('details', compact('product'));
    }
}
