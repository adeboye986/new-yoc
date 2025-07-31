@extends('admin.layouts.app')

@section('title', 'home')

@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Edit User</h4>
              </div>
              <div class="card-body">
              <form action="{{ route('admin.author.update', $author->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                      <label for="frist_name">Name</label>
                      <input id="frist_name" type="text" value="{{ $author->name }}" class="form-control" name="name" autofocus required>
                      @error('name') <div>{{ $message }}</div> @enderror
                    </div>
                    
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" value="{{ $author->email }}" class="form-control" name="email" required>
                    @error('email') <div>{{ $message }}</div> @enderror
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">New Password (leave blank to keep current)</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                        @error('password') <div>{{ $message }}</div> @enderror
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input type="password" class="form-control" name="password_confirmation">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Update User
                    </button>
                  </div>
                </form>
              </div>
              <!-- <div class="mb-4 text-muted text-center">
                Already Registered? <a href="auth-login.html">Login</a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </section>
  @endsection