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
          <input type="text" class="form-control m-input" placeholder="Search..."id="generalSearch">
        </div>

        <div class="table-responsive mt-3">
          <table class="table" id="user_table">
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
    </div>

@endsection


@push('footer-scripts')
    <script>
    $(document).ready(function(){

      $('#user_table').DataTable({
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
    </script>
@endpush

