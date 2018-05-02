@extends('layouts.base')

@section('content')

<div class="container">
<h1>Edit Notes</h1>
<form action={{route("notes.update",$note->id)}} method="POST" >
    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="form-group">
    <label for="title">Notes Title</label>
    <input  name="title" type="text" class="form-control" />
    </div>
    <div class="form-group">
        <label for="body">Note Body</label>
        <input  name="body" type="text" class="form-control" />
       
        </div>
    <input class="btn btn-primary" value="Update" type="submit"/>
    </div>
</form>

@endsection