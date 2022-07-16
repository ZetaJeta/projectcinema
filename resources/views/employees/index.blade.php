@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')
<table class="table">
@foreach($rows as $row)
<tr>
    <td>{{$row->name}}</td>
    <td>{{$row->nik}}</td>
    <td>{{$row->phone_number}}</td>
    <td><img src="{{$row->photo}}" alt=""></td>
</tr>
@endforeach
</table>
{{$rows}}
@endsection