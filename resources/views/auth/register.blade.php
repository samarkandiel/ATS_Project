@extends('layout')
@section('title')
ATS Register
@endsection
@section('content')
  <div class="page text-center">
    <!-- Page Content-->
<main class="page-content">
  <section class="section-80 section-md-120">
  <div class="shell">
    <ul class="nav-custom">
      <li><a href="login.html">Login</a></li>
      <li><a href="register.html" class="active">Register</a></li>
    </ul>
    <div class="range range-xs-center">
      <div class="cell-sm-8 cell-md-6 cell-lg-4">
        <!-- RD Mailform-->
        <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-left">
          <div class="form-group">
            <label for="login" class="form-label form-label-outside">Username</label>
            <input id="login" type="text" name="login"  class="form-control form-control-gray">
          </div>
          <div class="form-group">
            <label for="email" class="form-label form-label-outside">E-mail</label>
            <input id="email" type="text" name="email"  class="form-control form-control-gray">
          </div>
          <div class="form-group">
            <label for="password" class="form-label form-label-outside">Password</label>
            <input id="password" type="password" name="password" class="form-control form-control-gray">
          </div>
          <div class="form-group">
            <label for="password2" class="form-label form-label-outside">Confirm Password</label>
            <input id="password2" type="password" name="password2" class="form-control form-control-gray">
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-sm offset-top-22">registration</button>
        </form>
      </div>
    </div>
  </div>
</section>
</main>
</div>
@endsection

    