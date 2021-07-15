<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class FrontModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function homepage()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.index',compact('lang'));
    }

    public function works()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.works',compact('lang'));
    }

    public function team()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.team',compact('lang'));
    }

    public function services()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.services',compact('lang'));
    }

    public function contact()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.contact',compact('lang'));
    }

    public function post()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.post',compact('lang'));
    }
    public function blogs()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.blogs',compact('lang'));
    }
    public function about()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.about',compact('lang'));
    }

}
