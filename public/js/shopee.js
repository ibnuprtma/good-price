$(document).ready(function () {
    $('#search-shopee').submit(function (event) {

        event.preventDefault();

        var search = $('#search').val()

        $.ajax({
            type: "GET",
            url: '/shopee/' + search,
            data: {
				_token: '{{csrf_token()}}',
			},
			success: function(response) {
				console.log(response)
			}
        })

    })
})