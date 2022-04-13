@include('layouts.header');
<body>
    <div class="parent">
        <form action="/register" method="post">
            @csrf
            <center>
                <div class="container">
                    <h1><b>Register</b></h1>
                    
                    @if(session('msg'))
                    <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('msg') }}
                    </div>
                    @endif
                    
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" id="name" required>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" name="email" id="email" required>
                            <span for="email">Email should be in proper Email format</span>
                        </div>
                        <div class="col-lg-6">
                            <label for="number"><b>Number</b></label>
                            <input type="text" placeholder="Enter Number" name="number" id="number" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" minlength="10" maxlength="10" required>
                        </div>
                    </div>

                    <label for="address"><b>Address</b></label>
                    <input type="text" placeholder="Enter Address" name="address" id="address" required>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" minlength="6" maxlength="32" name="psw" id="psw" required>
                            <span for="psw">Passwords length should be in between 6-32</span>
                        </div>
                        <div class="col-lg-6">
                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="rpsw" id="psw-repeat" minlength="6" maxlength="32" required>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="registerbtn">Register</button>
                </div>

                <div class="container signin">
                    <p>Already have an account? <a href="/login">Sign in</a>.</p>
                </div>
                <div class="container signin">
                    <p>Login Using Email & Number? <a href="/loginv2">Sign In</a>.</p>
                </div>
        </form>
        </center>
    </div>

</body>

</html>