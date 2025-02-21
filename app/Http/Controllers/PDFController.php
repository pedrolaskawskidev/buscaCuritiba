<?php

namespace App\Http\Controllers;

use App\Models\Domain;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PDFController extends Controller
{
    public function generatePDF(){
       
    $domain = Domain::get();

    $pdf = Pdf::loadView('pdf.domain_pdf', ['domain' => $domain])
                        ->setPaper('a4', 'landscape');;
    return $pdf->stream();

    }
}
