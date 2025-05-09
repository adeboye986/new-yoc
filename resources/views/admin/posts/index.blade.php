@extends('admin.layouts.app')

@section('title', 'home')

@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
          <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">New Post</a>

<table class="table">
  <thead>
    <tr>
      <th>Title</th><th>Category</th><th>Tags</th>
      <th>Author</th><th>Status</th><th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $p)
    <tr>
      <td>{{ $p->title }}</td>
      <td>{{ $p->category->name }}</td>
      <td>{{ $p->tags->pluck('name')->join(', ') }}</td>
      <td>{{ $p->author->name }}</td>
      <td>{{ ucfirst($p->status) }}</td>
      <td>
        <a href="{{ route('posts.edit',$p) }}" class="btn btn-sm btn-primary">Edit</a>
        <form action="{{ route('posts.destroy',$p) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button onclick="return confirm('Delete this post?')" class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
          </div>
        </section>
        @endsection