@extends('layouts.main')



@push('style-file')

@endpush

@push('script-file')

@endpush


@section('content')
<div class="row" style="margin-right: 18px !important; margin-left: 5px !important;">
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Accounts</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header">Accounts <small></small></h1>
    <!-- END page-header -->
</div>
<!-- END row -->
@endsection

@push('scripts')

<script>
$('#requests').addClass('active');
$('#requests-table').DataTable({
    responsive: true
});
</script>
@endpush