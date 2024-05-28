<?php

namespace App\Http\Controllers;


use App\Models\Documento;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function pdfInbox(Documento $documento, $id){
        $documento = Documento::find($id);

        // HTML content to be converted to PDF
        $html = '<h1>Hello, World!</h1>';

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf();

        // Load HTML content
        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render HTML as PDF
        $dompdf->render();

        // Output generated PDF to browser
        $dompdf->stream('document.pdf');


    }
}
