<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">پیام کاربران</h2>

        <table class="table top-header-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">نام کاربر</th>
                <th scope="col">عنوان</th>
                <th scope="col">توضیحات</th>
                <th scope="col">پست الکترونیکی</th>
                <th scope="col">تاریخ ارسال</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)

                <tr>
                    <td>{{ $contact -> id }}</td>
                    <td>{{ $contact -> full_name }}</td>
                    <td>{{ $contact -> subject }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($contact -> description, 50) }}</td>
                    <td>{{ $contact -> email }}</td>
                    <td>{{ $contact -> Jalali() }}</td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$contact->id}})">
                            حذف
                            <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="POST" id="delete-item-{{$contact->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <a href="{{ route('testimonial.create') }}">
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
