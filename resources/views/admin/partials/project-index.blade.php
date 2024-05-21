<div class="main-content">
    <div class="main-content-item">
        <h2 class="text-orange">تنظیمات بخش پروژه ها</h2>

        <table class="table top-header-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان</th>
                <th scope="col">توضیحات</th>
                <th scope="col">تصویر</th>
                <th>ویرایش</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)

                <tr>
                    <td>{{ $project -> id }}</td>
                    <td>{{ $project -> title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($project -> description, 20) }}</td>
                    <td>
                        <img width="40" src="{{ asset('back/images/project/' . $project->image) }}">
                    </td>
                    <td>
                        <a href="{{ route('project.edit', ['id' => $project->id]) }}" class="text-success text-decoration-none">ویرایش</a>
                    </td>
                    <td>
                        <a class="text-decoration-none text-danger" href="#" onclick="destroyIt(event, {{$project->id}})">
                            حذف
                            <form action="{{ route('project.destroy', ['id' => $project->id]) }}" method="POST" id="delete-item-{{$project->id}}">
                                @csrf
                                @method('delete')
                            </form>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>

        {{ $projects->links() }}

        <a href="{{ route('project.create') }}">
            <button class="btn btn-primary w-25">ساخت بخش پروژه ها</button>
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
