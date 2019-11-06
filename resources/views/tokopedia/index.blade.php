@extends('master')

@section('content')

    <div class="container mt-3">
        <h1 class="text-center">Good Price</h1>

        <input type="text" class="form-control m-input" id="search" placeholder="Search..."id="generalSearch">
        <div class="row mt-2">
            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Nama</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option2">
                    <label class="form-check-label" for="inlineCheckbox1">Harga</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3">
                    <label class="form-check-label" for="inlineCheckbox1">Deskripsi</label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option4">
                    <label class="form-check-label" for="inlineCheckbox1">Review</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option5">
                    <label class="form-check-label" for="inlineCheckbox1">Produk Terkirim</label>
                </div>
            </div>
        </div>
        
        <button class="btn btn-primary mt-2" id="btn-find">Ambil Data</button>

        <div class="table-responsive mt-3">
          <table class="table" id="table">
                 <thead>
                  <tr>
                      <th width="10%">Image</th>
                      <th width="35%">First Name</th>
                      <th width="35%">Last Name</th>
                      <th width="30%">Action</th>
                  </tr>
                 </thead>
             </table>
         </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary">Tokenizing</button>
            <button type="button" class="btn btn-secondary">Case Folding</button>
            <button type="button" class="btn btn-success">Stemming</button>
            <button type="button" class="btn btn-info">Stopword</button>
            <div class="mt-3">
                <button type="button" class="btn btn-info">Hapus Kata Tanya</button>
                <button type="button" class="btn btn-success">Hapus Tanda Baca</button>
                <button type="button" class="btn btn-warning">Hapus Emoticon</button>
            </div>
        </div>
    </div>

@endsection


@push('footer-scripts')
    {{-- <script>
    $(document).ready(function(){

      $('#table').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
          url: "https://memfis-aircraft.dev/datatables/customer",
        },
        columns:[
          {
            data: 'image',
            name: 'image',
            render: function(data, type, full, meta){
              return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";
          },
            orderable: false
          },
          {
            data: 'first_name',
            name: 'first_name'
          },
          {
            data: 'last_name',
            name: 'last_name'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false
          }
        ]
      });
    });
    </script> --}}
@endpush

