
@extends('parent.signin')

@section('content')
<div id="loginForm">
  <form>
      <h1 id="heading" style="margin-top: 15px">
          Log in <a id="signup"href="/signup"> or Sign up</a>
      </h1>
      <label>Username</label>
      <input type="text" id="username" placeholder="Username"/>
      <label>Password</label>
      <input type="password" id="password" placeholder="eg: ********"/>
      <button id="submit" type="submit" style="margin-top: 15px ; height: 40px">Login</button>
  </form>
</div>
@endsection

