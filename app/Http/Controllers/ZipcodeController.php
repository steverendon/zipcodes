<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Illuminate\Http\Request;
use App\Http\Resources\ZipcodeResource;

class ZipcodeController extends Controller
{
    public function show($zipcode)
    {
        return new ZipcodeResource(Zipcode::where('d_codigo', $zipcode)->first());
    }
}
