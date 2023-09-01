<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش خانه</h2>

        <table class="table top-header-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">عکس</th>
                    <th scope="col">سال تاسیس</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col">تماس با ما</th>
                    <th scope="col">سوالات متداول</th>
                </tr>
            </thead>

            <tbody>
                @foreach($hero as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img width="50" src="{{asset('back/images/hero/' . $item->image)}}"></td>
                    <td>{{$item->foundation}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->contact}}</td>
                    <td>{{$item->faq}}</td>
                    <td><a class="text-decoration-none text-success" href="{{route('hero.edit', ['id'=>$item->id])}}">ویرایش</a></td>
                    <td>
                        <a href="" class="text-decoration-none text-danger" onclick="destroyIt(event, {{$item->id}})">حذف</a>
                        <form action="{{ route('hero.destroy', ['id' => $item->id]) }}" method="POST" id="delete-item-{{$item->id}}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

        <a href="{{ route('hero.create') }}">
            <button class="btn btn-primary w-25">ساخت خانه</button>
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
