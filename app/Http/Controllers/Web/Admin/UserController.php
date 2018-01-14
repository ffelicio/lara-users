<?php

namespace LaraUsers\Http\Controllers\Web\Admin;

use LaraUsers\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('web/admin/users/index');
    }
}