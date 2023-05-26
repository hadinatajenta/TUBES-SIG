
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--CSS-->
        <link rel="stylesheet" href="/css/detail-artikel.css">
        <!--icon Website-->
        <link rel="icon" href="img/icon.png">
        <!--title-->
        <title>@yield('title','reusable')</title>
    
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!--leaflet css-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
        
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        
        <!--leaflet css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>

        <section>
            <!--header-->    
            <header>               
                <h2><a href="#" class="logo">SIG</a></h2>
                <div class="navigation">
                    <a href="/">Home</a>
                    <a href="/informasi-kesehatan">Informasi</a>
                    <a href="/rumah-sakit">Rumah Sakit</a>
                    <a href="/login">Login</a>
                </div>
            </header>

            <!--content-->
            <div class="content">
                @yield('content')
                
            </div>
            

            <!--footer-->
            <footer class="media-icons">
                <div class="icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <p>&copy; 2023 Sistem Informasi Geografis Kota Palembang. Hak Cipta Dilindungi Undang-Undang.</p>
            </footer>

        </section>
    
        <script src="/js/map.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
      