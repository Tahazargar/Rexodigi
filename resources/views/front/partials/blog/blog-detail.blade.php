@extends('front.layouts.master')

@section('content')
    @include('front.partials.top-header')
    @include('front.partials.header')
    <main class="detail-website py-5">
        <div class="container-lg py-5">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main-detail">
                        <div class="row">
                            <div class="col-md-12 mt-5 mt-md-4">
                                <div class="blog-item p-2">
                                    <div class="blog-detail-title d-flex align-items-center justify-content-between">
                                        <h4 class="my-4">{{ $blog->subject }}</h4>
                                        <h5 class="blog-detail-author text-primary fs-6 ps-2"><i class="fas fa-user ms-2"></i>{{ $blog->user->name }}</h5>
                                    </div>
                                    <img src="{{ asset('back/images/blog/' . $blog->image) }}" class="w-100 img-detail"
                                         alt="">
                                    <div class="blog-detail-date border-bottom pb-2">
                                        <h5 class="fs-6 mt-3 text-primary">{{ $blog->jalali() }}</h5>
                                    </div>
                                    <p class="text-muted pt-4 fs-6 mt-3 mb-3">{!! $blog->body !!}</p>


                                    <div class="comment-section py-5 mt-5">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @foreach($comments as $item)
                                                    <div class="comment-item mt-4">
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <div class="comment-item-img text-center">
                                                                    <img src="{{ asset('front/images/profile/profile-image.jpg') }}" class="rounded-circle img-thumbnail w-75" alt="user-profile-image">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-10">
                                                                <div class="comment-item-text ">
                                                                    <div class="comment-item-text-title d-flex justify-content-between">
                                                                        <h4 class="fs-6 text-primary">{{ $item->username->name }}</h4>
                                                                        <a href="#comment" onclick="setReply({{ $item->id }})" class="text-primary ps-3">پاسخ</a>
                                                                    </div>
                                                                    <p class="mt-3 text-muted">{{ $item->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @foreach($item -> childs as $value)
                                                            <div class="comment-replay bg-dark py-3 pe-4">
                                                                <div class="row">
                                                                    <div class="col-lg-2">
                                                                        <div class="comment-item-img text-center">
                                                                            <img src="{{ asset('front/images/profile/profile-image.jpg') }}" class=" rounded-circle img-thumbnail w-75" alt="user-profile-image">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-10">
                                                                        <div class="comment-item-text ">
                                                                            <h4 class="fs-6 text-primary">{{ $value->username->name }}</h4>
                                                                            <p class="mt-3 text-white">{{ $value->description }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @if(auth()->check())
                                    <div class="comment">
                                        <form action="{{ route('comment.ajax')}}" method="post" id="comment-form">
                                            @csrf
                                            <input type="hidden" value="{{ $blog->id }}" name="blog-id">
                                            <input type="hidden" id="commentReply" value="" name="parent_id">
                                            <div class="input-group mt-3">
                                                <div class="row w-100">
                                                    <div class="col-lg-12 mt-3">
                                                        <div class="form-group mt-3">
                                                            <div class="row w-100">
                                                            <div class="col-lg-12">
                                                            <textarea id="text-field" name="description" class="w-100 border p-3 form-control" rows="8" placeholder="پیام شما..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <button type="submit" class="bg-primary text-white border-0 p-2 px-5 mt-3 text-center">ارسال نظر</button>
                                        </form>
                                    </div>
                                    @else
                                    <p class="bg-primary p-4 text-center">برای ثبت نظر ابتدا باید وارد حساب کاربری خود شوید.</p>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </main>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-4">
                    <aside class="sidebar">
                        <div class="row">
                            <div class="col-12 p-4">
                                <div class="sidebar-item-title ">
                                    <h6 class="mb-4">آخرین پروژه ها</h6>
                                </div>
                                @foreach($latestProjects as $project)
                                    <div class="sidebar-item align-items-center">

                                        <div class="sidebar-item-text pt-4 align-items-center  d-flex">
                                            <img src="{{ asset('back/images/project/'. $project->image) }}"
                                                 class="img-thumbnail" alt="">
                                            <p class="px-2 fs-6 text-muted"><a href="" class="text-muted">{{ $project->title }}</a></p>
                                        </div>
                                    </div>

                                @endforeach


                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>

    @include('front.partials.footer')

@endsection

@section('js')

    <script>
        $('#comment-form').submit(function (e){
            e.preventDefault();

            let description = $('textarea[name=description]').val();
            let commentReply = $('input[name=parent_id]').val();
            let blogId = $('input[name=blog-id]').val();
            let _token = $('input[name=_token]').val();
            let action = $('#comment-form').attr('action');

            $.ajax({
                url: action,
                type: 'POST',
                data: {
                    description: description,
                    blog_id: blogId,
                    commentReply: commentReply,
                    _token: _token
                },
                success: function (data){
                    if(data == 1)
                    {
                        Swal.fire({
                            icon: "success",
                            title: 'از نظر شما ممنونیم',
                            text: "نظر شما با موفقیت ارسال شد",
                            confirmButtonText: "باشه",
                        });
                        $('textarea[name=description]').prop('value', '');
                    }
                }
            });
        })
    </script>

    {{--Get comment id--}}

    <script>
        function setReply(id)
        {
            document.querySelector('#commentReply').value = id;
            let textField = document.getElementById('text-field');
            textField.classList.add('active');
        }
    </script>
@endsection

