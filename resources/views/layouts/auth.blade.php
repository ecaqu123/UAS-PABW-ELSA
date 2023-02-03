<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <title> {{ config('app.name') }} - @yield('title')</title>
      
   <link rel="stylesheet" href="{{ asset('vendor/my-auth/css/auth.css')}}">
   <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
</head>

<body class="bg-dark">
   <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
         <main>
            <div class="container mt-5">
               <div class="row justify-content-center">
                  <div class="col-lg-5">
                     <div class="mt-5">
                        <div class="">
                           <h3 class="text-center text-white font-weight-light my-4">
                              @yield('title')
                           </h3>
                        </div>
                        <div class="card-body">
                           @yield('content')
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </div>
   <script src="{{ asset('vendor/my-auth/js/auth.js') }}"></script>
   <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
