@extends('layouts.base')

@section('content')

<div class="container">
<h1>Edit Notebook</h1>
<form action="/notebooks/{{$notebook->id}}" method="POST" >
    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="form-group">
    <label for="name">Notebook Name</label>
    <input  name="name" type="text" class="form-control" />
    </div>
    <input class="btn btn-primary" value="Update" type="submit"/>
    </div>
</form>

@endsection