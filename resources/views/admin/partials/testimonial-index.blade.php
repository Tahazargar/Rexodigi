<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش نظرات مشتریان</h2>

        <table class="table top-header-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">تصویر</th>
                <th scope="col">نام مشتری</th>
                <th scope="col">سمت مشتری</th>
                <th scope="col">توضیحات</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($testimonials as $testimonial)

            <tr>
                <td>{{ $testimonial -> id }}</td>
                <td>
                    <img width="40" src="{{ asset('back/images/testimonial/' . $testimonial->image) }}">
                </td>
                <td>{{ $testimonial -> customer_name }}</td>
                <td>{{ $testimonial -> customer_position }}</td>
                <td>{{ \Illuminate\Support\Str::limit($testimonial -> description, 180) }}</td>
                <td>
                    <a href="{{ route('testimonial.edit', ['id' => $testimonial->id]) }}" class="text-success text-decoration-none">ویرایش</a>
                </td>
                <td>
                    <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$testimonial->id}})">
                        حذف
                        <form action="{{ route('testimonial.destroy', ['id' => $testimonial->id]) }}" method="POST" id="delete-item-{{$testimonial->id}}">
                            @csrf
                            @method('delete')
                        </form>
                    </a>
                </td>
            </tr>

            @endforeach
            </tbody>
        </table>

        {{ $testimonials->links() }}

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
