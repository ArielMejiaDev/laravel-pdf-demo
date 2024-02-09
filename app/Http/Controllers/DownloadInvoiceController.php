<?php

namespace App\Http\Controllers;

use App\Concerns\PdfImageAsset;
use Spatie\LaravelPdf\PdfBuilder;
use function Spatie\LaravelPdf\Support\pdf;

class DownloadInvoiceController extends Controller
{
    public function __invoke()
    {
        return pdf('pdf.invoice', [
            'invoiceNumber' => '1234',
            'customerName' => 'Grumpy Cat',
        ])
            ->headerView('components.header')
            ->footerView('components.footer');
    }


}
