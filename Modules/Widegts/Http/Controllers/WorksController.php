<?php
namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Entities\works;
use Intervention\Image\Facades\Image;
class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $works = works::all();
        return view('widegts::works.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widegts::works.create');
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
            $path = public_path(('front/images/works/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        works::create([
            'ar_name'=>$request->input('ar_name'),
            'en_name'=>$request->input('en_name'),
            'link'=>$request->input('link'),
            'img'=>$fullPathName,
        ]
        );
        return redirect()->route('works.index')->with('message', 'Data inserted');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('widegts::works.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $works = works::find($id);
        return view('widegts::works.edit',compact('works'));
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
            $path = public_path(('front/images/works/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        works::find($id)->update(
        [
            'ar_name'=>$request->input('ar_name'),
            'en_name'=>$request->input('en_name'),
            'link'=>$request->input('link'),
            'img'=>$fullPathName,
        ]);
        
        return redirect()->route('works.index')->with('message', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        works::destroy($id);
        return redirect()->route('works.index')->with('message', 'Data Deleted');
    }
}
