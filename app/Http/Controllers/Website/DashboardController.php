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
        $lastPrediction = $predictions->last();
        $secondToLasPrediction = $predictions->nth($predictions->count() - 2)->last();

        return view('dashboard', compact('predictions', 'lastPrediction', 'secondToLasPrediction'));
    }
}
