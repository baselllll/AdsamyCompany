<?php

namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Entities\ceospecah;

class CeoSpecahController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $ceospecahs = ceospecah::all();
        return view('widegts::ceospecahs.index',compact('ceospecahs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widegts::ceospecahs.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        ceospecah::create($request->all());
        return redirect()->route('ceospecahs.index')->with('message', 'Data inserted');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('widegts::ceospecahs.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $ceospecahs = ceospecah::find($id);
        return view('widegts::ceospecahs.edit',compact('ceospecahs'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        ceospecah::find($id)->update($request->all());
        
        return redirect()->route('ceospecahs.index')->with('message', 'Data Deleted');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        ceospecah::destroy($id);
        return redirect()->route('ceospecahs.index')->with('message', 'Data Deleted');
    }
}
