@extends('layouts.master')
@section('konten')
<div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Welcome To Kodaline Website</h1>
        <br>
        <center><img src="/image/7.jpg" width="700" height="258"></center>
        <br>
        <p class="lead">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKodaline adalah grup musik asal Irlandia. Grup musik ini dikenal sebagai 21 Demands, sebelum diganti menjadi Kodaline pada tahun 2012.<BR>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSteve Garrigan dan Mark Prendergast dibesarkan di Swords, Dublin dan telah berteman sejak kecil. Mereka akhirnya bermusik bersama hingga Vinny May, yang juga tinggal di Swords, bergabung. Pada bulan Januari tahun 2012, bassist Jason Boland direkrut sebagai anggota....</p>
		<br>
        <a href="paragraf" class="btn btn-primary btn-lg">Read More</a>
      </header>

      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="image/p1.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Table</h4>
              <p class="card-text">Ini adalah sebuah tabel siswa</p>
            </div>
            <div class="card-footer">
              <a href="siswa" class="btn btn-primary">Find Out</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="image/p2.png	" alt="">
            <div class="card-body">
              <h4 class="card-title">Pictures</h4>
              <p class="card-text">Berisi foto-foto tentang kami</p>
            </div>
            <div class="card-footer">
              <a href="gambar" class="btn btn-primary">Find Out</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="image/p3.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Lyrics</h4>
              <p class="card-text">Sebuah lirik lagu dari kami.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="image/p4.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Penulis</h4>
              <p class="card-text">Tentang seorang penulis yang ganteng</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
@endsection