@extends('admin.layouts.app')

@section('title', 'home')

@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
          <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">New Category</a>

<table class="table">
  <thead>
    <tr><th>Name</th><th>Slug</th><th>Actions</th></tr>
  </thead>
  <tbody>
    @foreach($categories as $cat)
    <tr>
      <td>{{ $cat->name }}</td>
      <td>{{ $cat->slug }}</td>
      <td>
        <a href="{{ route('admin.categories.edit',$cat) }}" class="btn btn-sm btn-primary">Edit</a>
        <form action="{{ route('admin.categories.destroy',$cat) }}"
              method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger"
                  onclick="return confirm('Delete this?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
          </div>
        </section>
        <!-- Main Content end -->
@endsection