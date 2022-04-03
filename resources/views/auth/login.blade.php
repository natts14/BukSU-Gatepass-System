<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Automated Vehicle Gate Pass System with e-Monitoring Parking Space</title>
<style>
    body {
        background-color: rgb(60, 60, 150);
    }
    #register {
        margin-right: 20%;
        margin-left: 20%;
    }
    .highlight
        {
            border: 1px solid red !important;
        }
</style>
</head>
<body>
    <div class="row w-100 mt-5" id="loginBody">
        <div class="col" id="">
            <div class="container bg-light text-dark rounded text-center p-3 mt-5 mb-5" id="container"> 

                <form action="{{ route('login.perform') }}" method="POST" name="loginForm" class="needs-validation text-left p-4 w-100"   required>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="userIcon mb-3">
                        <svg width="20em" height="5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                        </svg>
                    </div>
                    <p class="text-center">Log in to your account</p>
    
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg></span>
                        </div>
                        <input type="text" autocomplete="off" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="Username" required>
                        @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                          @endif
                    </div>
    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                            </svg></span>
                        </div>
                        <input type="password" autocomplete="off" class="form-control" name="password" value="{{ old('password') }}"id="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                         @endif
                    </div>  
                       
                        <button type="submit" class="btn btn-primary w-100 mx-auto" > SUBMIT </button>

                        <div class="hr-sect p-1">Dont have an account?</div>
                        <a class="btn btn-dark text-center" id="register" href="{{ route('register.perform') }}">Register New Account</a>
      
                    </div>

                    <div>
                        
                    </div>
                </form>
            </div>    
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="/js/javascript.js"></script>

</body>
</html>