@extends('admin.layouts.master')

@section('content')

@include('admin.partials.sidebar')
@include('admin.partials.header')
@include('admin.partials.information')
@include('admin.users.dynamic-content')

@endsection('content')

@section('js')

@if(Session::has('status'))
<script>
Swal.fire({
    icon: "success",
    title: "بسیار عالی",
    text: "کابر با موفقیت ویرایش شد!",
    confirmButtonText: "باشه"
})
</script>
@endif

<script>
function destroyFunction(event, id) {
    console.log('js is working');
    event.preventDefault();
    document.getElementById('delete-user-' + id).sumbit();
    // Swal.fire({
    //     title: 'مطمئنی؟',
    //     text: "این عمل قابل بازگشت نیست!",
    //     icon: 'warning',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     confirmButtonText: 'بله، حذفش کن',
    //     cancelButtonText: 'انصراف'
    // }).then((result => {
    //     if (result.isConfirmed) {

    //         Swal.fire(
    //             'حذف',
    //             'کاربر حذف شد',
    //             'حذف موفقیت آمیز بود'
    //         )
    //     }
    // }))
}
</script>

@endsection
