<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/emplogin.css') }}">
  </head>
  <body>
    <div class="header">
      <h1>Milk Collection & Distribution System</h1>
      <a href="home">
      <button class="btn1">Home</button>
      </a>
    </div>
    <div class="center">
      <h1>Employee Login</h1>
      <form action="#" method="post">
        @csrf
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          
        </div>
      </form>
    </div>

  </body>
</html>
