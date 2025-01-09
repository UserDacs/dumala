@extends('layouts.main')

@section('content')
<style>
.tab-link {
    border-bottom: 2px solid #2c3e50 !important;
    background-color: white !important;
    color: #2c3e50 !important;
    border-radius: 0px !important;
}
</style>
<script src="{{ asset('assets/js/demo/calendar.demo.js') }}"></script>
<div class="row" style="margin-right: 18px !important; margin-left: 5px !important;">
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb" style="margin-left: 6px !important;">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Dashboard 1</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header" style="margin-left: 5px !important;">Dashboard <small></small></h1>
    <!-- END page-header -->


    <!-- BEGIN row -->

    <!-- BEGIN col-8 -->
    <div class="col-xl-12">

        <!-- END panel -->
        <!-- BEGIN tabs -->
        <ul class="nav nav-tabs nav-tabs-inverse nav-justified" data-sortable-id="index-2">
            <li class="nav-item"><a href="#latest-post" data-bs-toggle="tab" id="latest-post-tab" class="nav-link">
                    <span class="d-none d-md-inline">Announcements
                    </span></a></li>
            <li class="nav-item"><a href="#purchase" data-bs-toggle="tab" id="purchase-tab" class="nav-link active">
                    <span class="d-none d-md-inline">Mass Schedules</span></a>
            </li>
        </ul>
        <div class="tab-content panel rounded-0 rounded-bottom mb-20px" data-sortable-id="index-3">
            <div class="tab-pane fade" id="latest-post">
                <ul class="nav nav-pills mb-2 mt-2" style="margin-left: 8px !important">
                    <li class="nav-item">
                        <a href="#nav-pills-tab-1" data-bs-toggle="tab" id="all-tab" class="nav-link active" >
                            <span class="d-sm-block d-none"><strong>All</strong></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#nav-pills-tab-2" data-bs-toggle="tab" id="public-tab" class="nav-link">
                            <span class="d-sm-block d-none"><strong>Public announcements</strong></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#nav-pills-tab-3" data-bs-toggle="tab" id="marriage-tab" class="nav-link">
                            <span class="d-sm-block d-none"><strong>Marriage Bans</strong></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#nav-pills-tab-4" data-bs-toggle="tab" id="project-tab" class="nav-link">
                            <span class="d-sm-block d-none"><strong>Project and Financials</strong></span>
                        </a>
                    </li>
                </ul>

        
            </div>
            <div class="tab-pane fade active show" id="purchase">
                <div class=" p-3" data-scrollbar="true">
                    <h2>Mass Schedules</h2>
                    <h5 style="margin: 20px;">Mass Schedule of St. Joseph the Worker Cathedral (Tagbilaran Cathedral).
                        Located at Bohol Circumferential Road, Tagbilaran City, Bohol</h5>

                    <div class="row">
                        <!-- BEGIN event-list -->

                        <!-- END event-list -->
                        <div class="col-lg">
                            <!-- BEGIN calendar -->
                            <div id="calendar" class="calendar"></div>
                            <!-- END calendar -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END tabs -->

        <!-- END panel -->
    </div>
    <!-- END col-8 -->

</div>
<!-- END row -->

@endsection

@push('scripts')

<script>
$('#all-tab').addClass('tab-link');
$(document).ready(function() {
    $('#dashboard').addClass('active');

    setTimeout(function() {
        $('#latest-post-tab').tab('show');
    }, 1); // 2000 milliseconds = 2 seconds


    $('#all-tab').on('click', function() {
        // $('#announcement_status').val('is_posted');
        $(this).addClass('tab-link');
        $('#public-tab').removeClass('tab-link');
        $('#marriage-tab').removeClass('tab-link');
        $('#project-tab').removeClass('tab-link');
        // fetchAnnouncements();

    });
    $('#public-tab').on('click', function() {
        // $('#announcement_status').val('is_pending');
        $(this).addClass('tab-link');
        $('#all-tab').removeClass('tab-link');
        $('#marriage-tab').removeClass('tab-link');
        $('#project-tab').removeClass('tab-link');
        // fetchAnnouncements();
    });
    $('#marriage-tab').on('click', function() {
        // $('#announcement_status').val('is_archive');
        $(this).addClass('tab-link');
        $('#all-tab').removeClass('tab-link');
        $('#public-tab').removeClass('tab-link');
        $('#project-tab').removeClass('tab-link');
        // fetchAnnouncements();

    });
    $('#project-tab').on('click', function() {
        // $('#announcement_status').val('is_archive');
        $(this).addClass('tab-link');
        $('#all-tab').removeClass('tab-link');
        $('#marriage-tab').removeClass('tab-link');
        $('#public-tab').removeClass('tab-link');
        // fetchAnnouncements();

    });

});
</script>
@endpush