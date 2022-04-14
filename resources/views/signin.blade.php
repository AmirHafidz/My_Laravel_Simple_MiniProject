{{View:: make('title')}}

<html>
<head>
    
    <link rel="stylesheet" href="signin.css">
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>



<body class="text-center">
    
    <main class="form-signin">
      <form class="form-signin" action="login" method="post">
          @csrf
        <img class="mb-4" src="bootstrap\LogoWolf.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
      </form>
    </main>
    
    
        
      </body>
</html>
{{View:: make('footer')}}















<!-- <form action="login" method="post"> 
    @csrf

    <div>
    <label for="email">Email Address</label?>
    <input type="email" name="email" id="email">
    </div>

    <div>
    <label for="password">Password</label?>
    <input type="password" name="password" id="password">
    </div>


<button type="submit">Login</button>
    <button type="button" onclick="window.location.href='/register'">Register</button>

</form> -->