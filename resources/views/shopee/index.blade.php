@extends('master')

@section('content')

<div class="container mt-3">
  <h1 class="text-center">Good Price</h1>

  <div class="mt-3 mb-5">
    <form action="" id="search-shopee">
      <div class="form-group">
        <input type="text" class="form-control m-input" id="search" placeholder="Search...">
      </div>
      <button class="btn btn-primary">Cari</button>
    </form>
  </div>


  <button type="button" id="tokenizing" class="btn btn-primary">Tokenizing</button>
  <button type="button" id="case_folding" class="btn btn-secondary">Case Folding</button>
  <button type="button" id="stemming" class="btn btn-success">Stemming</button>
  <button type="button" id="stopword" class="btn btn-success">Stopword</button>

  <div class="row mt-3">
    <div class="col-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="namecb" value="namecb">
        <label class="form-check-label" for="inlineCheckbox1">Nama</label>
      </div>
    </div>

    <div class="col-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="pricecb" value="pricecb">
        <label class="form-check-label" for="inlineCheckbox1">Harga</label>
      </div>
    </div>

    <div class="col-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="desccb" value="desccb">
        <label class="form-check-label" for="inlineCheckbox1">Deskripsi</label>
      </div>
    </div>

    <div class="col-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="ratecb" value="ratecb">
        <label class="form-check-label" for="inlineCheckbox1">Rating</label>
      </div>
    </div>

    <div class="col-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="soldcb" value="soldcb">
        <label class="form-check-label" for="inlineCheckbox1">Produk Terkirim</label>
      </div>
    </div>

  </div>

  <div class="table-responsive mt-3">
    <table class="table" id="table-shopee">
    </table>
  </div>
</div>

@endsection