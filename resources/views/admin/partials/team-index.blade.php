<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش تیم ما</h2>

        <table class="table top-header-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">متن قبل از تیتر</th>
                    <td>تیتر</td>
                    <td>عکس اول</td>
                    <th scope="col">نام باکس اول</th>
                    <th scope="col">پوزیشن باکس اول</th>
                    <th scope="col">اینستاگرام باکس اول</th>
                    <th scope="col">فبسبوک باکس اول</th>
                    <th scope="col">توییتر باکس اول</th>
                    <th scope="col">لینکدین باکس اول</th>
                    <td>عکس دوم</td>
                    <th scope="col">نام باکس دوم</th>
                    <th scope="col">پوزیشن باکس دوم</th>
                    <th scope="col">اینستاگرام باکس دوم</th>
                    <th scope="col">فبسبوک باکس دوم</th>
                    <th scope="col">توییتر باکس دوم</th>
                    <th scope="col">لینکدین باکس دوم</th>
                    <td>عکس سوم</td>
                    <th scope="col">نام باکس سوم</th>
                    <th scope="col">پوزیشن باکس سوم</th>
                    <th scope="col">اینستاگرام باکس سوم</th>
                    <th scope="col">فبسبوک باکس سوم</th>
                    <th scope="col">توییتر باکس سوم</th>
                    <th scope="col">لینکدین باکس سوم</th>
                    <td>عکس چهارم</td>
                    <th scope="col">نام باکس چهارم</th>
                    <th scope="col">پوزیشن باکس چهارم</th>
                    <th scope="col">اینستاگرام باکس چهارم</th>
                    <th scope="col">فبسبوک باکس چهارم</th>
                    <th scope="col">توییتر باکس چهارم</th>
                    <th scope="col">لینکدین باکس چهارم</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach($team as $item)

                    <tr>
                        <td>{{ $item -> id }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> pre_title, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> title, 20) }}</td>

                        <!-- Box One -->
                        <td><img src="{{ asset('back/images/team/' . $item->image_one)}}" width="50px"></td>
                        <td>{{ $item -> name_one }}</td>
                        <td>{{ $item -> position_one }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> instagram_one, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> facebook_one, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> twitter_one, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> linkedin_one, 20) }}</td>

                        <!-- Box Two -->
                        <td><img src="{{ asset('back/images/team/' . $item->image_two)}}" width="50px"></td>
                        <td>{{ $item -> name_two }}</td>
                        <td>{{ $item -> position_two }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> instagram_two, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> facebook_two, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> twitter_two, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> linkedin_two, 20) }}</td>

                        <!-- Box Three -->
                        <td><img src="{{ asset('back/images/team/' . $item->image_three)}}" width="50px"></td>
                        <td>{{ $item -> name_three }}</td>
                        <td>{{ $item -> position_three }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> instagram_three, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> facebook_three, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> twitter_three, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> linkedin_three, 20) }}</td>

                        <!-- Box Four -->
                        <td><img src="{{ asset('back/images/team/' . $item->image_four)}}" width="50px"></td>
                        <td>{{ $item -> name_four }}</td>
                        <td>{{ $item -> position_four }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> instagram_four, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> facebook_four, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> twitter_four, 20) }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item -> linkedin_four, 20) }}</td>
                    <td>
                        <a href="{{ route('team.edit', ['id' => $item->id]) }}" class="text-success text-decoration-none">ویرایش</a>
                    </td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$item->id}})">
                            حذف
                            <form action="{{ route('team.destroy', ['id' => $item->id]) }}" method="POST" id="delete-item-{{$item->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                    </tr>

                @endforeach
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
