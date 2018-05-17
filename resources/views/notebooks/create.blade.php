@extends('layouts.base')

@section('content')

<div class="container">
<h1>Create Notebook</h1>
<form action="/notebooks" method="POST" >
    {{csrf_field()}}
    <div class="form-group">
    <label for="name">Notebook Name</label>
    <input  name="name" type="text" class="form-control" />
    </div>
    <input class="btn btn-primary" value="Submit" type="submit"/>
    </div>
</form>


@endsection