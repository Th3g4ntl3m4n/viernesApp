@extends('dashboardtemplate')

@section('content')

@php
    $user_type= Auth::user()->type;
@endphp

@switch($user_type)
    @case(0)
    <p>Este es el panel de un Comprador.</p>
    @break
    @case(1)
    <p>Este es el panel de un Comercial.</p>
    @break    
    @case(2)
        <p>Este es el panel de un Coordinador.</p>
    @break
    @case(3)
        <p>Este es el panel de un Programador.</p>
    @break
    @case(4)
    <p>Este es el panel de un Hacker.</p>
    @break
    @case(5)
    <p>Este es el panel de un Diseñador.</p>
    @break
    @case(6)
    <p>Este es el panel de un Secop.</p>
    @break
    @case(7)
    <p>Este es el panel de un SuperAdmin.</p>
    @break
    @default
        
@endswitch
    <!-- <p>Welcome to this adsad admin panel.</p> -->
@endsection