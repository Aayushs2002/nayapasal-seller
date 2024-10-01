<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommissionChartController extends Controller
{
    public function index()
    {
        return view('Seller.commission-chart.index');
    }
}
