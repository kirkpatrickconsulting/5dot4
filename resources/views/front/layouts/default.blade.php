<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.includes.head')
</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    @include('front.includes.nav')
        
    </nav>

    @yield('content')

</body>
</html>