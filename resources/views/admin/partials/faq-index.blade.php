<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش سوالات متداول</h2>

        <table class="table top-header-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان</th>
                <th scope="col">توضیحات</th>
                <th scope="col">سوال اول</th>
                <th scope="col">جواب اول</th>
                <th scope="col">سوال دوم</th>
                <th scope="col">جواب دوم</th>
                <th scope="col">سوال سوم</th>
                <th scope="col">جواب سوم</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($faqs as $faq)

                <tr>
                    <td>{{ $faq -> id }}</td>
                    <td>{{ $faq -> title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($faq -> description, 25) }}</td>
                    <td>{{ $faq -> faq_one }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($faq -> faq_one_description, 25) }}</td>
                    <td>{{ $faq -> faq_two }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($faq -> faq_two_description, 25) }}</td>
                    <td>{{ $faq -> faq_three }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($faq -> faq_three_description, 25) }}</td>
                    <td>
                        <a href="{{ route('faq.edit', ['id' => $faq->id]) }}" class="text-success text-decoration-none">ویرایش</a>
                    </td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$faq->id}})">
                            حذف
                            <form action="{{ route('faq.destroy', ['id' => $faq->id]) }}" method="POST" id="delete-item-{{$faq->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <a href="{{ route('faq.create') }}">
            <button class="btn btn-primary w-25">ساخت بخش نظرات مشتریان</button>
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
