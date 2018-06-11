@extends('frontend.layouts')
@section('container')
<div class="text-blue yellow-container signup-forms" style="margin-bottom: 5%;">
    <form id="loginForm">
      @csrf
      <div style="text-align: center;">
        <h1>Login</h1>
        <div class="yellow-container-forms">
          <input maxlength="25" type="text" placeholder="Email" name="email" required>
          <br>
          <input maxlength="50" type="password" placeholder="Password" name="password" required>
          <br>
          <div style="text-align: left;">
            <a style="display: inline" href="{{ route('register') }}">Register</a>
            <br>
            <br>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
          <div>
            <button type="submit">SIGN IN</button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
@section('scripts')
<script>
      var loginForm = $("#loginForm");
      loginForm.submit(function(e){
      e.preventDefault();
      var formData = loginForm.serialize();
      console.log(formData);
          $.ajax({
              url:'login',
              type:'POST',
              data:formData,
              success:function(done){
                  window.location.replace("{{ route('dashboard') }}");
              },
              error: function (xhr) {
                  $('#error').hide().html(xhr.responseJSON.errors.email[0]).slideDown();
              }
          });
      });
</script>
@endsection