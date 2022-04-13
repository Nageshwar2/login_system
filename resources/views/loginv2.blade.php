@include('layouts.header');

<body>
    <div class="parent">
        <form action="/loginv2" method="post">
            @csrf
            <center>
                <div class="container">

                    <h1><b>Sign In Using Email & Number</b></h1>
                    @if(session('msg'))
                    <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('msg') }}
                    </div>
                    @endif
                    <p>Please Enter Your Credentials.</p>
                    <hr>

                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" id="email" required>
                
                    <label for="number"><b>Number</b></label>
                    <input type="text" placeholder="Enter Number" name="number" id="number" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" minlength="10" maxlength="10" required>
                
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" minlength="6" maxlength="32" required>
                    <hr>

                    <button type="submit" class="registerbtn">Sign In</button>
                </div>

                <div class="container signin">
                    <p>Create New account?<a href="/register">Sign Up</a>.</p>
                </div>
                <div class="container signin">
                    <p>Already have an account?  <a href="/login">Sign In</a>.</p>
                </div>
        </form>
        </center>
    </div>

</body>

</html>