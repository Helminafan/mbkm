@extends('user.master')
@section('user')
<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Our <span>products</span></h2>
      </div>

      <div class="card">
        <div class="row">
          <div class="col box">
            <div class="img-box" style="height: 300px">
              <img src="{{asset('storage/'.$data->fotobarang)}}" alt="" />
            </div>
          </div>
          <div class="col">
            <h1 style="font-weight: 700; font-family: Arial, Helvetica, sans-serif; margin-top: 10px;">{{$data->tipebarang}}</h1>
            <h3 style="background-color: rgb(209, 209, 209); font-weight: 300; font-family: Arial, Helvetica, sans-serif">Spesifikasi Produk</h3>
            <div class="row" style="margin-top: 20px">
              <div class="col">
                <h6>Merek :</h6>
              </div>
              <div class="col" style="margin-right: 300px">
                <h5>{{$data->merek}}</h5>
              </div>
            </div>
            <div class="row" style="margin-top: 10px">
              <div class="col">
                <h6>Status</h6>
              </div>
              <div class="col" style="margin-right: 300px">
                <h5>{{$data->status}}</h5>
              </div>
            </div>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            <div class="btn-box" style="text-align: right !important; margin-bottom: 10px;">
              <a href="formPeminjaman.html"> Pinjam Sekarang </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection