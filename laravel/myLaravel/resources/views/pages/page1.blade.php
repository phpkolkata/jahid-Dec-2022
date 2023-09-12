@extends('tpl.master')
@section('title') page1 @endsection

@section('body')
hello this is my page 1
<button class="btn btn-primary">click</button>
@endsection

@section('nav')
@parent
chil nav
@endsection

@section('js')
<script src="test.js"></script>
@endsection
