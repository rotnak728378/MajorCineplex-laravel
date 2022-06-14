@extends('layouts.default')

@section('content-items')
<div class="login-box">
    <h2>Login</h2>
    <form action='<?php echo $_SERVER["PHP_SELF"]?>' method="post">
        {{ csrf_field() }}
      <div class="user-box">
        <input type="text" name="username" required="true">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="true">
        <label>Password</label>
      </div>
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
      </button>
    </form>
</div>

@stop