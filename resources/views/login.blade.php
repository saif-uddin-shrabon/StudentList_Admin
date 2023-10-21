<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

        <title>Document</title>
    </head>
    <body style="background-color:#FEAF00">
          
        
        <div class="card mx-auto  shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 475px; hight: 550px; margin-top: 175px">
            <div class="card-body">

    <form action="{{url('/')}}/login" method="post">
      
        @csrf
       {{-- <pre>
         @php
             print_r($errors->all())
         @endphp
       </pre> --}}

        <div class="container">

       
          <h1 class="text-center">SIGN IN</h1>
          <span class="fs-6 tex">Enter your credentials to access your account </span>
       
            <x-input type="email" name="email" label="Please Enter your email"  />
            <x-input type="password" name="password" label="Please Enter your password"  />
            
            <button class="btn btn-primary ">

            Submit

            </button>
            <span ><p  class="fs-6">Registration</p></span>

        </div>
        </form>

        
  </div>
</div>
        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->
    </body>
</html>