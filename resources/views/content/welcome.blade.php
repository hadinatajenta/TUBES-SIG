
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--CSS-->
        <link rel="stylesheet" href="/css/map.css">
        <!--Title-->
        <title>@yield('title','Sistem Informasi Geografis')</title>
        <!--icon Website-->
        <link rel="icon" href="img/icon.png">
        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!--leaflet css-->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <!--FontOwesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>

        <section>
            <!--header-->    
            <header>               
                <h2><a href="#" class="logo">SIG</a></h2>
                <div class="navigation">
                    <a href="/">Home</a>
                    <a href="/informasi-kesehatan">Informasi</a>
                    <a href="/rumah-sakit">Rumah sakit</a>
                    <a href="/login">Login</a>
                </div>
            </header>

            <h2> Sistem Informasi Geografis Kesehatan <br> Kota Palembang </h2>
            <!--MAP-->
            <div class="map-container">
                <div id="map"></div>
            </div>

            <!--content-->
            <div class="content">
                <div class="info">
                    <h2>Rumah Sakit <br></h2>
                    <p>Sistem Informasi Geografis (SIG) dapat menjadi teknologi yang sangat bermanfaat untuk meningkatkan kualitas pelayanan kesehatan di provinsi Palembang. Dengan memanfaatkan teknologi SIG, kita dapat mengintegrasikan peta rumah sakit di daerah Palembang ke dalam platform digital, sehingga memungkinkan pengguna untuk dengan mudah melihat dan menganalisis data geografis yang berkaitan dengan lokasi, fasilitas, dan layanan yang disediakan oleh rumah sakit di wilayah tersebut. Hal ini akan membantu masyarakat Palembang untuk lebih mudah dan efisien dalam mencari informasi penting tentang rumah sakit di daerah mereka, sehingga dapat memperbaiki kualitas pelayanan kesehatan dan meningkatkan kesejahteraan masyarakat secara keseluruhan.</p>
                    <a href="/info" class="info-btn">More Info</a>
                </div>
                <div class="info-puskes">
                    <h2>Total Bangunan</h2>
                    <p style="text-align: center">Provinsi Palembang memiliki total sejumlah {{$total_markers}} bangunan kesehatan yang mencakup rumah sakit dan puskesmas. Dengan jumlah yang signifikan, diharapkan dapat memenuhi kebutuhan masyarakat akan akses layanan kesehatan yang berkualitas.</p>
                </div>
                <div class="info-bangunan">
                    <h2>Informasi Kesehatan</h2>
                    <p style="text-align: center"> 
                        Saat ini terdapat {{ $total_articles }} artikel terkait informasi kesehatan yang dapat diakses melalui website kami. Dari artikel-artikel tersebut, Anda dapat memperoleh berbagai informasi dan pengetahuan mengenai kesehatan yang bermanfaat bagi keseharian Anda.
                    </p>
                </div>
            </div>

            <!--FOOTER-->
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
    </body>
</html>
      