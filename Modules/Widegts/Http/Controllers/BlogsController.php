<?php

namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Entities\blogs;
use Intervention\Image\Facades\Image;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $Blogs = blogs::all();
        return view('widegts::Blogs.index',compact('Blogs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widegts::Blogs.create');
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
            $path = public_path(('front/images/blogs/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        blogs::create([
            'ar_title'=>$request->input('ar_title'),
            'en_title'=>$request->input('en_title'),
            'ar_content'=>$request->input('ar_content'),
            'en_content'=>$request->input('en_content'),
            'img'=>$fullPathName,
        ]
        );
        return redirect()->route('blog.index')->with('message', 'Data inserted');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('widegts::Blogs.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $blog = blogs::find($id);
        return view('widegts::Blogs.edit',compact('blog'));
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
            $path = public_path(('front/images/blogs/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        blogs::find($id)->update(
        [
        'ar_title'=>$request->input('ar_title'),
        'en_title'=>$request->input('en_title'),
        'ar_content'=>$request->input('ar_content'),
        'en_content'=>$request->input('en_content'),
        'img'=>$fullPathName,
        ]);
        
        return redirect()->route('blog.index')->with('message', 'Data Deleted');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        blogs::destroy($id);
        return redirect()->route('blog.index')->with('message', 'Data Deleted');
    }
}
