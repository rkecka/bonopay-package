<?php

namespace Rkecka\Bonopay\Providers;

use Illuminate\Database\Eloquent\Model;

class Bonopay extends Model
{
    /**
     * @var \Illuminate\Config\Repository|mixed
     *
     * Unique identify number
     */
    protected $vt;

    /**
     * @var \Illuminate\Config\Repository|mixed
     *
     * Return URL from Bonopay gateway
     */
    protected $rurl;

    /**
     * @var mixed
     *
     * Bonopay hex code
     */
    protected $hex;

    /**
     * @var
     *
     *Bonopay api key
     */
    protected $api_key;

    public function __construct()
    {
        $this->vt = env('BONOPAY_VT');
        $this->rurl = env('BONOPAY_VT');
        $this->hex = env('BONOPAY_HEX');
        $this->api_key = env('BONOPAY_API_KEY');
    }

    public function ValidateOrder($request){
        $request->validate([

        ]);
    }
}
