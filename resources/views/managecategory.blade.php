@extends('layout')
@section('container')
<h1>Manage Category</h1>
<table border='1' width="500px">
	<tr><td>ID</td><td>Category</td><td>Action</td></tr>
	@foreach($data as $list)
	<tr><td>{{$list->id}}</td><td>{{$list->category_name}}</td><td>Edit|Delete</td></tr>
	@endforeach
</table>
@endsection

