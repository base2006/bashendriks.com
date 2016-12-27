$(document).ready(function() {
    $('.quote').delay(300).fadeIn(1000);

    // Push menu
    var menuLeft = document.getElementById('cbp-spmenu-s1'),
        showLeft = document.getElementById('showLeft'),
        body = document.body;

    showLeft.onclick = function() {
        classie.toggle(this, 'active');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
		$('section').toggleClass('blur');
        disableOther('showLeft');
    };

    $('.nav-btn').click(function() {
        classie.toggle(showLeft, 'active');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
		$('section').toggleClass('blur');
        disableOther('showLeft');
    });

    function disableOther(button) {
        if (button !== 'showLeft') {
            classie.toggle(showLeft, 'enabled');
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

	$(window).scroll(function() {
		var wScroll = $(this).scrollTop();

		$('.welcome h2').css({
			'transform' : 'translate(0px, ' + wScroll / 1.6 + '%)'
		});

		var viewPortSize = $(window).height();
		var triggerAt = 300;

		var topDivs = $('.home').height() + $('.about').height();
		var trigger1 = (topDivs - viewPortSize);
		var trigger2 = (topDivs - viewPortSize) + triggerAt;

		if ($(window).scrollTop() >= trigger1) {
			$('.face').fadeTo(1000, 1);
		}

		if ($(window).scrollTop() >= trigger2) {
			$('.project').each(function(r){
				$(this).delay(r*500).fadeIn(1000);
			});
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
