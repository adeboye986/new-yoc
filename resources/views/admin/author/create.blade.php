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
                <h4>Register User</h4>
              </div>
              <div class="card-body">
              <form method="POST" action="{{ route('admin.author.store') }}">
                @csrf
                    <div class="form-group">
                      <label for="frist_name">Name</label>
                      <input id="frist_name" type="text" value="{{ old('name') }}" class="form-control" name="name" autofocus required>
                      @error('name') <div>{{ $message }}</div> @enderror
                    </div>
                    <!-- <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" value="{{ old('email') }}" class="form-control" name="email" required>
                    @error('email') <div>{{ $message }}</div> @enderror
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password" required>
                        @error('password') <div>{{ $message }}</div> @enderror
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirmation">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Create User
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