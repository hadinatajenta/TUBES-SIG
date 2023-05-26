<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title','Edit penanda')</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="/css/tambah.css" />
  </head>
  <body>
    <section class="container">
        <header>Edit penanda pada peta</header>
        <form action="{{route('edit.update', $marker->id)}}" method="post" class="form">
            @csrf
            @method('PUT')
            <div class="input-box">
                <label>Nama Tempat</label>
                <input type="text" name="nama_marker" placeholder="Masukkan nama tempat" required value="{{$marker->nama_marker}}"  />
            </div>

            <div class="input-box">
                <label for="jenis_bangunan">Jenis Bangunan</label>
                <select name="jenis_bangunan" required >
                    
                    <option value="Rumah Sakit" @if ($marker->jenis_bangunan == 'Rumah Sakit') selected @endif>Rumah Sakit</option>
                    <option value="Puskesmas/Poskesdes" @if ($marker->jenis_bangunan == 'Puskesmas/Poskesdes') selected @endif>Puskesmas/Poskesdes</option>
                </select>
            </div>

            <div class="input-box">
                <label>Nomor Telepon</label>
                <input type="text" name="nomor_telepon" placeholder="Masukkan nomor telepon" required value="{{$marker->nomor_telepon}}" />
            </div>

            <div class="input-box">
                <label>Alamat Website</label>
                <input type="text" name="alamat_website" placeholder="Masukkan alamat website" required value="{{$marker->alamat_website}}"  />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Koor Latitude</label>
                    <input type="text" name="latitude" placeholder="Masukkan Koordinat Latitude" required value="{{$marker->latitude}}" />
                </div>
                <div class="input-box">
                    <label>Koor Longitude</label>
                    <input type="text" name="longitude" placeholder="Masukkan Koordinat Longitude" required value="{{$marker->longitude}}"  />
                </div>
            </div>

            <!--deskripsi-->
            <div class="input-box">
                <label>Deskripsi</label>
                <textarea name="deskripsi" id="editor"  >{{$marker->deskripsi}}</textarea>
            </div>

            <button>Submit</button>
        </form>
    </section>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/super-build/ckeditor.js"></script>
    <script src="/js/ckeditor.js"></script>
  </body>
</html>