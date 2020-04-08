@extends('parent.signin')

@section('content')
<div id="signupForm">
        <div class="container">
                <h1 style="text-align: center; margin-top: 15px">Sign up
                        <a href="/login"> or Log in</a>
                </h1>
                <form>
                        <label for="firstName" class="label-text">First name</label>
                        <input type="text" id="firstName" placeholder="e.g., Mark" required>
                        <label for="lastName" class="label-text">Last name</label>
                        <input type="text" id="lastName" placeholder="e.g., Green" required>
                        <label for="email" class="label-text">Email</label>
                        <input type="email" id="email" placeholder="e.g., me@example.com" required>
                        <label for="password" class="label-text">Password</label>
                        <input type="password" id="password" placeholder="e.g., **********" required>
                        <label for="mobile" class="label-text">Mobile number</label>
                        <input type="tel" id="mobile" placeholder="e.g., 9988776655" required>
                        <button type="submit" onclick="signup(firstName,lastName, email, password, mobile)" class="signin-btn">Sign up</button>
                </form>
        </div>
</div>
@endsection

