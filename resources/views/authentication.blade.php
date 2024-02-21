<!DOCTYPE html>
<html>
    <head>
        <title>MMMConnect | Login</title>
        <link href="{{asset('css/fa/css/all.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/notfound.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/pizza.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/register.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/register.js')}}"></script>

        <script>
            $(document).ready(() => {
                $('#{{$showRegisterScreen ? "login" : "register"}}').hide();
                $('#{{$showRegisterScreen ? "register" : "login"}}').show();
            });
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div class="one-third"></div>
            <div class="one-third" id="authenticationBox">
                <div class="box center">
                    <div class="box center center-text" id="loginHeader">
                        <h1><span>Zofatech</span>Software</h1>
                        <p>Login or signup below</p>
                    </div>

                    @if ($status['state'] != null)
                        <div class="notification box is-{{$status['state'] == 'success' ? 'green' : 'red'}}">{{$status['message']}}</div>
                    @endif

                    <form method="POST" action="{{url('/register')}}" id="login">
                        <div class="input">
                            <input type="text" name="identifier" placeholder="Email/Username" value="{{$placeholders['identifier']}}" required />
                        </div>
                        <div class="input">
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="input">
                            <input type="submit" class="button" name="submitLogin" value="Login" />
                        </div>
                        <div class="center center-text"><a class="link" id="signupButton">Need an account?</a></div>

                        {{ csrf_field() }}
                    </form>

                    <form method="POST" action="{{url('register')}}" id="register">
                        <div class="input">
                            <input type="text" name="firstName" placeholder="First Name" value="{{ $placeholders['firstName'] }}" required />
                        </div>
                        <div class="input">
                            <input type="text" name="lastName" placeholder="Last Name" value="{{ $placeholders['lastName'] }}" required />
                        </div>
                        <div class="input">
                            <input type="email" name="email" placeholder="Email" value="{{ $placeholders['email'] }}" required />
                        </div>
                        <div class="input">
                            <input type="email" name="confirmEmail" placeholder="Confirm your email" value="{{ $placeholders['confirmEmail'] }}" required />
                        </div>
                        <div class="input">
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="input">
                            <input type="password" name="confirmPassword" placeholder="Confirm your password" required />
                        </div>
                        <div class="input">
                            <input type="submit" class="button" name="submitRegister" value="Register" />
                        </div>
                        <div class="center center-text"><a class="link" id="loginButton">Already have an account?</a></div>

                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
