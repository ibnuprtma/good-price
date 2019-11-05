$(document).ready(function () {

    $('#search').keydown(function () {
        var search = $('#search').val()
        var search = search.replace(" ", "%20")

        $.ajax({
            type: "GET",
            crossDomain: true,
            dataType: 'jsonp',
            contentType: 'application/json',
            xhrFields: {
                withCredentials: true
            },
            url: 'https://shopee.co.id/api/v2/search_items/?by=relevancy&keyword=' + search + '&limit=50&newest=0&order=desc&page_type=search&version=2',
            data: {
                _method: 'GET',
            },
            success: function (response) {
                console.log(response)
            }
        });
    })
})