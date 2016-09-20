$(document).ready(function(){
    $('.quote').delay(300).fadeIn(1000);

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
});

function resetErrors() {
    $('form input, form textarea').parent().removeClass('has-danger');
    $('div.form-control-feedback, div.alert').remove();
}
