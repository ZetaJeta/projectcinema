@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<section class="audiences">
    <ol>
    @foreach ($audiences as $audience)
    <li>
        {{$audience->name}}
    </li>
    @endforeach
    </ol>
</section>
@endsection