@extends('Member.layout')
@section('page_title','Dashboard')
@section('content')

    @livewire('member.components.navbar')
    @livewire('member.modal.quick-alerts')
    @livewire('member.content-control')

@endsection
