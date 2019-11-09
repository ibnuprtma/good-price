@extends('master')

@section('content')

<div class="container mt-3">
  <h1 class="text-center">Good Price</h1>

  <button type="button" class="btn btn-primary">Tokenizing</button>
  <button type="button" class="btn btn-secondary">Case Folding</button>
  <button type="button" class="btn btn-success">Stemming</button>
  <button type="button" class="btn btn-success">Stopword</button>

  <div class="row mt-5">
    <div class="col-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="namecb">
        <label class="form-check-label" for="inlineCheckbox1">Nama</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="pricecb">
        <label class="form-check-label" for="inlineCheckbox1">Harga</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="desccb">
        <label class="form-check-label" for="inlineCheckbox1">Deskripsi</label>
      </div>
    </div>
    <div class="col-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="ratecb">
        <label class="form-check-label" for="inlineCheckbox1">Rating</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="soldcb">
        <label class="form-check-label" for="inlineCheckbox1">Produk Terkirim</label>
      </div>
    </div>
  </div>

  <div class="mt-3">
    <form action="" id="search-shopee">
      <div class="form-group">
        <input type="text" class="form-control m-input" id="search" placeholder="Search...">
      </div>
      <button class="btn btn-primary">Cari</button>
    </form>
  </div>

  <div class="table-responsive mt-3">
    <table class="table" id="table-shopee">
      <thead>
        <tr>
          <th width="30%">Gambar</th>
          <th width="10%">Nama Barang</th>
          <th width="10%">Harga Barang</th>
          <th width="5%">Terjual</th>
          <th width="5%">Rating</th>
          <th width="40%">Deskripsi</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection


