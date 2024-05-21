@extends('admin.layouts.master')

@section('content')

@include('admin.partials.sidebar')
@include('admin.partials.header')
@include('admin.partials.information')
@include('admin.partials.dynamic-content-user')

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
}
</script>

@endsection
