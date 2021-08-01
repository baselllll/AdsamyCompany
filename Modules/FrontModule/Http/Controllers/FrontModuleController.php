<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\FrontModule\Entities\blogs;
use Modules\FrontModule\Entities\ceospecah;
use Modules\FrontModule\Entities\Client;
use Modules\FrontModule\Entities\gallery;
use Modules\FrontModule\Entities\teams;
use Modules\FrontModule\Entities\works;

class FrontModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function homepage()
    {
        $lang = LaravelLocalization::getCurrentLocale();
        $gallery = gallery::all();
        $clients = Client::all();
        $teams = teams::all();
        $works = works::all();
        $ceo = ceospecah::first();
        // dd($gallery);
        return view('frontmodule::layouts.pages.index',compact('works','lang','gallery','clients','teams','ceo'));
    }

    public function works()
    {
        $clients = Client::all();
        $works = works::all();
        
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.works',compact('lang','clients','works'));
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
        $blogs = blogs::all();
        $lastnews = blogs::latest()->get();
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.blogs',compact('lang','blogs','lastnews'));
    }
    public function about()
    {
        $ceo = ceospecah::first();
        $lang = LaravelLocalization::getCurrentLocale();
        return view('frontmodule::layouts.pages.about',compact('lang','ceo'));
    }

}
