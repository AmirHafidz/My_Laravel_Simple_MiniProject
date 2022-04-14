{{View::make('title')}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/masuk.css">
</head>
<body>
    
<br>
<br>
    <div class="cont">
        <form class="form sign-in" action="login" method="post">
            @csrf
            <h2>Welcome</h2>
            <label class="label">
                <span>Email</span>
                <input class="putin" type="email" name="email"/>
            </label>
            <label class="label">
                <span>Password</span>
                <input class="putin" type="password" name="password" />
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button class="buton" type="submit" class="submit">Sign In</button>
        </form>
        
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form class="form sign-up" action="register" method="post">
                @csrf
                <h2>Create your Account</h2>
                <label class="label">
                    <span>Name</span>
                    <input  class="putin" type="text" name="fullname" />
                </label>
                <label class="label">
                    <span>Email</span>
                    <input  class="putin" type="email" name="email"/>
                </label>
                <label class="label">
                    <span>Password</span>
                    <input  class="putin" type="password" name="password"/>
                </label>
                <button class="buton" type="submit" class="submit" onclick="display()"><a>Sign Up</a></button>

                
            </form>

        </div>
    </div>
    <div class="kontena-container">


                <div class="kontena">
                <h1>Modals are</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Sint aperiam maxime pariatur, porro enim veritatis dignissimos 
                    voluptate nesciunt expedita consequatur alias corporis 
                    unde cumque laudantium illo omnis eaque aut ad?</p>
                <button id="close" onclick="notdisplay()" >Close me</button>

                </div>
    </div>
    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });

        function display(){

            document.querySelector('.kontena-container').style.opacity="1";
            // document.querySelector('.kontena-container').style.pointer-events="auto";
        }

        function notdisplay(){

            document.querySelector('.kontena-container').style.opacity="0";
            // document.querySelector('.kontena-container').style.pointer-events="auto";
        }






    </script>



</body>
</html>
{{View::make('footer')}}