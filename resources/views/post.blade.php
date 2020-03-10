@extends('layouts.app')

@section('title', title(__('Blog Post')))

@section('content')
@include('inc.blog_form')
@endsection

