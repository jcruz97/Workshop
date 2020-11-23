<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class PDFViewController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'PDF Example',
            'date' => date('d/m/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('myFile.pdf');
    }
}
