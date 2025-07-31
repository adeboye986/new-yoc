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
                    <th>Action</th>
                    <th>Registered At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($authors as $index => $author)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->email }}</td>
                        <td>
                        <a href="{{ route('admin.author.edit', $author->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.author.destroy', $author->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this user?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
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