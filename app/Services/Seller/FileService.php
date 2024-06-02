<?php

namespace App\Services\Seller;
use Illuminate\Support\Facades\Http;

class FileService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('app.sellerurl');
    }

    public function fileUpload($file, $fileinput, $name)
    {
     
        $url = baseUrl();
        // dd($url);
        $response = Http::attach(
            $fileinput, // Attachment name
            file_get_contents($file->path()), // Get the file contents
            'image.jpg' // File name
        )->post($url . 'api/saveimage', [
            'name' => $name,
            'fileinput' => $fileinput,
        ]);
        $responseData = json_decode($response->body(), true);
        return $responseData["data"];
    }

    public function imageDelete($filePath)
    {
        $url = baseUrl();


        $response = Http::post($url . 'api/deleteimage',  [
            'filePath' => $filePath
        ]);
        $responseData = json_decode($response->body(), true);
        if ($responseData["success"]) {
            return true;
        } else {
            return false;
        }
    }
}
