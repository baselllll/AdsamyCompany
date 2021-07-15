<?php
namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Entities\Client;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('widegts::Client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widegts::Client.create');
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
            $path = public_path(('front/images/Client/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        Client::create([
            'img'=>$fullPathName,
        ]
        );
        return redirect()->route('clients.index')->with('message', 'Data inserted');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('widegts::Client.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $clients = Client::find($id);
        return view('widegts::Client.edit',compact('clients'));
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
            $path = public_path(('front/images/Client/').$imagename->getClientOriginalName());
            $image =  Image::make($request->file('img'))->resize(300, 200)->save($path);
        }
        Client::find($id)->update(
        [
            'img'=>$fullPathName
        ]);
        
        return redirect()->route('clients.index')->with('message', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return redirect()->route('clients.index')->with('message', 'Data Deleted');
    }
}
