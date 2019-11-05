$(document).ready(function () {

    $('#btn-find').click(function () {
        var search = $('#search').val()
        var search = search.replace(" ", "%20")

        var items = []

        var originalURL = 'https://shopee.co.id/api/v2/search_items/?by=relevancy&keyword=' + search + '&limit=50&newest=0&order=desc&page_type=search&version=2'
        var queryURL = "https://cors-anywhere.herokuapp.com/" + originalURL

        console.log(search)

        $.ajax({
            url: queryURL,
            method: "GET",
            dataType: "json",
            // this headers section is necessary for CORS-anywhere
            headers: {
                "x-requested-with": "xhr"
            },
            success: function (response) {
                var resItems = response['items']

                $.each(resItems, function () {
                    if (this['adsid'] == null) {
                        var data = []

                        name = this['name']
                        data['name'] = name

                        price = this['price']
                        data['price'] = price

                        items.push(data)
                    }
                })
            },
            error: function (request, status, error) {
                alert(request.responseText);
            },
        })
        console.log(items)


    })
})