<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش Top Header</h2>

        <table class="table top-header-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">موبایل</th>
                    <th scope="col">اینستاگرام</th>
                    <th scope="col">فیسبوک</th>
                    <th scope="col">توییتر</th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            @foreach($topHeader as $item)
            <tbody>
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->instagram}}</td>
                    <td>{{$item->facebook}}</td>
                    <td>{{$item->twitter}}</td>
                    <td><a href="{{route('topHeader.edit', $item->id)}}" class="text-decoration-none text-success">ویرایش</a></td>
                    <td>
                        <a href="" class="text-danger text-decoration-none" onclick="destroyIt(event, {{ $item->id }})">حذف</a>
                        <form action="{{ route('topHeader.destroy', ['id' => $item->id]) }}" id="delete-item-{{ $item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

        <a href="{{route('topHeader.create')}}">
            <button class="btn btn-primary w-25">تنظیم</button>
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
