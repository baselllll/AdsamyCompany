<?php

namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Entities\teams;
use Intervention\Image\Facades\Image;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $teams = teams::all();
        return view('widegts::teams.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widegts::teams.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $fullPathName="";
        if($request->has('img')){  
            $fullPathName = $request->file('img')->getClientOriginalName();
            $imagename = $request->file('img');
            $path = public_path(('front/images/teams/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        teams::create([
            'ar_name'=>$request->input('ar_name'),
            'en_name'=>$request->input('en_name'),
            'en_job'=>$request->input('en_job'),
            'ar_job'=>$request->input('ar_job'),
            'img'=>$fullPathName,
        ]
        );
        return redirect()->route('teams.index')->with('message', 'Data inserted');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('widegts::teams.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $teams = teams::find($id);
        return view('widegts::teams.edit',compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $fullPathName="";
        if($request->has('img')){  
            $fullPathName = $request->file('img')->getClientOriginalName();
            $imagename = $request->file('img');
            $path = public_path(('front/images/teams/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        teams::find($id)->update(
        [
            'ar_name'=>$request->input('ar_name'),
            'en_name'=>$request->input('en_name'),
            'en_job'=>$request->input('en_job'),
            'ar_job'=>$request->input('ar_job'),
            'img'=>$fullPathName,
        ]);
        
        return redirect()->route('teams.index')->with('message', 'Data Deleted');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        teams::destroy($id);
        return redirect()->route('teams.index')->with('message', 'Data Deleted');
    }
}
