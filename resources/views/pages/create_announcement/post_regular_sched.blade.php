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
        <li class="breadcrumb-item active">Create Announcement</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header">Create Announcement <small></small></h1>
    <!-- END page-header -->
    <div class="panel panel-inverse">


        <!-- BEGIN panel-body -->
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-10px">

                        <label class="form-label">Announcement type:</label>
                        <select class="form-select" id="announcement_type">
                            <option value="public">Public announcement</option>
                            <option value="marriage">Marriage banns</option>
                            <option value="project">Project and financial</option>
                            <option value="">Mass schedules</option>
                        </select>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="mb-10px">
                        <label class="form-label">Title:</label>
                        <input class="form-control" type="text" placeholder="title...">
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Content:</label>
                    <textarea class="form-control" rows="3" placeholder="Content..."></textarea>
                </div>
            </div>

            <div class="pagination pagination-sm d-flex justify-content-end mt-3">
                <p class="mb-0 d-flex justify-content-end">
                    <a href="javascript:;" class="btn btn-sm btn-success me-5px">Accept</a>
                    <a href="javascript:;" class="btn btn-sm btn-danger me-5px">Decline</a>
                </p>
            </div>
        </div>
    </div>

</div>
</div>
<!-- END row -->
@endsection

@push('scripts')

<script>
$('#announcements').addClass('active');

$(document).ready(function() {
    $('#announcement_type').change(function() {
        var selectedValue = $(this).val(); // Get the selected value
        console.log('Selected announcement type: ' + selectedValue);

        // Perform an action based on the selected value
        if (selectedValue === 'public') {
            location.href = "{{ route('public_announce') }}";
        } else if (selectedValue === 'marriage') {
            location.href = "{{ route('marriage_bann') }}";
        } else if (selectedValue === 'project') {
            location.href = "{{ route('project_financial') }}";
        } else if (selectedValue === 'mass') {
            location.href = "{{ route('public_announce') }}";
        }
    });
});
</script>
@endpush
