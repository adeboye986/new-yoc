@extends('admin.layouts.app')

@section('title', 'home')

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
  <div class="container">
        <h1>Authors List</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registered At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($authors as $index => $author)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->email }}</td>
                        <td>{{ $author->created_at->format('d M, Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No authors found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    </div>
  </section>
  @endsection