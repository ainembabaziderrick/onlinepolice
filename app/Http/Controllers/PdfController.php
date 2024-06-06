<?php

namespace App\Http\Controllers;

use App\Models\LetterModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
   public function generatepdf(){
    $cases = LetterModel::get();
    $data = [
        'title' => 'Police Letter',
        'date' => date('m/d/Y'),
        'cases' => $cases
    ];
    $pdf = Pdf::loadView('pdf.cases', $data);
    return $pdf->download('policeletter.pdf');
   }
}
