<?php

namespace Rkecka\Bonopay\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Rkecka\Bonopay\Providers\Bonopay;

class BonopayController extends Controller
{
    public function index(){
        return view();
    }

    public function test(){
        $test = config('bonopay.BONOPAY_API_KEY');
echo '<pre>';
var_dump( $test );
echo '</pre>';
exit;
        return $test;
    }
}
