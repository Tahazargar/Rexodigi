@extends('front.layouts.master')

@section('page_title')
    <title>وبلاگ کالا نوین</title>
@endsection

@section('content')
    @include('front.partials.top-header')
    @include('front.partials.header')

    <main class="detail-website py-5">
        <div class="container-lg py-5">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main-detail mb-4">
                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-md-6 mt-5 mt-md-4">
                                    <div class="blog-item p-2">
                                        <img src="{{asset('back/images/blog/' . $blog->image)}}" class="blog-archive-item-image w-100" alt="{{ $blog->alt }}">
                                        <h4 class="my-2">{{ $blog->subject }}</h4>
                                        <p class="text-muted fs-6 mt-3 mb-3">{{ \Illuminate\Support\Str::limit(strip_tags($blog->body), 100) }}</p>
                                        <a href="{{ route('blog.detail', $blog->id) }}" class="text-primary">برو بخونش</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </main>
                    {{ $blogs->links() }}
                </div>
                <div class="col-lg-4 mt-5 mt-lg-4">
                    <aside class="sidebar p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="sidebar-item-title">
                                    <h6 class="mb-4">پروژه ها</h6>
                                </div>
                                @foreach($latestProjects as $latestProject)
                                    <div class="sidebar-item align-items-center">
                                        <div class="sidebar-item-text pt-4 align-items-center  d-flex">
                                            <img src="{{asset('back/images/project/' . $latestProject->image)}}" class="img-thumbnail" alt="">
                                            <p class="px-2 fs-6 text-muted"><a href="" class="text-muted">{{ \Illuminate\Support\Str::limit($latestProject->title, 40) }}</a></p>
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
