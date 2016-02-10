<!DOCTYPE html>
<html>
    <head>
        <title>MC</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                
            @if (Auth::check())
                <h1>Welcome, {{ Auth::user()->name }}</h1>
                <a href="{{ URL::to('auth/logout') }}">Logout</a>
                @else
                <h1>Welcome</h1>
                <div class="col-md-4">
                    <h3>Login</h3>
                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember"> Remember Me
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div> 
                <div class="col-md-4">   
                    <h3>Register</h3>
                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>     
                @endif 
                </div>
            </div>    
        </div>
    </body>
</html>
