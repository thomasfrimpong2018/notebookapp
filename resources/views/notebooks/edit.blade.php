@extends('layouts.base')

@section('content')

<div class="container">
<h1>Edit Notebook</h1>


{!! Form::open(['action'=>['NotebooksController@update',$notebook->id],'method'=>'POST'])!!}
 <div class="form-group">
  {{Form::label("name",'Notebook Name')}}
 </div>
 <div class='form-group'>
    {{Form::text('name',$notebook->name, ['class'=>'form-control','placeholder'=>'Enter Title'])}}  
 </div>
 
 {{Form::hidden('_method','PUT')}}
 {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}

@endsection