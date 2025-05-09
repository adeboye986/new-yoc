@extends('admin.layouts.app')

@section('title', 'home')

@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
          <h1>
    {{ isset($tag) ? 'Edit Tag' : 'New Tag' }}
  </h1>

  <form 
    action="{{ isset($tag)
               ? route('admin.tags.update', $tag)
               : route('admin.tags.store') }}"
    method="POST"
  >
    @csrf
    @if(isset($tag)) @method('PUT') @endif

    <div class="form-group">
      <label>Name</label>
      <input
        type="text"
        name="name"
        class="form-control"
        value="{{ old('name', $tag->name ?? '') }}"
        required
      >
    </div>

    <button class="btn btn-primary">
      {{ isset($tag) ? 'Update Tag' : 'Create Tag' }}
    </button>
  </form>
          </div>
        </section>
       <!-- Main Content end -->
@endsection