<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات فوتر | دسترسی سریع</h2>

        <table class="table top-header-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان</th>
                <th scope="col">لینک</th>
                <th scope="col">عنوان</th>
                <th scope="col">لینک</th>
                <th scope="col">عنوان</th>
                <th scope="col">لینک</th>
                <th scope="col">عنوان</th>
                <th scope="col">لینک</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($footerQuickItems as $footerQuickItem)

                <tr>
                    <td>{{ $footerQuickItem -> id }}</td>
                    <td>{{ $footerQuickItem -> first_text }}</td>
                    <td>{{ $footerQuickItem -> first_link }}</td>
                    <td>{{ $footerQuickItem -> second_text }}</td>
                    <td>{{ $footerQuickItem -> second_link }}</td>
                    <td>{{ $footerQuickItem -> third_text }}</td>
                    <td>{{ $footerQuickItem -> third_link }}</td>
                    <td>{{ $footerQuickItem -> forth_text }}</td>
                    <td>{{ $footerQuickItem -> forth_link }}</td>

                    <td>
                        <a href="{{ route('footer.quick.edit', ['id' => $footerQuickItem->id]) }}" class="text-success text-decoration-none">ویرایش</a>
                    </td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$footerQuickItem->id}})">
                            حذف
                            <form action="{{ route('footer.quick.destroy', ['id' => $footerQuickItem->id]) }}" method="POST" id="delete-item-{{$footerQuickItem->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        <a href="{{ route('footer.quick.create') }}">
            <button class="btn btn-primary w-25">ساخت بخش دسترسی سریع</button>
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
