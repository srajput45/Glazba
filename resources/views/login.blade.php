<!DOCTYPE html>
<html>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href='welcome'>Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
          <a id="login" class="navbar-brand" href="/login">Login</a>
        </div>
      </nav>
    <div id="loginForm">
        <form>
            <h1 id="heading">
                Log in <a id="signup"href="/signup"> or Sign up</a>
            </h1>
            <label>Username</label>
            <input type="text" id="username" placeholder="me@upgrade.com"/>
            <label>Password</label>
            <input type="password" id="password" placeholder="eg: ********"/>
            <button id="submit" type="submit">Login</button>
        </form>
    </div>
</body>

</html>