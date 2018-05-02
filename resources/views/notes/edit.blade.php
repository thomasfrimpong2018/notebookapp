@extends('layouts.base')

@section('content')

<div class="container">
<h1>Edit Notes</h1>

{!! Form::open(['action'=>['NotesController@update',$note->id],'method'=>'POST'])!!}
 <div class="form-group">
  {{Form::label("title",'Title')}}

 {{Form::text('title',$note->title, ['class'=>'form-control','placeholder'=>'Enter Title'])}}
 </div>
 <div class='form-group'>
    {{Form::label('body','Body')}}
    {{Form::textarea('body',$note->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Enter Text'])}}
 </div>
 
 {{Form::hidden('_method','PUT')}}
 {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}

@endsection