@extends('layouts.public')

@section('content')

<h1 class="py-5 text-danger">Comics list from vue</h1>

<ul>

    @foreach ($comics as $comic)

    <li>{{$comic['title']}}</li>

    @endforeach

</ul>

@endsection

