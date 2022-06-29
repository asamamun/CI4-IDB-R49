<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfController extends BaseController
{
    public function index()
    {
        $p = new ProductModel();
        $products = $p->findAll();     
        return view('pdf/index', ['products' => $products]);        
    }
    public function pdf()
    {       
        $view = \Config\Services::renderer();
        $p = new ProductModel();
        $products = $p->findAll();

        $options = new Options();
        $options->set('defaultFont', 'Siyam Rupali ANSI');
        $d = new Dompdf($options);
        $html = view('pdf/table', ['products' => $products , 'title'=>"পদ্মা সেতু চীনের বিআরআইয়ের অংশ নয়"]);
        $d->load_html($html);
        // $d->setPaper('A4', 'landscape');
        $d->setPaper('A4', 'portrait');
        $d->render();
        $d->stream();
    }
}
