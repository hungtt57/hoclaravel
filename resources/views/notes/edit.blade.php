@extends('layout')

@section('content')
	<h1>Edit the note</h1>

		<form action="{{url('/notes/'.$note->id)}}" method='POST'>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		{{method_field('PATCH')}}
			<div class="form-group">
			<textarea name="body" class='form-control' id="" cols="30" rows="10">{{$note->body}}</textarea>
			</div>


			<div class="form-group">
				<button type='submit' class='btn btn-primary'>Update note</button>
			</div>
		</form>
@stop