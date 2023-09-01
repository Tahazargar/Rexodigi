<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش درباره ما</h2>

        <table class="table top-header-table about-us-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">عکس</th>
                    <th scope="col">پیش تیتر</th>
                    <th scope="col">تیتر</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col">توضیح خدمات</th>
                    <th scope="col">تیتر خدمت اول</th>
                    <th scope="col">توضیح خدمت اول</th>
                    <th scope="col">تیتر خدمت دوم</th>
                    <th scope="col">توضیح خدمت دوم</th>
                    <th scope="col">تیتر خدمت سوم</th>
                    <th scope="col">توضیح خدمت سوم</th>
                    <th scope="col">تیتر خدمت چهارم</th>
                    <th scope="col">توضیح خدمت چهارم</th>
                    <th scope="col">سال های تجربه</th>
                    <th scope="col">متن سال های تجربه</th>
                    <th scope="col">متن جایگزین عکس</th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>

            <tbody>
                @foreach($about as $item)

                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ asset('back/images/about/' . $item->image)}}" width="50px"></td>
                    <td>{{ $item->pre_title }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($item->description, '50') }}</td>
                    <td>{{ $item->service_title }}</td>
                    <td>{{ $item->service_title_item_one }}</td>
                    <td>{{ $item->service_description_item_one }}</td>
                    <td>{{ $item->service_title_item_two }}</td>
                    <td>{{ $item->service_description_item_two }}</td>
                    <td>{{ $item->service_title_item_three }}</td>
                    <td>{{ $item->service_description_item_three }}</td>
                    <td>{{ $item->service_title_item_four }}</td>
                    <td>{{ $item->service_description_item_four }}</td>
                    <td>{{ $item->experience_number }}</td>
                    <td>{{ $item->experience_text }}</td>
                    <td>{{ $item->alt }}</td>
                    <td>
                        <a href="{{ route('about.edit', ['id' => $item->id]) }}" class="text-success text-decoration-none">ویرایش</a>
                    </td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$item->id}})">
                            حذف
                            <form action="{{ route('about.destroy', ['id' => $item->id]) }}" method="POST" id="delete-item-{{$item->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>

        <a href="{{ route('about.create') }}">
            <button class="btn btn-primary w-25">ساخت درباره ما</button>
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
