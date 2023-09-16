<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش تیم ما</h2>

        <table class="table top-header-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">متن قبل از تیتر</th>
                    <th scope="col">تیتر</th>
                    <th scope="col">تیتر باکس اول</th>
                    <th scope="col">توضیح باکس اول</th>
                    <th scope="col">متن دکمه باکس اول</th>
                    <th scope="col">لینک باکس اول</th>
                    <th scope="col">تیتر باکس دوم</th>
                    <th scope="col">توضیح باکس دوم</th>
                    <th scope="col">متن دکمه باکس دوم</th>
                    <th scope="col">لینک باکس دوم</th>
                    <th scope="col">تیتر باکس سوم</th>
                    <th scope="col">توضیح باکس سوم</th>
                    <th scope="col">متن دکمه باکس سوم</th>
                    <th scope="col">لینک باکس سوم</th>
                    <th scope="col">تیتر باکس چهارم</th>
                    <th scope="col">توضیح باکس چهارم</th>
                    <th scope="col">متن دکمه باکس چهارم</th>
                    <th scope="col">لینک باکس چهارم</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <a href="{{ route('team.create') }}">
            <button class="btn btn-primary w-25">ساخت بخش تیم ما</button>
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
