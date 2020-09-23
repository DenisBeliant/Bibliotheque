<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livres;

class LivresController extends Controller
{
    //
    public function __construct() {}

    public function index() {

        $livres = Livres::all();

        return view('Livres', compact('livres'));
    }
}
