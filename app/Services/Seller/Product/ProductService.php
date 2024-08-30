<?php

namespace App\Services\Seller\Product;

use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Services\Seller\FileService;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductService
{

    public function checkrandom()
    {
        $token = 'np_' . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        $product = Product::where('token', $token)->first();
        if ($product) {
            return $this->checkrandom();
        }
        return $token;
    }



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
        $token = $this->checkrandom();
        $req['slug'] = Str::slug($request->product_name . '-' . $token);
        $req['token'] = $token;
        $req['seller_id'] = Auth::guard("seller")->user()->id;

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
        $req['slug'] = Str::slug($request->product_name . '-' . $product->token);

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
                    // 'seller_id'=>Auth::guard("seller")->user()->id
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

    public function addMultipleImage($request)
    {
        $image = $request->file("file");
        // $destinationPath = public_path('uploads');
        // $randomString = $this->randomString(8);
        // $imageName = "product_" . $randomString . ".jpg";
        // $image->move($destinationPath, $imageName);
        $imageName = (new FileService)->fileUpload($request->file("file"), "file", "multi_product");
        // $myfeatured_image = $this->fileUpload($request, 'images');
        $product = ProductImage::create([
            'product_id' => $request->product_id,
            'images' => $imageName,
        ]);
        return $product;
    }

    public function productImages($product)
    {
        // dd('dad');
        if ($product->seller_id != Auth::guard('seller')->user()->id) {
            abort(403);
        }
        return ProductImage::where('product_id', $product->id)->get();
    }
    public function deleteImage($img)
    {
        $product = $img->product_id;
        $img->delete();
        if ($img->images) {
            $deleteimage = (new FileService)->imageDelete($img->images);
        }
        return redirect()->route('seller.myimage', $product)->with('success', 'Image Successfully Deleted');
    }
}
