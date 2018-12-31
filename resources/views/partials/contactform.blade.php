<form id="contact-form" action="{{ route('contactform.send') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="name" class="sr-only">Name</label>
            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Firstname and lastname" required>
            @if ($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="col-md-6 mb-3">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Email address" required>
            @if ($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-12 mb-3">
            <label for="message" class="sr-only">Message</label>
            <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" id="message" name="message" cols="30" rows="10"
                      placeholder="Leave me a message..." required></textarea>
            @if ($errors->has('message'))
                <div class="invalid-feedback">
                    {{ $errors->first('message') }}
                </div>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-12 mb-3">
            {!! NoCaptcha::renderJs() !!}
            {!! NoCaptcha::display() !!}
            @if ($errors->has('g-recaptcha-response'))
                <div class="invalid-feedback">
                    {{ $errors->first('g-recaptcha-response') }}
                </div>
            @endif
        </div>
    </div>

    <button type="submit" class="btn btn-outline-primary">Send Message</button>
</form>

@push('scripts')
    <script>
        $(document).ready(function() {
            /* ajax setup for safety*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#contact-form').submit(function(e) {
                e.preventDefault();
                $('#contact-form input, #contact-form textarea').removeClass('is-invalid');
                $('#contact-form .invalid-feedback').remove();
                let data = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    message: $('#message').val(),
                    'g-recaptcha-response': $('#g-recaptcha-response').val(),
                };
                $.ajax({
                    type: "POST",
                    url: "{{ route('contactform.send') }}",
                    data: data,
                    success: function(response) {
                        grecaptcha.reset();
                        if (response.success) {
                            const form = $('#contact-form');
                            form.trigger('reset');
                            form.prepend(
                                '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                '<span aria-hidden="true">&times;</span>' +
                                '</button>' +
                                '<strong>Thanks!</strong><br>' + response.success +
                                '</div>'
                            );
                        } else {
                            $.each(response, function(k,v) {
                                let elem = $('#'+k);
                                elem.addClass('is-invalid');
                                elem.after("<div class='invalid-feedback'>" + v + "</div>");
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush