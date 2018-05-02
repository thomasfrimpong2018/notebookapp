@extends('layouts.base')

@section('content')

<div class="container">
<h1>Create Notes</h1>
<form action={{route('notes.store')}} method="POST" >
    {{csrf_field()}}
    <div class="form-group">
    <label for="title">Note Title</label>
    <input  name="title" type="text" class="form-control" />
    </div>
    <div class="form-group">
        <label for="title">Note Body</label>
        <textarea  name="body" type="text" class="form-control" ></textarea>
        </div>
    <input class="btn btn-primary" value="Submit" type="submit"/>
    <input type="hidden" name="notebook_id" value={{$id}} />
    </div>
</form>

@endsection