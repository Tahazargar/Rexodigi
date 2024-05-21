<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات فوتر | درباره ما</h2>

        <table class="table top-header-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان</th>
                <th scope="col">توضیحات</th>
                <th scope="col">لینک اینستاگرام</th>
                <th scope="col">لینک فیس بوک</th>
                <th scope="col">لینک توییتر</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($footer as $item)

                <tr>
                    <td>{{ $item -> id }}</td>
                    <td>{{ $item -> title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($item -> description, 50) }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($item -> instagram_link, 50) }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($item -> facebook_link, 50) }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($item -> twitter_link, 50) }}</td>

                    <td>
                        <a href="{{ route('footer.about.edit', ['id' => $item->id]) }}" class="text-success text-decoration-none">ویرایش</a>
                    </td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$item->id}})">
                            حذف
                            <form action="{{ route('footer.about.destroy', ['id' => $item->id]) }}" method="POST" id="delete-item-{{$item->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <a href="{{ route('footer.about.create') }}">
            <button class="btn btn-primary w-25">ساخت بخش درباره ما</button>
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
