<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش شمارنده</h2>

        <table class="table top-header-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">متن اول</th>
                    <th scope="col">عدد اول</th>
                    <th scope="col">متن دوم</th>
                    <th scope="col">عدد دوم</th>
                    <th scope="col">متن سوم</th>
                    <th scope="col">عدد سوم</th>
                    <th scope="col">متن چهارم</th>
                    <th scope="col">عدد چهارم</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach($counter as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->text_one }}</td>
                    <td>{{ $item->number_one }}</td>
                    <td>{{ $item->text_two }}</td>
                    <td>{{ $item->number_two }}</td>
                    <td>{{ $item->text_three }}</td>
                    <td>{{ $item->number_three }}</td>
                    <td>{{ $item->text_four }}</td>
                    <td>{{ $item->number_four }}</td>
                    <td><a class="text-decoration-none text-success" href="{{route('counter.edit', ['id'=>$item->id])}}">ویرایش</a></td>
                    <td>
                        <a href="" class="text-decoration-none text-danger" onclick="destroyIt(event, {{$item->id}})">حذف</a>
                        <form action="{{ route('counter.destroy', ['id' => $item->id]) }}" method="POST" id="delete-item-{{$item->id}}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('counter.create') }}">
            <button class="btn btn-primary w-25">ساخت شمارنده</button>
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
