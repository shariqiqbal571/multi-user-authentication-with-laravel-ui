<!DOCTYPE html>
<html lang="en">

<?php

// Using request object
$personal_data = session()->get('users');

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Genies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</head>

<body>
<section class="signin-body pad-tp-bt">
    <div style="background-color: white;width: 592px;height: auto;border-radius: 10px;" class="container container-signin">
        <div class="row row-signin py-5" style="padding: 30px;">
        <form action="{{ route('career.genie.login') }}" method="POST" class="form-horizontal">
        @csrf
                                @if(Session::has('fail'))
                                <div class="alert alert-danger"style="color:white;padding:1rem;border-radius:10px;" role="alert">
                                    {{Session::get('fail')}}
                                </div>
                                @endif
                <div class="mb-md-3">
                    <h4 class="mb-md-4 fw-bolder">Welcome Back.</h4>
                    <label for="exampleInputEmail1" class="form-label mt-2 sign-in">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="joe.bloggs@gmail.com">
                    @if($errors->get('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="mb-md-3">
                    <label for="exampleInputPassword1" class="form-label mt-md-2 sign-in">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="********">
                    @if($errors->get('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="mb-md-3 form-check mt-md-2 py-2">
                    <input type="checkbox" class="form-check-input rounded-0" id="exampleCheck1">
                    <label class="form-check-label ps-2" style="font-size: 16px;" for="exampleCheck1">Remember Password</label>
                </div>
                <button type="submit" onclick="alertfunction()" class="btn-gradiant hover-btn-gradiant btn_dark py-2  mt-md-3 w-100" style="height: 48px;"><span><small style="font-size: 18px;font-weight: 400;color: #0D3156;
                        ">Sign In</small> </span>
                </button>
                <p style="font-size: 16px;font-weight: 400;line-height: 20px;" class="signin-para mb-0 mt-md-2 text-center py-4">
                    Don’t
                    have
                    an account?
                    <a class="signin-para-btn fw-bolder" style="font-size: 16px;font-weight: 700;line-height: 28px;color: #0D3156;
               " href="{{ route('register') }}">Sign Up</a> </p>
            </form>
        </div>
    </div>
</section>


<script>
    @if(Session::has('success'))
        Swal.fire({
            title: "Success",
            text: "{{ session()->get('success') }}",
            icon: "success"
        });
    @endif

    @if(Session::has('error'))
        Swal.fire({
            title: "Error",
            text: "{{ session()->get('error') }}",
            icon: "error"
        });
    @endif

    @if(Session::has('info'))
        Swal.fire({
            title: "Info",
            text: "{{ session()->get('Info') }}",
            icon: "info"
        });
    @endif

    @if(Session::has('warning'))
        Swal.fire({
            title: "Warning",
            text: "{{ session()->get('warning') }}",
            icon: "warning"
        });
    @endif
</script>


<script type="text/javascript" src="https://shayanrao.com/careergenies/wp-content/themes/bespoke-theme/node_modules/jquery/dist/jquery.min.js?ver=6.4.2" id="jquery-js"></script>
<script type="text/javascript" src="https://shayanrao.com/careergenies/wp-content/themes/bespoke-theme/node_modules/@popperjs/core/dist/umd/popper.min.js?ver=6.4.2" id="popperjs-js"></script>
<script type="text/javascript" src="https://shayanrao.com/careergenies/wp-content/themes/bespoke-theme/node_modules/bootstrap/dist/js/bootstrap.min.js?ver=6.4.2" id="bootstrap-js"></script>
<script type="text/javascript" src="https://shayanrao.com/careergenies/wp-content/themes/bespoke-theme/assets/javascript/bootstrap-tagsinput.min.js?ver=6.4.2" id="bootstrap-taginputs-js"></script>
</body>

</html>
