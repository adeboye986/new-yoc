@extends('admin.layouts.app')

@section('title', 'home')

@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
          <a href="{{ route('admin.tags.create') }}" class="btn btn-success mb-3">New Tag</a>

<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Slug</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tags as $tag)
    <tr>
      <td>{{ $tag->name }}</td>
      <td>{{ $tag->slug }}</td>
      <td>
        <a href="{{ route('admin.tags.edit', $tag) }}"
           class="btn btn-sm btn-primary">Edit</a>
        <form action="{{ route('admin.tags.destroy', $tag) }}"
              method="POST"
              class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit"
                  class="btn btn-sm btn-danger"
                  onclick="return confirm('Delete this tag?')">
            Delete
          </button>
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