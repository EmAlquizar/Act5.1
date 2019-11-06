<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function index()
    {
    	$sections = DB::table('sections')->get();
    	return view('section.index', compact('sections'));
    }
}
