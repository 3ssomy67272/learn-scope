@extends('template.temp')

@section('title')
    <title>welcome {{$name}}</title>
@endsection

@section('content')
    @for ($i = 0; $i <= 10; $i++)
        The current value is {{ $i }}
        <br>
    @endfor

    <h4>this is essam's page</h4>
@endsection