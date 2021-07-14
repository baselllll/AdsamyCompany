<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class FrontModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function homepage()
    {
        return view('frontmodule::layouts.pages.index');
    }

    public function works()
    {
        return view('frontmodule::layouts.pages.works');
    }

    public function team()
    {
        return view('frontmodule::layouts.pages.team');
    }

    public function services()
    {
        return view('frontmodule::layouts.pages.services');
    }

    public function contact()
    {
        return view('frontmodule::layouts.pages.contact');
    }

    public function post()
    {
        return view('frontmodule::layouts.pages.post');
    }
    public function blogs()
    {
        return view('frontmodule::layouts.pages.blogs');
    }
    public function about()
    {
        return view('frontmodule::layouts.pages.about');
    }

}
