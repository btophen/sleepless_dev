   @extends('layouts.app')

  @section('content')


 <!--Header Part End-->
    <div id="container">
      <!--Left Part-->
      <div id="column-left">
        <div class="box">
          <div class="box-heading">Account</div>
          <div class="box-content">
            <ul class="list-item">
              <li><a href="login">Login</a></li>
              <li><a href="register">Register</a></li>
              <li><a href="#">Forgotten Password</a></li>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">Order History</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Transactions</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--Left End-->
      <!--Middle Part Start-->
      <div id="content">
        <!--Breadcrumb Part Start-->
        <div class="breadcrumb"> <a href="/">Home</a> » <a href="#">Account</a> » <a href="login">Login</a> </div>
        <!--Breadcrumb Part End-->
        <h1>Account Login</h1>
        <div class="login-content">
          <div class="left">
            <h2>New Customer</h2>
            <div class="content">
              <p><b>Register Account</b></p>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
              <a class="button" href="#">Continue</a></div>
          </div>
          <div class="right">
            <h2>Returning Customer</h2>
            <form enctype="multipart/form-data" method="post" action="">
              <div class="content">
                <p>I am a returning customer</p>
                <b>E-Mail Address:</b><br>
                <input type="text" value="" name="email">
                <br>
                <br>
                <b>Password:</b><br>
                <input type="password" value="" name="password">
                <br>
                <a href="#">Forgotten Password</a><br>
                <br>
                <input type="submit" class="button" value="Login">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--Middle Part End-->
      <div class="clear"></div>
    </div>
  </div>
     @endsection