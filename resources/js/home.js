$(document).ready(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#searchMovie').on('keyup', throttle(function () {
        let movieName = $(this).val();
        $.ajax({
            url: '/movie/search',
            method: "POST",
            data: {
                name: movieName
            },
            success: function (response) {
                response = JSON.parse(response);
                if (response.status === 'success') {
                    $('#movieResults').html(response.html);
                }
            }
        });
    }));
});

window.throttle = function (f, delay) {
    let timer = null;
    return function () {
        let context = this, args = arguments;
        clearTimeout(timer);
        timer = window.setTimeout(
            function () {
                f.apply(context, args);
            },
            delay || 500
        );
    };
};
