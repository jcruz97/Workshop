<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;

class QRCodeController extends Controller
{
    public function simpleQr()
    {
        return \QrCode::size(300)->generate('A basic example of QR code!');
    }

    public function colorQr()
    {
               return \QrCode::size(300)
                     ->backgroundColor(255,55,0)
                     ->generate('Color QR code example');
    }

}
