@extends('layout')
@section('title')
ATS Login
@endsection
@section('content')
<div class="page text-center">
  <!-- Page Content-->
  <main class="page-content">
    <section class="section-80 section-md-120">
      <div class="shell">
        <ul class="nav-custom">
          <li><a href="login.html" class="active">Login</a></li>
          <li><a href="register.html">Register</a></li>
        </ul>
        <div class="range range-xs-center">
          <div class="cell-sm-8 cell-md-6 cell-lg-4">
            <!-- RD Mailform-->
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
              <div class="form-group">
                <label for="login" class="form-label form-label-outside">Username or e-mail</label>
                <input id="login" type="text" name="login" class="form-control form-control-gray">
              </div>
              <div class="form-group">
                <label for="password" class="form-label form-label-outside">Password</label>
                <input id="password" type="password" name="password"  class="form-control form-control-gray">
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-sm offset-top-22">sign in</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
  @endsection
 