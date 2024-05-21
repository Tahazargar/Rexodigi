<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش بلاگ</h2>

        <table class="table top-header-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">تصویر</th>
                <th scope="col">نویسنده</th>
                <th scope="col">متن جایگزین تصویر</th>
                <th scope="col">موضوع بلاگ</th>
                <th scope="col">توضیحات بلاگ</th>
                <th scope="col">عنوان صفحه</th>
                <th scope="col">درباره صفحه</th>
                <th scope="col">کلمات کلیدی</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)

                <tr>
                    <td>{{ $blog -> id }}</td>
                    <td>
                        <img width="40" src="{{ asset('back/images/blog/' . $blog->image) }}">
                    </td>
                    <td class="text-nowrap">{{ $blog->user->name }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($blog -> alt, 40) }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($blog -> subject, 40) }}</td>
                    <td>{{ \Illuminate\Support\Str::limit(strip_tags($blog -> body), 40) }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($blog -> title, 40) }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($blog -> description, 40) }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($blog -> keywords, 40) }}</td>
                    <td>
                        <a href="{{ route('blog.edit', ['id' => $blog->id]) }}" class="text-success text-decoration-none">ویرایش</a>
                    </td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$blog->id}})">
                            حذف
                            <form action="{{ route('blog.destroy', ['id' => $blog->id]) }}" method="POST" id="delete-item-{{$blog->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        {{ $blogs->links() }}

        <a href="{{ route('blog.create') }}">
            <button class="btn btn-primary w-25">ساخت بلاگ</button>
        </a>
    </div>
</div>

@section('js')

    @if(Session::has('create'))
        <script>
            Swal.fire({
                icon: "success",
                title: 'تبریک میگم',
                text: "تنظیمات با موفقیت تکمیل شد.",
                confirmButtonText: "تایید",
            })
        </script>
    @endif
    @if(Session::has('update'))
        <script>
            Swal.fire({
                icon: "success",
                title: 'تبریک میگم',
                text: "ویرایش با موفقیت انجام شد.",
                confirmButtonText: "تایید",
            })
        </script>
    @endif

    <script>
        function destroyIt(event, id){
            event.preventDefault();
            Swal.fire({
                title: 'حذف تنظیمات',
                text: "آیا از حذف تنظیمات مطمئن هستید؟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'بله, مطمئن هستم!',
                cancelButtonText: 'نه حذف نکن'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.querySelector('#delete-item-'+id).submit();
                }
            })

        }

    </script>

@endsection
