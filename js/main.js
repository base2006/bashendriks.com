$(document).ready(function() {
	//Menu button
    $(".toggle").click(function() {
        $(this).toggleClass("toggle-active");
		$("nav").toggleClass("menu-bg");
    });

	// Scroll to
	$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

    // Form validation
    $('form').submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();

        resetErrors();

        // Serialize the form data.
        var formData = $('form').serialize();

        // Submit the form using AJAX.
        $.ajax({
                dataType: 'json',
                type: 'POST',
                url: $('form').attr('action'),
                data: formData
            })
            .done(function(response) {
                $('input[type="text"], textarea').parent().addClass('has-success');
                $.each(response, function(i, v) {
                    console.log(i + ' => ' + v);
                    var msg = '<div class="form-control-feedback">' + v + '</div>';
                    $('input[name="' + i + '"], textarea[name="' + i + '"]').parent().removeClass('has-success');
                    $('input[name="' + i + '"], textarea[name="' + i + '"]').parent().addClass('has-danger');
                    $('input[name="' + i + '"], textarea[name="' + i + '"]').after(msg);
                });

                if (response.success) {
                    $('.form-group, input[type="submit"]').remove();
                    $('form').before('<div class="alert alert-success"></div>');
                    $('.alert').text(response.success)
                }
            })
            .fail(function(data) {
                $('form').before('<div class="alert alert-danger"></div>').text(data.error);
                $('.alert').text(data.error)
            });
    });

    updateCountdown();
    $('#message').change(updateCountdown);
    $('#message').keyup(updateCountdown);

});

function updateCountdown() {
    // 300 is the max message length
    var remaining = 300 - $('#message').val().length;
    $('.countdown').text(remaining + '/300');
}

function resetErrors() {
    $('form input, form textarea').parent().removeClass('has-danger');
    $('div.form-control-feedback, div.alert').remove();
}
