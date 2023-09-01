<div class="main-content">
    <div class="main-content-item">
        <div class="old-project">
            <h2>تمام کاربران</h2>
            <table class="mb-5 ">
                <tbody>
                    <tr>
                        <th>نام</th>
                        <th>تلفن</th>
                        <th>ایمیل</th>
                        <th>نقش کاربری</th>
                        <th>تاریخ عضویت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user -> name }}</td>
                        <td>{{ $user -> mobile }}</td>
                        <td>{{ $user -> email }}</td>
                        <td>{{ $user -> persianRole() }}</td>
                        <td>{{ $user -> jalaliCalender() }}</td>
                        <td><a href="{{ route('users.edit', $user -> id) }}"
                                class="text-success text-decoration-none">ویرایش<i class="fa fa-edit"></i></a></td>
                        <td>
                            <a href="" onclick="destroyFunction(event, {{$user->id}})">حذف کاربر</a>
                            <form action="{{route('users.destroy', $user->id)}}" method="POST"
                                id="delete-user-{{$user->id}}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>


