<!DOCTYPE html>
<html>

<head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/css/signup.css">
</head>

<body>

        <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href='/welcome'>Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                  </ul>
                  <a id="login" class="navbar-brand" href="/login">Login</a>
                </div>
              </nav>
        <div id="signupForm">
                <div class="container">
                        <h1 style="text-align: center;">Sign up
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
</body>

</html>