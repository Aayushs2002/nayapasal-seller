<?php

namespace App\Services\Seller\Product;

use App\Models\Product;
use App\Models\ProductAttribute;
use App\Services\Seller\FileService;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductService
{

    public function store($request)
    {

        $req = $request->except("attributes", "brand");
        // dd($req->except("attributes"));
        if ($request->file("featured_image")) {
            $product_image = (new FileService)->fileUpload($request->file("featured_image"), "featured_image", "product");

            $req['featured_image'] = $product_image;
        }
        if ($request->disc) {
            $req['discount_amount'] = $request->discount_amount;
        } else {
            $req['discount_amount'] = "";
        }

        $req['category_id'] = $request->category;
        $req['brand_id'] = $request->brand;
        $req['slug'] = Str::slug($request->product_name);
        $req['seller_id'] =Auth::guard("seller")->user()->id;

        $add_product = Product::create($req);

        return $add_product;
    }

    public function storeProductAttribute($selectedAttributes, $product)
    {
        foreach ($selectedAttributes as $attributegroupID => $attributeItems) {
            foreach ($attributeItems as $attributeItemID) {
              ProductAttribute::create([
                    'product_id' => $product->id,
                    'attribute_group_id' => $attributegroupID,
                    'attribute_id' => $attributeItemID,
                    // 'seller_id'=>Auth::guard("seller")->user()->id
                ]);
            }
        }
        return true;
    }

    public function storeProduct($request)
    {

        $selectedAttributes = $request->input('attributes');

        try {
            $addproduct = $this->store($request);

            if ($selectedAttributes) {
                $addattribute = $this->storeProductAttribute($selectedAttributes, $addproduct);
            }
            return $addproduct;
        } catch (Exception $e) {
            // dd('dad');
            dd($e);
        }
    }


    public function updateProduct($request, $product)
    {
        $selectedAttributes = $request->input('attributes');
        try {
            $updateproduct = $this->update($request, $product);
            if ($selectedAttributes) {
                $updateattribute = $this->updateAttribute($selectedAttributes, $product);
            }
            return $updateproduct;
        } catch (Exception $e) {
            dd($e);
        }
    }


    public function update($request, $product)
    {
        $req = $request->except("attributes", "brand");
        if ($request->hasFile('featured_image')) {
            $deleteimage = (new FileService)->imageDelete($product->featured_image);
            $product_image = (new FileService)->fileUpload($request->file("featured_image"), "featured_image", "product");
        } else {
            $product_image = $product->featured_image;
        }
        if ($request->disc) {
            $req['discount_amount'] = $request->discount_amount;
        } else {
            $req['discount_amount'] = "";
        }
        $req['featured_image'] = $product_image;
        $req['slug'] = Str::slug($request->product_name);
        $req['category_id'] = $request->category;
        $req['brand_id'] = $request->brand;

        $product->update($req);
        return true;
    }

    public function updateAttribute($selectedAttributes, $product)
    {
       ProductAttribute::where('product_id', $product->id)->delete();
        foreach ($selectedAttributes as $attributegroupID => $attributeItems) {
            foreach ($attributeItems as $attributeItemID) {
                // Create a new ProductAttribute record for each selected attribute item.
               ProductAttribute::create([
                    'product_id' => $product->id,
                    'attribute_group_id' => $attributegroupID,
                    'attribute_id' => $attributeItemID,
                    'seller_id'=>Auth::guard("seller")->user()->id
                ]);
            }
        }
        return true;
    }

    public function deleteProduct($product)
    {
       ProductAttribute::where('product_id', $product->id)->delete();
        if ($product->featured_image) {
            $deleteimage = (new FileService)->imageDelete($product->featured_image);
        }
        // $productImages = ProductImage::where('product_id', $product->id)->get();

        // if (!$productImages->isEmpty()) {
        //     foreach ($productImages as $image) {
        //         $deleteimage = (new FileService)->imageDelete($image->images);
        //     }
        //     $productImages->each->delete();
        // }
        $product->delete();
        return true;
    }
}
