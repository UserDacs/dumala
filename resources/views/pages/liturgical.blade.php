@extends('layouts.main')

@push('style-file')

@endpush



@section('content')


<!-- END page-header -->

<!-- BEGIN row -->
<div class="row" style="margin-right: 18px !important; margin-left: 5px !important;">
    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Liturgical Services</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header">Liturgical Services <small></small></h1>

    <div class="panel panel-inverse">

        <!-- END panel-heading -->
        <!-- BEGIN panel-body -->
        <div class="panel-body">
            <div>
                <!-- Search Form -->
                <div class="navbar-item navbar-form d-flex justify-content-end">
                    <form action="#" method="POST" name="search" onsubmit="return false;">
                        <div class="form-group d-flex">
                            <input type="text" id="search-input" class="form-control" placeholder="Enter keyword"
                                onkeyup="searchTable()" style="width: 345px">
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table  table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Main Row 1 -->
                    <tr data-bs-toggle="collapse" data-bs-target="#detailsRow1" aria-expanded="false"
                        aria-controls="detailsRow1">

                        <td style="padding-top: 20px;"> John Doe</td>
                        <td style="padding-top: 20px;">Admin</td>

                    </tr>
                    <!-- Collapsible Content for Row 1 -->
                    <tr id="detailsRow1" class="collapse fade">
                        <td colspan="5">
                            <div class="p-1 bg-light">
                                <div class="d-flex p-1">

                                    <div class="flex-1">
                                        <table class="table mb-2" style="border: none !important;">
                                            <tbody>
                                                <tr>
                                                    <td style="border: none !important;"><strong>Requirements:</strong>
                                                    </td>
                                                    <td style="border: none !important;">Anthony Everett <br>Anthony
                                                        Everett<br>Anthony Everett <br>Anthony Everett</td>

                                                </tr>

                                                <tr>
                                                    <td style="border: none !important;"><strong>Stipend:</strong></td>
                                                    <td style="border: none !important;">8 J S Torralba Street,
                                                        Tagbilaran City Bohol </td>

                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Main Row 2 -->
                    <tr data-bs-toggle="collapse" data-bs-target="#detailsRow2" aria-expanded="false"
                        aria-controls="detailsRow2">

                        <td style="padding-top: 20px;">Jane Smith</td>
                        <td style="padding-top: 20px;">User</td>

                    </tr>
                    <!-- Collapsible Content for Row 2 -->
                    <tr id="detailsRow2" class="collapse fade">
                        <td colspan="5">
                            <div class="p-1 bg-light">
                                <div class="d-flex p-1">
                                    <div class="flex-1">
                                        <table class="table mb-2" style="border: none !important;">
                                            <tbody>
                                                <tr>
                                                    <td style="border: none !important;"><strong>Requirements:</strong>
                                                    </td>
                                                    <td style="border: none !important;">Anthony Everett <br>Anthony
                                                        Everett<br>Anthony Everett <br>Anthony Everett</td>

                                                </tr>

                                                <tr>
                                                    <td style="border: none !important;"><strong>Stipend:</strong></td>
                                                    <td style="border: none !important;">8 J S Torralba Street,
                                                        Tagbilaran City Bohol </td>

                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <div class="pagination pagination-sm d-flex justify-content-end">
                    <div class="page-item disabled"><a href="javascript:;" class="page-link">«</a></div>
                    <div class="page-item active"><a href="javascript:;" class="page-link">1</a></div>
                    <div class="page-item"><a href="javascript:;" class="page-link">2</a></div>
                    <div class="page-item"><a href="javascript:;" class="page-link">3</a></div>
                    <div class="page-item"><a href="javascript:;" class="page-link">4</a></div>
                    <div class="page-item"><a href="javascript:;" class="page-link">5</a></div>
                    <div class="page-item"><a href="javascript:;" class="page-link">»</a></div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- END row -->

@endsection

@push('scripts')

<script>
$('#liturgical').addClass('active');
</script>
@endpush