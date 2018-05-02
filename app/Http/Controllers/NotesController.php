<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notes=new Note;
        $notes->title=$request->input('title');
        $notes->body=$request->input('body');
        $notes->notebook_id=$request->input('notebook_id');
        $notes->save();
       
         $notebookId=$request->notebook_id;
        return redirect()->route("notebooks.show",compact('notebookId'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note=Note::find($id);

        return view('notes.show')->with('note',$note);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $note=Note::find($id);
        return view("notes.edit",compact('note'));

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
        $notes=Note::find($id);
        $notes->title=$request->input('title');
        $notes->body=$request->input('body');
        $notes->save();

       
        return redirect()->route("notebooks.show",$notes->notebook_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $notes= Note::find($id);
        $notes->delete();

        
        return redirect()->route("notebooks.show",$notes->notebook_id);
   }


    public function createnote($noteId){

        return view('notes.create')->with('id',$noteId);
    }
}
