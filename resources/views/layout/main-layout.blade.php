<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIN TỨC 24h</title>
    <link rel="icon" href="/assets/image/icon/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/login.css" />
    <link rel="stylesheet" href="/assets/css/infor.css" />
    <link rel="stylesheet" href="/assets/css/nav.css" />
</head>

<body>
    <!-- script -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js" ></script>
    <script src="/assets/js/live-search.js"></script>
    <script src="/assets/js/scroll.js"></script>
    <script src="/assets/js/index.js"></script>
    <script src="/assets/js/real-time.js"></script>
    <script src="{{asset('/assets/js/click.js')}}"></script>
    <header class="header" >
        @include('.static-layout.header')
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer">
        @include('.static-layout.footer')
    </footer>
    
</body>

</html>