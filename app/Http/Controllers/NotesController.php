<?php

namespace App\Http\Controllers;

use App\Models\notes;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function __construct() {
      
    }
    public function index()
    {
        $TeamNotes=notes::inRandomOrder()->get();
    $userNotes=notes::where('creater',Auth::id())->get();
    
    return view('dashboard',['userNotes'=>$userNotes,'TeamNotes'=>$TeamNotes]);
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
        notes::create(['note_body'=>$request->note_body,'creater'=>Auth::user()->id]);
       return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function show(notes $notes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function edit(notes $notes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notes $notes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function destroies( $id)
    { $Note=notes::find($id);
        
         $this->authorize('delete', $Note);
          $Note->delete();

        return redirect()->route('dashboard');
    }
}
