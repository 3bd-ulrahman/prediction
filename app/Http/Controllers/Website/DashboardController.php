<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Prediction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $predictions = Prediction::query()->get();

        return view('dashboard', compact('predictions'));
    }
}
