@extends('admin.layouts.app')

@section('title', 'home')

@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
          <form action="{{ isset($category) 
                  ? route('admin.categories.update',$category) 
                  : route('admin.categories.store') }}"
        method="POST">
    @csrf
    @if(isset($category)) @method('PUT') @endif

    <div class="form-group">
      <label>Name</label>
      <input name="name" class="form-control"
             value="{{ old('name', $category->name ?? '') }}" />
    </div>

    <button class="btn btn-primary">
      {{ isset($category) ? 'Update' : 'Create' }}
    </button>
  </form>
          </div>
        </section>
       <!-- Main Content end -->
@endsection