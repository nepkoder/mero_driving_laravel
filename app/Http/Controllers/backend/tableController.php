<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tableController extends Controller
{
    public function tableData()
    {
        return view('backend.Tables.table-data-table');
    }

    public function tableBasic()
    {
        return view('backend.Tables.table-basic');
    }
}
