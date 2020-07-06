<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
//        $seiten = session()->get('seitenzahl');
        $pdf = PDF::loadView('myPDF');

        return $pdf->download('Druckanfrage_'.session('benName').'.pdf');
    }

    /**
     * Sends a massage via Mail if confirmed .
     */
    public function sendMail()
    {

    }
}