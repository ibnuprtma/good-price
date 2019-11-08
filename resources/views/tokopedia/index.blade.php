@extends('master')

@section('content')

<div class="container mt-3">
  <h1 align="center">Good Price</h1>

  <button type="button" class="btn btn-primary">Tokenizing</button>
  <button type="button" class="btn btn-secondary">Case Folding</button>
  <button type="button" class="btn btn-success">Stemming</button>
  <button type="button" class="btn btn-primary">Danger</button>

  <div class="row mt-5">
    <div class="col-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Nama</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Harga</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Deskripsi</label>
      </div>
    </div>
    <div class="col-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Review</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Produk Terkirim</label>
      </div>
    </div>
  </div>

  <div class="mt-3">
    <form action="" id="search-shopee">
      <div class="form-group">
        <label>Temukan data barang</label>
        <input type="text" class="form-control m-input" id="search" placeholder="Search..." id="generalSearch">
      </div>
      <button class="btn btn-primary" id="btn-find" type="submit">Cari</button>
    </form>

  </div>

  <table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

  <div class="m_datatable" id="json_data"></div>
</div>

@endsection