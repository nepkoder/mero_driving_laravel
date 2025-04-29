<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UIElementsController extends Controller
{
    public function bootstrapComponents()
    {
        return view('backend.UIElements.bootstrap-components');
    }

    public function uiCards()
    {
        return view('backend.UIElements.ui-cards');
    }

    public function widgets()
    {
        return view('backend.UIElements.widgets');
    }
}
