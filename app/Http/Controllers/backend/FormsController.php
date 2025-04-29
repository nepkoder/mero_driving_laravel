<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function formComponents()
    {
        return view('backend.Forms.form-components');
    }

    public function formSamples()
    {
        return view('backend.Forms.form-samples');
    }
}
