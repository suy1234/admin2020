@extends('app::admin.layouts.master')

@section('navbar')
@component('app::admin.components.navbar')
@slot('resource', 'user')
@endcomponent

@endsection

@section('content')

@endsection
