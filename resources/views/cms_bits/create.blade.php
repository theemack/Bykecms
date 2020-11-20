@extends('layouts.cms')

@section('content')

    <h1>{{ __('Create Bit') }}</h1>

    {!! Form::open(['url'=>'cms_bits']) !!}
        @csrf

        @include('cms_bits.form')

    {!! Form::close() !!}

@endsection