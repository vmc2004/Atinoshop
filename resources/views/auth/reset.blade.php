<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elite Able - Change password</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Elite Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templates, sass admin templates, html admin templates, responsive, bootstrap admin templates free download, premium bootstrap admin templates, Elite Able, Elite Able bootstrap admin template">
    <meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('user/assets/images/favicon.png') }}" type="image/x-icon">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/animation/css/animate.min.css') }}">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('user/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content container">
            <div class="card">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="card-body">
                            <img src="{{ asset('user/assets/images/logo-dark.png') }}" alt="" class="img-fluid mb-4">
                            <h4 class="mb-4 f-w-400">Change your password</h4>
                            <form action="{{ route('password.update') }}" method="POST">
                                @csrf
                                <div class="input-group mb-2">
                                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Current Password">
                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-2">
                                    <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="New Password">
                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4">
                                    <input type="password" name="new_password_confirmation" class="form-control @error('new_password_confirmation') is-invalid @enderror" placeholder="Re-Type New Password">
                                    @error('new_password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mb-4">Change password</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="{{ asset('user/assets/images/auth-bg.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="footer mt-5">
                <p class="text-center">Made with <i class="fas fa-heart"></i> by <a href="https://codedthemes.com/" target="_blank">Codedthemes</a></p>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="{{ asset('user/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
