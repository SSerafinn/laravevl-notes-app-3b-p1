<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    public function index(){
        
        $notes = Note::latest()->get(); //comms with model

        return view('notes.index', ['notes'=> $notes]); // hand to view

    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'title' => 'required|max:100',
            'body' => 'required',
        ]);

        Note::create($validated);

        return redirect()->route('notes.index')->with('success', 'Note added.');
    }

    public function create(){
        return view('notes.create');
    }
}
