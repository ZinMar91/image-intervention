@extends('layouts.master')
@section('title', 'My Sample Project')

@section('content')
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
    </ol>
<div id="root">
  <message title="hello" body="testing 123324424"></message>
  <message title="hello" body="testing 123324424"></message>
  <message title="hello" body="testing 123324424"></message>
    <message title="hello" body="testing 123324424"></message>
</div>

    {{--<div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>--}}


    <!-- Main jumbotron for a primary marketing message or call to action -->
    {{-- <div class="jumbotron">
        <h1>My Sample Project</h1>
        <p>Use it as a starting point to create something more unique by building on or modifying it. </p>
    </div> --}}
@endsection
