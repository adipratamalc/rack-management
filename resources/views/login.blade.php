@extends('layouts.auth')

@section('auth-content')
<div class="container mt-5">
  <div class="row d-flex flex-column justify-content-center align-items-center" style="height: 90vh">
    <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4">
      <div class="login-brand">
        <img src="../assets/img/favicon.svg" alt="logo-aprak" height="40">
        <p class="h3 text-primary font-weight-bold mt-3">APRAK LOGIN</p>
      </div>

      <div class="card card-primary">
        <div class="card-body">
          <form method="POST" action="#" class="needs-validation" novalidate="">
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
              <div class="invalid-feedback">
                Please fill in your email
              </div>
            </div>

            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
              </div>
              <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
              <div class="invalid-feedback">
                please fill in your password
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="simple-footer">
        Copyright &copy; 2022 <div class="bullet"></div>
        <a href="https://logidevid.github.io/">
          Logidev Indonesia
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
