<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collector;

class CollectorController extends Controller
{
    public function index() {
        $collectors = Collector::all();
        // $data = [
        //     'collectors' => $collectors
        // ]

        // return view('pages.collectors.index', ['collectors' => $collectors]);
        // return view('pages.collectors.index', $data);
        return view('pages.collectors.index', compact('collectors'));
    }
}
