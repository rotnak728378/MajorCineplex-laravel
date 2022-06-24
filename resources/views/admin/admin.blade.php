@extends('layouts.default')

@section('content-items')
<div class="login-box">
    <h2>Login</h2>
    <form action="{{ route('login-user') }}" method="POST" autocomplete="off">
      @if(Session::has('success'))
          <div class="alert alert-success">
              {{Session::get('success')}}
          </div>
      @endif

      @if(Session::has('fail'))
          <div class="alert alert-danger">
              {{Session::get('fail')}}
          </div>
      @endif
       
      @csrf
      <div class="user-box">
        <input type="text" name="name" required="true">
        <label for="name">Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="true">
        <label for="password">Password</label>
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