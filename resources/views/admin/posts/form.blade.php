@extends('admin.layouts.app')

@section('title', 'home')

@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
          <h1>{{ isset($post) ? 'Edit Post' : 'New Post' }}</h1>

  <form 
    action="{{ isset($post) ? route('admin.posts.update', $post) : route('admin.posts.store') }}"
    method="POST"
    enctype="multipart/form-data"
  >
    @csrf
    @if(isset($post)) @method('PUT') @endif

    {{-- Title --}}
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input 
        type="text" 
        name="title" 
        id="title"
        class="form-control" 
        value="{{ old('title', $post->title ?? '') }}" 
        required
      >
    </div>

    {{-- Content --}}
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea 
        name="content" 
        id="editor" 
        class="form-control wysiwyg" 
        rows="6"
      >{{ old('content', $post->content ?? '') }}</textarea>
    </div>

    {{-- Category --}}
    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select class="form-control selectric" name="category_id">
        <option value="">Select a category</option>
        @foreach($categories as $category)
          <option 
            value="{{ $category->id }}" 
            {{ old('category_id', $post->category_id ?? '') == $category->id ? 'selected' : '' }}
          >
            {{ $category->name }}
          </option>
        @endforeach
      </select>
    </div>

    {{-- Tags --}}
    <div class="mb-3">
      <label class="form-label">Tags</label>
      <div class="form-check">
        @foreach($tags as $tag)
          <label class="form-check-label me-3">
            <input 
              type="checkbox" 
              name="tags[]" 
              value="{{ $tag->id }}"
              class="form-check-input"
              {{ (isset($post) && $post->tags->pluck('id')->contains($tag->id)) || is_array(old('tags')) && in_array($tag->id, old('tags')) ? 'checked' : '' }}
            >
            {{ $tag->name }}
          </label>
        @endforeach
      </div>
    </div>

    {{-- Featured Image --}}
    <div class="mb-3">
      <label class="form-label">Featured Image</label>
      @if(isset($post) && $post->image)
        <div class="mb-2">
          <img 
            src="{{ asset('storage/'.$post->image) }}" 
            alt="Current Image" 
            width="150"
          >
        </div>
      @endif
      <input type="file" name="image" class="form-control">
    </div>

    {{-- Status --}}
    <div class="mb-3">
      <label class="form-label">Status</label>
      <select name="status" class="form-select selectric" required>
        <option value="draft" {{ old('status', $post->status ?? '') == 'draft' ? 'selected' : '' }}>Draft</option>
        <option value="pending" {{ old('status', $post->status ?? '') == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="published" {{ old('status', $post->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
      </select>
    </div>

    {{-- Submit --}}
    <button type="submit" class="btn btn-primary">
      {{ isset($post) ? 'Update Post' : 'Create Post' }}
    </button>
  </form>
  </div>
        </section>
        @endsection

@push('scripts')
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>CKEDITOR.replace('editor');</script>
@endpush
          