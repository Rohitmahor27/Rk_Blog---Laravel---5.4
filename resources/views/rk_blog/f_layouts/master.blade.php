<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>@yield('title')</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="{{asset('Rk_Blog/favicon.ico')}}"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('Rk_Blog/assets/css/theme-3.css')}}">

</head> 

<body>
    @include('rk_blog.f_layouts.sidebar')

    @section('content')

    @show

    @include('rk_blog.f_layouts.footer')
       
    <!-- Javascript -->          
    <script src="{{asset('Rk_Blog/assets/plugins/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('Rk_Blog/assets/plugins/popper.min.js')}}"></script> 
    <script src="{{asset('Rk_Blog/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script> 

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="{{asset('Rk_Blog/assets/js/demo/style-switcher.js')}}"></script>     
    

</body>
</html> 

