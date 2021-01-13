<?php

namespace App\Http\Controllers;

use App\Models\Agencies;
use Illuminate\Http\Request;

class AgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies=Agencies::all();
        return view('agency.list',compact('agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agency.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agency=new Agencies();
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency=Agencies::findOrFail($id);
        return view('agency.edit',compact('agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agency=Agencies::findOrFail($id);
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agency=Agencies::find($id);
        $agency->delete();
        return redirect()->route('agency.index');
    }
    public function search()
    {
        return view('agency.list');
    }

    public function getAgenciesSearch(Request $request)
    {
        $agencies = Agencies::where('agent_name','LIKE','%'.$request->keyword.'%')->get();
        return view('agency.list',compact('agencies'));

    }
}
