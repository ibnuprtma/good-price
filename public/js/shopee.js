$(document).ready(function () {
    $('#search-shopee').submit(function (event) {

        event.preventDefault();

        var search = $('#search').val()

        var table = $('#table-shopee').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            searching: false,
            ajax: {
                type: "GET",
                url: '/shopee/search/' + search,
            },
            columns: [
                {
                    title: 'Gambar',
                    data: 'image',
                    name: 'image',
                    render: function (data, type, full, meta) {
                        return "<img src='https://cf.shopee.co.id/file/" + data + "'    width='100' class='img-thumbnail' />";
                    },
                    orderable: false
                },
                {
                    title: 'Nama',
                    data: 'name',
                    name: 'name'
                },
                {
                    title: 'Harga',
                    data: 'price',
                    name: 'price'
                },
                {
                    title: 'Terkirim',
                    data: 'historical_sold',
                    name: 'historical_sold'
                },
                {
                    title: 'Rating',
                    data: 'rating',
                    name: 'rating'
                },
                {
                    title: 'Deskripsi',
                    data: 'description',
                    name: 'description'
                }
            ]
        });

        $('#namecb').change(function () {
            var column = table.column(1);
            column.visible(!column.visible());
        })

        $('#pricecb').change(function () {
            var column = table.column(2);
            column.visible(!column.visible());
        })

        $('#soldcb').change(function () {
            var column = table.column(3);
            column.visible(!column.visible());
        })

        $('#ratecb').change(function () {
            var column = table.column(4);
            column.visible(!column.visible());
        })

        $('#desccb').change(function () {
            var column = table.column(5);
            column.visible(!column.visible());
        })

    })
})



// $(document).ready(function () {

// });
