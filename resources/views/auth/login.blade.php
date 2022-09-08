
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign in | Whales Corp</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body id="dark">

<div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <span>Sign In</span>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="text-right">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <h2>Don't have an account? <a href="{{ route('register') }}">Sign up here</a></h2>
    </div>
</div>

<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/amcharts-core.min.js') }}"></script>
<script src="{{ asset('assets/js/amcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>


