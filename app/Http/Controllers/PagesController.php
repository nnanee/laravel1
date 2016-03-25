<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
       $people = [
           'Nadir', 'Kemal', 'Edis'
       ];
        return view ('pages.about', compact ('people'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
          return view ('pages.contact');
    }
}
