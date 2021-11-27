@extends('Member.layout')
@section('page_title','Dashboard')
@section('content')

    @livewire('admin.components.navbar')
    @livewire('admin.modal.package')
    @livewire('admin.content-control')

@endsection
