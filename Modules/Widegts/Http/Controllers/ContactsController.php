<?php

namespace Modules\Widegts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FrontModule\Entities\contacts;

class ContactsController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $contacts = contacts::all();
        return view('widegts::contacts.index',compact('contacts'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        contacts::destroy($id);
        return redirect()->route('contacts.index')->with('message', 'Data Deleted');
    }
}
