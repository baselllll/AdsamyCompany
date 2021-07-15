<?php

namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Entities\Subscribe;

class SubscribeController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $subscribes = Subscribe::all();
        return view('widegts::subscribes.index',compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widegts::subscribes.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        Subscribe::create($request->all());
        return redirect()->route('subscribes.index')->with('message', 'Data inserted');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('widegts::subscribes.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $subscribes = Subscribe::find($id);
        return view('widegts::subscribes.edit',compact('subscribes'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        Subscribe::find($id)->update($request->all());
        
        return redirect()->route('subscribes.index')->with('message', 'Data Deleted');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Subscribe::destroy($id);
        return redirect()->route('subscribes.index')->with('message', 'Data Deleted');
    }
}
