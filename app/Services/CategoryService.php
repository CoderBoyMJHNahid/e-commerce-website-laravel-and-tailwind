<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Setting;

class CategoryService
{
    public function getCategory()
    {
        $consumerKey = '838a1d9576b18d4b34f4e6cf1f81df99';
        $consumerSecret = '8e9a9b60049398ed3f5ad524b8b44267';
        $accessToken = '00a0ea4d6fe4ad8e623af27025134a45';
        $accessTokenSecret = '3cba9dfd37820d35b3c2fa0e1bdd59d3';

        $bas_url = Setting::first()->api_url_sentrix;

        $url =   $bas_url . '/api/rest/categories';

        $nonce = md5(uniqid(rand(), true));

        $timestamp = time();

        $oauthParams = [
            'oauth_consumer_key' => $consumerKey,
            'oauth_nonce' => $nonce,
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp' => $timestamp,
            'oauth_token' => $accessToken,
            'oauth_version' => '1.0'
        ];

        ksort($oauthParams);

        $encodedParams = [];
        foreach ($oauthParams as $key => $value) {
            $encodedParams[] = rawurlencode($key) . '=' . rawurlencode($value);
        }
        $encodedParamsString = implode('&', $encodedParams);

        $baseString = "GET&" . rawurlencode($url) . '&' . rawurlencode($encodedParamsString);

        $signingKey = rawurlencode($consumerSecret) . '&' . rawurlencode($accessTokenSecret);

        $signature = base64_encode(hash_hmac('sha1', $baseString, $signingKey, true));

        $oauthParams['oauth_signature'] = $signature;

        $authHeader = 'OAuth ';
        $oauthHeaderParams = [];
        foreach ($oauthParams as $key => $value) {
            $oauthHeaderParams[] = $key . '="' . rawurlencode($value) . '"';
        }
        $authHeader .= implode(', ', $oauthHeaderParams);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: ' . $authHeader]);
        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($response, true);

        return $data;
    }
}
