<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index() {
        $application = Application::orderBy('updated_at', 'desc')->get();
        return view('admin.application.index', ['application' => $application]);
    }
}
