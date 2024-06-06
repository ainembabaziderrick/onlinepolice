@extends('layouts.app')

@section('content')

  <!-- Register start -->

  <div class="card mb-3">

    <div class="card-body">

      <div class="pt-4 pb-2">
        @include('message')
        <h5 class="card-title text-center pb-0 fs-4">Create New Account</h5>
        <p class="text-center small">Enter your details to create Account</p>
      </div>

      <form class="row g-3 needs-validation" novalidate method="post" action = "{{ url('register_post')}}">
          {{csrf_field()}}
        <div class="col-12">
          <label  class="form-label">Full Names</label>
          <div class="input-group has-validation">
            <span class="input-group-text" ></span>
            <input type="text" name="name" class="form-control"  required value = "{{ old('name')}}">
            <div class="invalid-feedback">Please enter your names.</div>
          </div>
        </div>
        <label  class="form-label">Email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" ></span>
            <input type="email" name="email" class="form-control"  required value = "{{ old('email')}}">
            <div class="invalid-feedback">Please enter your email.</div>
          </div>
        </div>

        <div class="col-12">
          <label  class="form-label">Password</label>
          <input type="password" name="password" class="form-control"  required>
          <div class="invalid-feedback">Please enter your password!</div>
        </div>
        <div class="col-12">
          <label  class="form-label">Confirm Password</label>
          <input type="password" name="c_password" class="form-control"  required>
          <div class="invalid-feedback">Please enter your confirmation password!</div>
        </div>

        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Role<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <select name="is_role" id="" class="form-control" required>
                                    <option value="3">Citizen</option>
                                   
                                </select>
                               
                            </div>
                        </div>

        
        <div class="col-12">
          <button class="btn btn-primary w-100" type="submit">Register Account</button>
        </div>
        <div class="col-12">
          <p class="small mb-0">Have Account Already? <a href="{{ url('login')}}">Login</a></p>
        </div>
        
      </form>

    </div>
  </div>

  <!--Register  End -->

  @endsection

  