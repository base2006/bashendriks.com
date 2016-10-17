$(document).ready(function() {
    $('.quote').delay(300).fadeIn(1000);

    // Push menu
    var menuLeft = document.getElementById('cbp-spmenu-s1'),
        showLeftPush = document.getElementById('showLeftPush'),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle(this, 'active');
        classie.toggle(body, 'cbp-spmenu-push-toright');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
        disableOther('showLeftPush');
    };

    $('.nav-btn').click(function() {
        classie.toggle(showLeftPush, 'active');
        classie.toggle(body, 'cbp-spmenu-push-toright');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
        disableOther('showLeftPush');
    });

    function disableOther(button) {
        if (button !== 'showLeftPush') {
            classie.toggle(showLeftPush, 'enabled');
        }
    }

    // Menu animation
    $('nav.menu').find('a').click(function() {
        var href = $(this).attr('href');
        var anchor = $(href).offset();
        $('body').animate({
            scrollTop: anchor.top
        }, 1000, 'swing');
        return false;
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

    var currentTime = new Date().getHours();
    
    if (16 <= currentTime&&currentTime < 7) {
        if ($('link[href="css/min/main.css"]').length) {
            $('<link class="custom" rel="stylesheet" href="css/min/night.css" media="screen" title="no title">').appendTo($('head'));
            $('link[href="css/min/main.css"]').remove();
        }
    }
    if (7 <= currentTime&&currentTime < 16) {
        if ($('link[href="css/min/night.css"]').length) {
            $('<link class="custom" rel="stylesheet" href="css/min/main.css" media="screen" title="no title">').appendTo($('head'));
            $('link[href="css/min/night.css"]').remove();
        }
    }

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
