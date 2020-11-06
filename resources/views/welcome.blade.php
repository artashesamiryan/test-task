@extends('layouts.welcome')

@section('content')
    <div>
        <br>
        Author: {{$b->author}}<br>
        Desciprtion: {{$b->description}}
    </div>
@endsection
