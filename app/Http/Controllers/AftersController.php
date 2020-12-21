<?php

namespace App\Http\Controllers;

use DB;
use App\Models\After;
use Illuminate\Http\Request;

class AftersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $user = After::where('mokytojo_id',$user_id)->get();
        return view('pages.afterSchool.createnewform')->with('afters', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pavadinimas' => 'required',
            'aprasas' => 'required',
            'pradzios_data' => 'required',
            'pabaigos_data' => 'required',
            'pradzios_laikas' => 'required',
            'pabaigos_laikas' => 'required',
            'max_dalyviu' => 'required'
        ]);

        //Create post
        $after = new After;
        $after->pavadinimas = $request->input('pavadinimas');
        $after->aparasas = $request->input('aprasas');
        $after->pradzios_data = $request->input('pradzios_data');
        $after->pabaigos_data = $request->input('pabaigos_data');
        $after->pradzios_laikas = $request->input('pradzios_laikas');
        $after->pabaigos_laikas = $request->input('pabaigos_laikas');
        $after->max_dalyviu = $request->input('max_dalyviu');
        $after->mokytojo_id = auth()->user()->id;
        $after->save();

        return redirect('/after')->with('success', 'Sukurtas nauja veikla');
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
        $form = After::find($id);
        return view('pages.afterSchool.editform')->with('page',$form);
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
        $this->validate($request, [
            'pavadinimas' => 'required',
            'aprasas' => 'required',
            'pradzios_data' => 'required',
            'pabaigos_data' => 'required',
            'pradzios_laikas' => 'required',
            'pabaigos_laikas' => 'required',
            'max_dalyviu' => 'required'
        ]);

        //Create post
        $after =  After::find($id);
        $after->pavadinimas = $request->input('pavadinimas');
        $after->aparasas = $request->input('aprasas');
        $after->pradzios_data = $request->input('pradzios_data');
        $after->pabaigos_data = $request->input('pabaigos_data');
        $after->pradzios_laikas = $request->input('pradzios_laikas');
        $after->pabaigos_laikas = $request->input('pabaigos_laikas');
        $after->max_dalyviu = $request->input('max_dalyviu');
        $after->mokytojo_id = auth()->user()->id;
        $after->save();

        return redirect('/after/'.$id)->with('success', 'Sukurtas nauja veikla');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $after = After::find($id);
        $after->delete();
        return redirect('/after')->with('success', 'Veikla sekmingai pakeista');
    }
}
