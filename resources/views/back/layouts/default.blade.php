<!DOCTYPE html>
<html lang="en">
<head>
    @include('back.includes.head')
</head>
<body>
    
    <div id="wrapper">
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    @include('back.includes.nav')
        
    </nav>

    @yield('content')

</body>
</html>