@extends('layouts.base')
@section('content')
<h1>Voici votre URL reduite</h1>
<a class="result-url" href="{{ config('app.url') }}/{{ $shortened }}">
	{{ config('app.url') }}/{{ $shortened }}
</a>
@stop