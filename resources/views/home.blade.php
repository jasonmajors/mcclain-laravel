<!DOCTYPE html>
<html>
    <head>
        <title>MC</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
            <h1>Welcome</h1>
            <h3>Login</h3>
                <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}

                    <div>
                        Email
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        Password
                        <input type="password" name="password" id="password">
                    </div>

                    <div>
                        <input type="checkbox" name="remember"> Remember Me
                    </div>

                    <div>
                        <button type="submit">Login</button>
                    </div>
                </form>
               <h3>Register</h3>
                <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}

                    <div>
                        Name
                        <input type="text" name="name" value="{{ old('name') }}">
                    </div>

                    <div>
                        Email
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        Password
                        <input type="password" name="password">
                    </div>

                    <div>
                        Confirm Password
                        <input type="password" name="password_confirmation">
                    </div>

                    <div>
                        <button type="submit">Register</button>
                    </div>
                </form> 
            </div>
        </div>
    </body>
</html>
