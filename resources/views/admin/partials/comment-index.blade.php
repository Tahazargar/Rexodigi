<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">نظرات سایت</h2>

        <table class="table top-header-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">متن نظر</th>
                <th scope="col">کاربر</th>
                <th scope="col">بلاگ</th>
                <th scope="col">وضعیت</th>
                <th scope="col">تاریخ</th>
                <th scope="col">تغییر وضعیت</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)

                <tr>
                    <td>{{ $comment -> id }}</td>
                    <td>{{ $comment -> description }}</td>
                    <td>{{ $comment -> username -> name }}</td>
                    <td>{{ $comment -> blogName -> subject }}</td>
                    <td>
                        @if($comment->status == 0)
                            <span class="text-danger">تایید نشده</span>

                        @elseif($comment->status == 1)
                            <span class="text-success">تایید شده</span>
                        @endif
                    </td>
                    <td>{{ $comment -> jalali() }}</td>
                    <td>
                        <a class="text-decoration-none" href="{{ route('comment.edit', $comment->id) }}">تغییر وضعیت</a>
                    </td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$comment->id}})">
                            حذف
                            <form action="{{ route('comment.destroy', ['id' => $comment->id]) }}" method="POST" id="delete-item-{{$comment->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        {{ $comments->links() }}

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
