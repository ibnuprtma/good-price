$(document).ready(function () {

    $('#search-tokopedia').submit(function (event) {

        var url

        event.preventDefault();

        var search = $('#search').val()
        url = '/tokopedia/search/' + search + '/' + 'none'

        $('#tokenizing').click(function () {
            url = '/tokopedia/search/' + search + '/' + 'tokenizing'
            $('#table-tokopedia').DataTable().ajax.url(url).load()
        })

        $('#stemming').click(function () {
            url = '/tokopedia/search/' + search + '/' + 'stemming'
            $('#table-tokopedia').DataTable().ajax.url(url).load()
        })

        $('#case_folding').click(function () {
            url = '/tokopedia/search/' + search + '/' + 'case_folding'
            $('#table-tokopedia').DataTable().ajax.url(url).load()
        })

        $('#stopword').click(function () {
            url = '/shopee/search/' + search + '/' + 'stopword'
            $('#table-tokopedia').DataTable().ajax.url(url).load()
        })

        var table = $('#table-tokopedia').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            searching: false,
            ajax: {
                type: "GET",
                url: url,
            },
            columns: [
                {
                    title: 'Gambar',
                    data: 'image',
                    name: 'image',
                    render: function (data, type, full, meta) {
                        return "<img src='" + data + "' width='100' class='img-thumbnail' />";
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
                    title: 'Rating',
                    data: 'rating',
                    name: 'rating'
                },
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

        $('#ratecb').change(function () {
            var column = table.column(3);
            column.visible(!column.visible());
        })

    })

})
