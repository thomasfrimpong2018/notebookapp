<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Notebook;
use App\User;

class NotebooksController extends Controller
{
    public function index(){
        //$notebooks=Notebook::all();

       /* $user=Auth::user();
       $notebooks= $user->$notebooks;*/

       $user_id=auth()->user()->id;
       $user=User::find($user_id);
       return view('notebooks.index')->with('notebooks',$user->notebooks);

        
    }

    public function create(){
        return view('notebooks.create');
    }

    public function store(Request $request){
        $dataInput= $request->all();
        //Notebook::create($dataInput);
        /*$user=Auth::user();
        $user->notebooks()->create();*/

        $notebook= new Notebook;
        $notebook->name=$request->input('name');
        $notebook->user_id=auth()->user()->id;
        $notebook->save();

       return redirect('/notebooks');

    }

    public function edit($id){
       //$notebook=Notebook::where('id',$id)->first();
       //$user=Auth::user();

       $user_id=auth()->user()->id;
       $user=User::find($user_id);
       $notebook=$user->notebooks()->find($id);
       return view('notebooks.edit')->with('notebook',$notebook);
    }


    public function show($id){

        $notebook=Notebook::findOrFail($id);
        $notes=$notebook->notes;

        return view('notes.index',compact('notes','notebook'));

    }

    public function update(Request $request,$id){

        /*$notebook=Notebook::where('id',$id)->first();
        $notebook->update($request->all());*/
        
        $notebook= Notebook::find($id);
        $notebook->name=$request->input('name');
        $notebook->user_id=auth()->user()->id;
        $notebook->save();

        return redirect('/notebooks');
         
    }

    public function destroy($id){
        //$notebook=Notebook::where('id',$id)->first();

         /*$user=Auth::user();
       $notebook=$user->notebooks()->find($id);*/

       $notebook= Notebook::find($id);
        $notebook->delete();

        return redirect('/notebooks');


    }
}
