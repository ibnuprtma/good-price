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
        <input class="form-check-input" name="atribute" type="checkbox" id="name" value="namecb">
        <label class="form-check-label" for="inlineCheckbox1">Nama</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="atribute" type="checkbox" id="price" value="pricecb">
        <label class="form-check-label" for="inlineCheckbox1">Harga</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="atribute" type="checkbox" id="description" value="desccb">
        <label class="form-check-label" for="inlineCheckbox1">Deskripsi</label>
      </div>
    </div>
    <div class="col-10">
      <div class="form-check">
        <input class="form-check-input" name="atribute" type="checkbox" id="rate" value="ratecb">
        <label class="form-check-label" for="inlineCheckbox1">Rating</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="atribute" type="checkbox" id="sold" value="soldcb">
        <label class="form-check-label" for="inlineCheckbox1">Produk Terkirim</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="atribute" type="checkbox" id="image" value="imagecb">
        <label class="form-check-label" for="inlineCheckbox1">image</label>
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
          <th id="image_item">Gambar</th>
          <th id="name_item">Nama Barang</th>
          <th id="price_item">Harga Barang</th>
          <th id="sold_item">Terjual</th>
          <th id="rate_item">Rating</th>
          <th id="description_item">Deskripsi</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection


