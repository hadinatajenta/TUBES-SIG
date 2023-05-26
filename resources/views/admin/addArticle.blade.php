<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah artikel</title>
    <!--Style-->
    <link rel="stylesheet" href="/css/addArticle.css">

    <!--Iconscout-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <div id="container">
        <form action="{{route('addArticle.store')}}" enctype="multipart/form-data" method="post" >
            @csrf   
            <header>
                <button onclick="history.back()"><i class="uil uil-step-backward" style="font-size: 24px"></i></button>
                <button type="submit">Kirim <i class="uil uil-message"></i></button>
            </header>
            
            <div class="parent">
                <div class="child">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" name="judul" id="judul" placeholder="Masukkan judul disini!" required>

                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi..." required>

                    <label for="gambar">Upload Gambar</label>
                    <input type="file" name="gambar" src="/img/">
                </div>
            </div>

            <div class="ckeditor">
                <textarea type="text" id="editor" name="isi" >
                </textarea>
            </div>
    
        </form>
    </div>
   
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/super-build/ckeditor.js"></script>
    <script src="/js/ckeditor.js"></script>
</body>
</html>