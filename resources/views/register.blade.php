<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Register</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{asset('css/user.css')}}">


    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <section class="h-100 h-custom" style="height:100vh !important;" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        @isset($message)
                            <p class="text-success text-center mt-2">{{$message}}</p>
                        @endisset
                        <div class="card-body p-4 p-md-5 shadow">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2"> Register </h3>

                        <form action="" method="POST" class="px-md-2">
                            @csrf

                            <div class="form-outline mb-4">
                            <input type="text" class="form-control" placeholder="First name" name="first_name"/>
                            </div>

                            <div class="form-outline mb-4">
                            <input type="text" class="form-control" placeholder="Last name" name="last_name"/>
                            </div>

                            <div class="form-outline mb-4">
                            <input type="text" class="form-control" placeholder="identification_number" name="identification_number"/>
                            </div>

                            <div class="form-outline mb-4">
                            <input type="email" class="form-control" placeholder="email" name="email"/>
                            </div>

                            <div class="form-outline mb-4">
                            <input type="password" class="form-control" placeholder="password" name="password"/>
                            </div>

                            <div class="form-outline mb-4">
                            <input type="password" class="form-control" placeholder=" confirm password" name="password_confirmation"/>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
                            <p>Already have an account? <a href="{{route("login_view")}}" style="color: green">Login</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

</body>

</html>
