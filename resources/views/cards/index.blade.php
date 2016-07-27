@extends('layout')


@section('content')
<h1>All cards</h1>

@foreach($cards as $card)
	<div>
		<a href="{{url('/cards/'.$card->id)}}">{{$card->title}}</a>
	</div>
@endforeach
@endsection