<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\AttributeGroup;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Services\Seller\Product\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->where('seller_id', Auth::guard("seller")->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view("Seller.product.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = DB::table('brands')->get();
        $attributegroups = AttributeGroup::latest()->get();
        return view("Seller.product.create", compact("brands", "attributegroups"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        $product = (new ProductService)->storeProduct($request);

        return redirect()->route('seller.product.index')->with('success', 'Product Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
       
        $brands = DB::table('brands')->get();
        $attributegroups = AttributeGroup::latest()->get();
        $attributeItem = ProductAttribute::where("product_id", $product->id)->pluck("attribute_id")->toArray();
        return view("seller.product.edit", compact("product", "brands", "attributegroups", "attributeItem"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request,Product $product)
    {
        
        $product = (new ProductService)->updateProduct($request, $product);

        return redirect()->route('seller.product.index')->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        $product = (new ProductService)->deleteProduct($product);
        return redirect()->route('seller.product.index')->with('success', 'Product Successfully Deleted');
    }

    public function productImage(Request $request)
    {
        $product = (new ProductService)->addMultipleImage($request);
    }

    public function imagecreate(Product $product)
    {
        $productImages = (new ProductService)->productImages($product);
        return view('Seller.product.images.addimage', compact('product', 'productImages'));
    }

    public function deleteImage(ProductImage $img)
    {

        $img = (new ProductService)->deleteImage($img);
        return $img;
    }
}
