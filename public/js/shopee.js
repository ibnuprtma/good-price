$(document).ready(function () {
    $('#search-shopee').submit(function (event) {

        event.preventDefault();

        var search = $('#search').val()

        $('#table-shopee').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                type: "GET",
                url: '/shopee/search/' + search,
            },
            columns: [
                {
                    data: 'image',
                    name: 'image',
                    render: function (data, type, full, meta) {
                        return "<img src='https://cf.shopee.co.id/file/" + data + "'    width='100' class='img-thumbnail' />";
                    },
                    orderable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'historical_sold',
                    name: 'historical_sold'
                },
                {
                    data: 'rating',
                    name: 'rating'
                },
                {
                    data: 'description',
                    name: 'description'
                }
            ]
        });

    })
})



// $(document).ready(function () {

// });
