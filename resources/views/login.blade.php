@include('layouts.header');

<body>
    <div class="parent">
        <form action="/login" method="post">
            @csrf
            <center>
                <div class="container">

                    <h1><b>Sign In </b></h1>
                    @if(session('msg'))
                    <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('msg') }}
                    </div>
                    @endif
                    <p>Please Enter Your Credentials.</p>
                    <hr>
                    <label for="email"><b>User Id</b></label>
                    <input type="text" placeholder="Enter Email or Phone Number" name="userid" id="userid" required>
                

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" minlength="6" maxlength="32" required>
                    <hr>

                    <button type="submit" class="registerbtn">Sign In</button>
                </div>

                <div class="container signin">
                    <p>Create New account? <a href="/register">Sign Up</a>.</p>
                </div>
                <div class="container signin">
                    <p>Login Using Email & Number? <a href="/loginv2">Sign In</a>.</p>
                </div>
        </form>
        </center>
    </div>

</body>

</html>