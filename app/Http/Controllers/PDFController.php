<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Owner;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Bissolli\ValidadorCpfCnpj\CNPJ;
use Bissolli\ValidadorCpfCnpj\CPF;

class PDFController extends Controller
{
    public function generatePDFDomain($string)
    {

        if ($string == 'all') {
            $domain = Domain::get();
        } elseif ($string == 'expired') {
            $domain = Domain::where('status', $string)->get();
        } else {
            $today = Carbon::now();
            $limitDate = $today->addDays(10);
            $domain = Domain::whereDate('expiration', '<=', $limitDate)->where('status', '!=', 'expired')->get();
        }

        $pdf = Pdf::loadView('pdf.domain', ['domain' => $domain])
            ->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }

    public function generatePDFOwner()
    {
        $owners = Owner::get();

        foreach ($owners as $owner) {
            if ($owner->document == 'CPF') {
                $owner->document_number = (new CPF($owner->document_number))->format();  // Modifique o atributo do owner
            } else {
                $owner->document_number = (new CNPJ($owner->document_number))->format();  // Modifique o atributo do owner
            }
        }

        $pdf = Pdf::loadView('pdf.owner', ['owner' => $owners])
            ->setPaper('a4', 'landscape');;
        return $pdf->stream();
    }
}
