<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAdmin(): View
    {
        return view('admin.loginAdmin'); // view('folder.file', compact())
    }

    public function adminProduk(): View
    {
        return view('admin.adminProduk'); // view('folder.file', compact())
    }

    public function adminReviews(): View
    {
        return view('admin.adminReviews'); // view('folder.file', compact())
    }
}
