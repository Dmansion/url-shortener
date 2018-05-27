@extends('layouts.base')
@section('content')
<h1>URL Shortener</h1>
<form method="post">
    {{ csrf_field() }}
    <input type="text" value="{{ old('url') }}" name='url' placeholder="Entrez votre URL a reduire ici !">
 {!! $errors->first('url','<p class="error-msg">:message</p>') !!}
</form>
@stop