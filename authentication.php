<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;
$url = 'http://localhost/wordpress'; //$_POST['url'];
$ck = 'ck_93f8cd6656a9e539b90c506b441b40b18e128089'; //$_POST['ck'];
$cs = 'cs_90902972c4252fad8526e4711b028433e470d39a'; //$_POST['cs'];
$woocommerce = new Client($url,$ck,$cs,
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true
    ]
);