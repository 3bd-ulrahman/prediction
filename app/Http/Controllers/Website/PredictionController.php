<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class PredictionController extends Controller
{
    public function create()
    {
        return view('predictions.create');
    }

    public function store(StoreUserRequest $request)
    {
        auth()->user()->predictions()->create($request->validated());

        return to_route('dashboard');
    }
}
