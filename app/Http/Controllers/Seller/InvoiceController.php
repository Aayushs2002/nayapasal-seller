<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\SellerInvoice;
use App\Models\SellerInvoiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $seller = Auth::guard("seller")->user();
        if (!$seller) {
            abort(404);
        }
        $invoices = SellerInvoice::where("seller_id", $seller->id)->latest();

        $fromdate = $request->input("from");
        $todate = $request->input("to");

        if ($fromdate) {
            $invoices = $invoices->whereDate("created_at", ">=", $fromdate);
        }
        if ($todate) {
            $invoices = $invoices->whereDate("created_at", "<=", $todate);
        }

        $invoices = $invoices->paginate(15);
        $params = $_GET;
        return view('Seller.sellerinvoice.index', compact('invoices', 'params'));
    }
    public function show(SellerInvoice $invoice)
    {
        $seller = Auth::guard("seller")->user();
        if (!$seller) {
            abort(404);
        }

        $sellerinvoice = $invoice;
        $invoicedetails = SellerInvoiceDetail::where("invoice_id", $invoice->id)->get();
        return view("Seller.sellerinvoice.show", compact("sellerinvoice", "invoicedetails"));
    }
}
