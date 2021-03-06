@extends('layouts.cms')

@section('content')

   <h1>{{ $cms_config->description }}</h1>

   {!! Form::model($cms_config, ['route' => ['cms_configs.update', $cms_config->id]]) !!}

      @csrf
      @method('PATCH')

      @include('cms_configs.form')

    {!! Form::close() !!}

@endsection