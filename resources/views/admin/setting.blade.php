@extends('layouts.sidebar')
@section('title','Setting')

<!--content-->
@section('content')
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
        </div>
        <form action="{{ route('setting.update',  $user->id) }}"
             method="post" class="form">
            @csrf   
            @method('PUT')
            
            <div class="form-group">
                <p class="heading"> <i class="uil uil-user"></i> &nbsp; Edit Profile</p>
                <div class="nama">
                    <div class="box-input">
                        <label for="name">Nama depan</label>
                        <input type="text" name="name" id="name" placeholder="Nama" value="{{ $user->name }}">
                    </div>
                    
                    <div class="box-input">
                        <label for="last_name">Nama belakang</label>
                        <input type="text" name="last_name" id="name" placeholder="Nama" value="{{ $user->last_name }}">
                    </div>
                </div>

                <div class="box-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{$user->email}}">
                </div>

                <div class="box-input">
                    <label for="bio">Bio</label>
                    <input type="text" name="bio" id="name" placeholder="Nama" value="{{ $user->bio }}">
                </div>

                <div class="box-input">
                    <label for="date">Birth date</label>
                    <input type="date" name="birth_date" id="" value="{{$user->birth_date}}">
                </div>  
        
                <button type="submit">Simpan</button>
            </div>
        </form>
    </section>
@endsection