@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
      {{-- Alert --}}

      @if(session()->has('Success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif


      {{-- Login Form --}}
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
              @csrf
              <img src="/img/BankIT.png" width="150">
              <h1 class="h3 mb-3 fw-normal fontz">Please Login</h1>
              {{-- isi Email --}}
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror 
              </div>
              {{-- isi Password --}}
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg alpha mt-1" type="submit">Login</button>
            </form>
            <small class="d-block text-end mt-3">not registered? <a href="/register">Register Now!</a>
        </main>
    </div>
</div>

@endsection