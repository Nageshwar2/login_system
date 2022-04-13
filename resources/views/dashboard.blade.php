@include('layouts.header');

<body>
    <div class="parent">
        <div class="container"><br>
        @if(session('msg'))
        <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('msg') }}
        </div>
        @endif
            <h3>Welcome {{ Session::get('user')->name ?? '' }}</h3>
        <h1><b>Dashboard Page</b></h1>
        <br><br><br>
        
        <a href="/logout">
            <button type="submit" class="registerbtn">Log Out</button>
        </a>
        </div>
    </div>

</body>

</html>