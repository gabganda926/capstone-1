<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use PDF;


class sampleController extends Controller
{
	public function generatePDF(Request $request) 
    {
    	$pdf = PDF::loadView('pages.pdf.samplepdf1')
            ->setPaper('Letter');

        return $pdf->stream();
    }//generates the pdf
}

?>