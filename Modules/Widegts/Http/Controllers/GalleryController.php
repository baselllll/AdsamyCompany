<?php
namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Entities\gallery;
use Intervention\Image\Facades\Image;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $gallery = gallery::all();
        return view('widegts::gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widegts::gallery.create');
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
            $path = public_path(('front/images/gallery/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        gallery::create([
            'img'=>$fullPathName,
        ]
        );
        return redirect()->route('gallery.index')->with('message', 'Data inserted');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('widegts::gallery.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $gallery = gallery::find($id);
        return view('widegts::gallery.edit',compact('gallery'));
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
            $path = public_path(('front/images/gallery/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        gallery::find($id)->update(
        [
            'img'=>$fullPathName
        ]);
        
        return redirect()->route('gallery.index')->with('message', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        gallery::destroy($id);
        return redirect()->route('gallery.index')->with('message', 'Data Deleted');
    }
}
