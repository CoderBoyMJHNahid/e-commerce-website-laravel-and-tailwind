<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MobileSentrix
{
    protected $apiUrl;
    protected $consumerKey;
    protected $consumerSecret;
    protected $accessToken;
    protected $accessTokenSecret;

    public function __construct()
    {
        $this->apiUrl = 'https://www.mobilesentrix.ca/api/rest/products';
        $this->consumerKey = '838a1d9576b18d4b34f4e6cf1f81df99';
        $this->consumerSecret = '8e9a9b60049398ed3f5ad524b8b44267';
        $this->accessToken = '00a0ea4d6fe4ad8e623af27025134a45';
        $this->accessTokenSecret = '3cba9dfd37820d35b3c2fa0e1bdd59d3';
    }

    public function getProducts()
    {
        try {
            $response = Http::withHeaders([
                'Consumer-Key' => $this->consumerKey,
                'Consumer-Secret' => $this->consumerSecret,
                'Access-Token' => $this->accessToken,
                'Access-Token-Secret' => $this->accessTokenSecret,
            ])->get($this->apiUrl);

            if ($response->successful()) {
                $products = $response->json();
                return $products;
            } else {
                return ['error' => 'Error fetching data from the API: ' . $response->status()];
            }
        } catch (Exception $e) {
            return ['error' => 'Exception: ' . $e->getMessage()];
        }
    }
}

// Example usage:
// $productFetcher = new ProductFetcher();
// $products = $productFetcher->getProducts();

// if (isset($products['error'])) {
//     echo $products['error'];
// } else {
//     // Process and display products
//     print_r($products);
// }
