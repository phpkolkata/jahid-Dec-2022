@extends('tpl.master')
@section('title') page1 @endsection

@section('body')

Age = {{ $age }} and name= {{ $name }} <br>
@if($age <= 2)
    You are Infant
@elseif($age <= 4)
    You are Toddler
@elseif($age <= 12)
    You are Kid
@elseif($age <= 19)
    You are Teenager
@elseif($age <= 40)
    You are Young
@elseif($age <= 100)
    You are Mature
@else
    wrong entry
@endif


@endsection

@section('nav')
@parent
chil nav
@endsection

@section('js')
<script src="test.js"></script>
@endsection
