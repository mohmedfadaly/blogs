<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {
        $title = ' Hello to index';
        return view('pages.index')->with('title',$title);
    }

    public function aboute() {
        return view('pages.aboute');
    }

    public function services() {

        $data = [
            'title' => ' The following services are provided: ',
            'services' => [
                'programming','automation',' web desing'
            ]
            ];
        return view('pages.services')->with($data);
    }
}
