$(document).ready(function(){
    $('.quote').delay(300).fadeIn(1000);

    var data = {};

    // http://michaelsoriano.com/how-to-ajax-validate-forms/
    $('input[type="submit"]').click(function() {
        resetErrors();

        var url = 'index.php';

        $.each($('form input, form textarea'), function(v, i) {
            if (v.type !== 'submit') {
                data[v.name] = v.value;
            }
        });

        $.ajax({
            dataType: 'json',
            type: 'post',
            url: url,
            data: data,
            success: function(resp) {
                if (resp === true) {
                    $('form').submit();
                    return false;
                } else {
                    $.each(rep, function(i, v) {
                        console.log(i + ' => ' + v);
                        var msg = '<div class="form-control-feedback">' + v + '</div>';
                        $('input[name="' + i + '"], textarea[name="' + i + '"]').parent().addClass('has-danger');
                        $('input[name="' + i + '"], textarea[name="' + i + '"]').after(msg);
                    });
                    var keys = Object.keys(resp);
                    $('input[name="'+keys[0]+'"]').focus();
                }
                return false;
            }, error: function() {
                console.log('There was an error checking the fields');
            }
        });
        return false;
    });
});

function resetErrors() {
    $('form input, form textarea').removeClass('inputTxtError');
    $('label.error').remove();
}
