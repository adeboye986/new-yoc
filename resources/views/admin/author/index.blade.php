@extends('admin.layouts.app')

@section('title', 'home')

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
    <h1>Users</h1>
<a href="{{ route('admin.author.create') }}">Create New User</a>
<ul>
@foreach($authors as $author)
    <li>{{ $author->name }} ({{ $author->email }})</li>
@endforeach
</ul>
    </div>
  </section>
  @endsection