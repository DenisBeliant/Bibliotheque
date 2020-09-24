<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpruntRequest;
use Illuminate\Support\Facades\DB;
use App\Emprunts;
use App\Emprunteurs;

class EmpruntsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param  int  $id
     */
    public function index()
    {
        //

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
    public function store(EmpruntRequest $request)
    {
        //
        $today = new \DateTime();
        $after = new \DateTime();

        DB::table('emprunts')
            ->insert(['user_id' => $request['user'], 'livres_id' => $request['livre'], 'date_location' => $today, 'fin_location' => date_add($after, \date_interval_create_from_date_string("+ 5 days"))]);

        DB::table('livres')
            ->where('id', $request['livre'])
            ->decrement('stock');
            
        return redirect('/livres');
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
        $emprunteur = Emprunteurs::whereId($id)->get();

        $emprunts = DB::table('emprunts')
        ->join('livres', 'emprunts.livres_id', '=', 'livres.id')
        ->select("*")
        ->where('emprunts.user_id', "=", $id)
        ->get();

        $emprunteur = $emprunteur[0];
        
        return view('emprunts_emprunteur', compact('emprunteur', 'emprunts'));
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
