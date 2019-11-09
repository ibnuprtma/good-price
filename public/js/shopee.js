$(document).ready(function () {
    $('#search-shopee').submit(function (event) {

        event.preventDefault();

        var search = $('#search').val()

        $("input[name='atribute']").each(function(){
            if(!$('#'+this.id).is(':checked')){
                $('#'+this.id +'_item').remove();
            }else{
                $('#table-shopee').DataTable({
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
                            data: this.id,
                            name: this.id
                        }
                    ]
                });
            }
        });

        // $('#table-shopee').DataTable({
        //     processing: true,
        //     serverSide: true,
        //     destroy: true,
        //     searching: false,
        //     ajax: {
        //         type: "GET",
        //         url: '/shopee/search/' + search,
        //     },
        //     columns: [
        //         {
        //             data: 'image',
        //             name: 'image',
        //             render: function (data, type, full, meta) {
        //                 return "<img src='https://cf.shopee.co.id/file/" + data + "'    width='100' class='img-thumbnail' />";
        //             },
        //             orderable: false
        //         },
        //         {
        //             data: 'name',
        //             name: 'name'
        //         },
        //         {
        //             data: 'price',
        //             name: 'price'
        //         },
        //         {
        //             data: 'historical_sold',
        //             name: 'historical_sold'
        //         },
        //         {
        //             data: 'rating',
        //             name: 'rating'
        //         },
        //         {
        //             data: 'description',
        //             name: 'description'
        //         }
        //     ]
        // });

    })
})



// $(document).ready(function () {

// });
