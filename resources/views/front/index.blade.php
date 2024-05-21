@extends('front.layouts.master')

@section('page_title')
    <title>وبسایت کالا نوین</title>
@endsection

@section('content')

@include('front.partials.top-header')



  @include('front.partials.header')




  @include('front.partials.hero-wrap')



  @include('front.partials.about')



  @include('front.partials.intro')



  @include('front.partials.service')



  @include('front.partials.counter')




  @include('front.partials.team')




  @include('front.partials.project')




  @include('front.partials.testimonial')




  @include('front.partials.blogs')



  @include('front.partials.contact')




  @include('front.partials.footer')

@endsection('content')

@section('js')

    <script>
        $('#contact-form').submit(function (e){
            e.preventDefault();

            let fullName = $('input[name=fullname]').val();
            let email = $('input[name=email]').val();
            let subject = $('input[name=subject]').val();
            let description = $('textarea[name=description]').val();
            let _token = $('input[name=_token]').val();
            let action = $('#contact-form').attr('action');

            $.ajax({
                url: action,
                type: 'POST',
                data: {
                    fullName: fullName,
                    email: email,
                    subject: subject,
                    description: description,
                    _token: _token
                },
                success: function (data){
                    if(data == 1)
                    {
                        Swal.fire({
                            icon: "success",
                            title: 'از پیام شما ممنونیم',
                            text: "پیام شما با موفقیت ارسال شد",
                            confirmButtonText: "باشه",
                        });
                        $('input[name=fullname]').prop('value', '');
                        $('input[name=email]').prop('value', '');
                        $('input[name=subject]').prop('value', '');
                        $('textarea[name=description]').prop('value', '');
                    }
                }
            });
        })
    </script>

@endsection



