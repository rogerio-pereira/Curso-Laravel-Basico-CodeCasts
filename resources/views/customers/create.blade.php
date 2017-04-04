@extends('layouts.main')

@section('page-title')
    - Criar Cliente
@stop

@section('content')
    <h3>Placeholder para nosso form!</h3>

    {!! Form::open(['url' => 'foo/bar']) !!}
        @include('customers.partials.form')
    {!! Form::close() !!}
@stop