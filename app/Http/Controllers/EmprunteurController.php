<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Emprunteurs;

class EmprunteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        // $emprunteurs = Emprunteurs::all()->sortBy('nom');

        $emprunteurs = DB::table('emprunts')
                        ->join('emprunteurs', 'emprunts.user_id', '=', 'emprunteurs.id')
                        ->select(DB::raw('count(*) as nbEmprunt, user_id as id, nom, prenom, email, status'))
                        ->groupBy('user_id', 'nom', 'prenom', 'email', 'status')
                        ->get();

        return view('emprunts', compact('emprunteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
        $status = DB::select("SELECT status FROM emprunteurs WHERE id = $id");

        DB::table('emprunteurs')
        ->where('id', $id)
        ->update(['status' => $status[0]->status == 0 ? 1 : 0]);
        return redirect('/emprunteur');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
