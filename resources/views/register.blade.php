{{View:: make('title')}}
<div>
    <form action="register" method="post">
        @csrf
        <div>
            <label for="exampleInputName1">Full Name</label>
            <input type="text" name="fullname" id="exampleInputEmail1">
        </div>

        <div>
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" name="email" id="exampleInputEmail1"
            aria-describedby="emailHelp">
            <div id="emailHelp">We'll never share your email with anyone else.</div>
        </div>

        <div>
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name= "password" id="exampleInputPassword1">
        </div>

        <button type="submit" id="register" onclick="display()">Register</button>
        <!-- <button type="button" onclick="javascript.history.back()">Cancel</button> -->
        <a href="/"><button type="button">Cancel</button></a>
        <!-- <button type="button" onclick=></button> -->
</form>
</div>

<script>


</script>

{{View:: make('footer')}}