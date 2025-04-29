<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blankPage()
    {
        return view('backend.Pages.blank-page');
    }

    public function login()
    {
        return view('backend.Pages.page-login');
    }

    public function mailbox()
    {
        return view('backend.Pages.page-mailbox');
    }

    public function user()
    {
        return view('backend.Pages.page-user');
    }

    public function error()
    {
        return view('backend.Pages.page-error');
    }

    public function invoice()
    {
        return view('backend.Pages.page-invoice');
    }

    public function lockscreen()
    {
        return view('backend.Pages.page-lockscreen');
    }

}
