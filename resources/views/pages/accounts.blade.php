@extends('layouts.main')



@push('style-file')
<!-- ================== BEGIN page-css ================== -->

<!-- ================== END page-css ================== -->
<style>
.switch-container {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 30px;
}

.switch-input {
    opacity: 0;
    width: 0;
    height: 0;
}

.switch-label {
    position: absolute;
    cursor: pointer;
    background-color: rgb(255, 27, 48);
    border-radius: 30px;
    width: 100%;
    height: 100%;
    transition: background-color 0.3s ease;
}

.switch-label:before {
    content: "";
    position: absolute;
    height: 26px;
    width: 26px;
    border-radius: 50%;
    background-color: white;
    top: 2px;
    left: 2px;
    transition: transform 0.3s ease;
}

.switch-input:checked+.switch-label {
    background-color: green;
}

.switch-input:checked+.switch-label:before {
    transform: translateX(30px);
}

.switch-text {
    position: absolute;
    width: 100%;
    text-align: center;
    color: white;
    font-size: 12px;
    top: 7px;
}

.switch-input:checked+.switch-label .switch-text {
    content: 'Active';
}

.switch-input:not(:checked)+.switch-label .switch-text {
    content: 'Unactive';
}
</style>
@endpush

@push('script-file')
<link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
    rel="stylesheet" />
<!-- ================== BEGIN page-js ================== -->
<script src="{{ asset('assets/plugins/datatables.net/js/dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/table-manage-default.demo.js') }}"></script>
<script src="{{ asset('assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/render.highlight.js') }}"></script>

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

    <!-- BEGIN row -->

    <!-- BEGIN panel -->
    <div class="panel panel-inverse">
        <!-- BEGIN panel-heading -->
        <div class="panel-heading" style="background: #fdfeff !important; ">
            <h4 class="panel-title" style="width: auto !important;"> <a href="#modal-dialog-add" data-bs-toggle="modal"
                    class="btn btn-primary btn-sm " style="display: inline !important;">Add Account</a></h4>
            <div class="panel-heading-btn">
                <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                    class="fa fa-expand"></i></a> -->
                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                        class="fa fa-redo"></i></a>
                <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                    class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                    class="fa fa-times"></i></a> -->
            </div>
        </div>
        <!-- END panel-heading -->
        <!-- BEGIN panel-body -->
        <div class="panel-body">
            <table id="accounts-table" width="100%" class="table">
                <thead>
                    <tr>
                        <th width="1%"></th>
                        <th width="1%" data-orderable="false"></th>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Role</th>
                        <th class="text-nowrap">Status</th>
                        <th class="text-nowrap" style="text-align: right; padding-right: 50px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td width="1%" class="fw-bold">1</td>
                        <td width="1%" class="with-img"><img src="{{ asset('assets/img/user/user-1.jpg') }}"
                                class="rounded h-30px my-n1 mx-n1" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>
                            <div class="switch-container">
                                <input type="checkbox" id="customSwitch1" onchange="updateSwitchText(1)"
                                    class="switch-input" checked />
                                <label for="customSwitch1" class="switch-label">
                                    <span class="switch-text switch-text1">Active</span>
                                </label>
                            </div>
                        </td>
                        <td style="text-align: right; padding-right: 50px"><a href="#" data-bs-toggle="dropdown"
                                class="text-body text-opacity-50"><i class="fa fa-ellipsis-h fs-30px"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <a href="#modal-dialog" class="btn btn-sm btn-success w-100px"
                                        data-bs-toggle="modal">Demo</a>
                                </a>
                                <a href="#" class="dropdown-item">Option 2</a>
                                <a href="#" class="dropdown-item">Option 3</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Option 4</a>
                            </div>
                        </td>

                    </tr>
                    <tr class="even gradeC">
                        <td class="fw-bold">2</td>
                        <td class="with-img"><img src="{{ asset('assets/img/user/user-2.jpg') }}"
                                class="rounded h-30px my-n1 mx-n1" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>
                            <div class="switch-container">
                                <input type="checkbox" id="customSwitch2" onchange="updateSwitchText(2)"
                                    class="switch-input" checked />
                                <label for="customSwitch2" class="switch-label">
                                    <span class="switch-text switch-text2">Active</span>
                                </label>
                            </div>
                        </td>
                        <td style="text-align: right; padding-right: 50px"><a href="#" data-bs-toggle="dropdown"
                                class="text-body text-opacity-50"><i class="fa fa-ellipsis-h fs-30px"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Option 1</a>
                                <a href="#" class="dropdown-item">Option 2</a>
                                <a href="#" class="dropdown-item">Option 3</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Option 4</a>
                            </div>
                        </td>

                    </tr>
                    <tr class="odd gradeA">
                        <td class="fw-bold">3</td>
                        <td class="with-img"><img src="{{ asset('assets/img/user/user-3.jpg') }}"
                                class="rounded h-30px my-n1 mx-n1" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 5.5</td>
                        <td>
                            <div class="switch-container">
                                <input type="checkbox" id="customSwitch3" onchange="updateSwitchText(3)"
                                    class="switch-input" checked />
                                <label for="customSwitch3" class="switch-label">
                                    <span class="switch-text switch-text3">Active</span>
                                </label>
                            </div>
                        </td>
                        <td style="text-align: right; padding-right: 50px"><a href="#" data-bs-toggle="dropdown"
                                class="text-body text-opacity-50"><i class="fa fa-ellipsis-h fs-30px"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Option 1</a>
                                <a href="#" class="dropdown-item">Option 2</a>
                                <a href="#" class="dropdown-item">Option 3</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Option 4</a>
                            </div>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
        <!-- END panel-body -->
        <!-- BEGIN hljs-wrapper -->

        <!-- END hljs-wrapper -->
    </div>
    <!-- END panel -->


    <!-- END row -->
    <!-- #modal-dialog -->
    <div class="modal fade" id="modal-dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content">
                <div class="modal-header" style="border: 0px !important">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin-bottom: 50px">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/user/user-12.jpg') }}" width="200" alt=""
                                style="border-radius: 100px; margin-left: 35px !important" />
                        </div>
                        <div class="col-8 pt-3">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="widget-list-title">Christopher Struth</h4>
                                </div>
                                <hr>
                                <div class="col-12">
                                    <p class="widget-list-desc">Bank Transfer</p>
                                </div>
                                <div class="col-12">
                                    <p class="widget-list-desc">Bank Transfer</p>
                                </div>
                                <div class="col-12">
                                    <p class="widget-list-desc">Bank Transfer</p>
                                </div>
                                <div class="col-12">
                                    <p class="widget-list-desc">Bank Transfer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- #modal-dialog-add -->
    <div class="modal fade" id="modal-dialog-add">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: 0px !important">
                    <h4 class="modal-title">Add Account</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body" style="margin-top: -10px !important;">
                    <form id="addAccountForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center">
                                <img id="previewImage" src="{{ asset('assets/img/user/user-12.jpg') }}" width="200"
                                    height="200" alt="Profile Image" style="border-radius: 100px;" />
                                <input type="file" name="profile_image" id="profile_image" class="form-control"
                                    accept="image/*" style="display: none;" />
                            </div>
                            <div class="col-8 pt-3">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="text" class="form-control fs-15px" id="prefix" name="prefix"
                                                placeholder="name@example.com"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="prefix" class="d-flex align-items-center fs-13px">Prefix</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="text" class="form-control fs-15px" id="firstname"
                                                name="firstname" placeholder="name@example.com"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="firstname" class="d-flex align-items-center fs-13px">First
                                                Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="text" class="form-control fs-15px" id="lastname"
                                                name="lastname" placeholder="name@example.com"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="lastname" class="d-flex align-items-center fs-13px">Last
                                                Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <select class="form-control fs-15px" id="role" name="role"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important;">
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                            <label for="role" class="d-flex align-items-center fs-13px">User
                                                Role</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="text" class="form-control fs-15px" id="contact" name="contact"
                                                placeholder="name@example.com"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="contact" class="d-flex align-items-center fs-13px">Contact
                                                Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="email" class="form-control fs-15px" id="email" name="email"
                                                placeholder="name@example.com"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="email-address" class="d-flex align-items-center fs-13px">Email
                                                address</label>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="modal-footer" style="border: 0px !important;">
                            <button type="submit" class="btn btn-success" style="margin-top: 15px !important;">Add</button>
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- #modal-dialog-add -->
    <!-- <div class="modal fade" id="modal-dialog-add">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: 0px !important">
                    <h4 class="modal-title">Add Account</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body" style="margin-top: -10px !important;">
                    <form id="addAccountForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center">
                                <img id="previewImage" src="{{ asset('assets/img/user/user-12.jpg') }}" width="200"
                                    height="200" alt="" style="border-radius: 100px; margin-top: 50px;" />
                                <input type="file" name="profile_image" id="profile_image" class="form-control mt-3"
                                    accept="image/*">
                            </div>
                            <div class="col-8 pt-3">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="prefix" name="prefix"
                                                placeholder="Prefix">
                                            <label for="prefix">Prefix</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="firstname" name="firstname"
                                                placeholder="First Name">
                                            <label for="firstname">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="lastname" name="lastname"
                                                placeholder="Last Name">
                                            <label for="lastname">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="role" name="role">
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                            <label for="role">User Role</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="contact" name="contact"
                                                placeholder="Contact Number">
                                            <label for="contact">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email Address">
                                            <label for="email">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                name="password_confirmation" placeholder="Confirm Password">
                                            <label for="password_confirmation">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="border: 0px !important;">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection

@push('scripts')

<script>
function updateSwitchText(id) {

    const $switchInput = $('#customSwitch' + id);
    const $switchText = $('.switch-text' + id);

    if ($switchInput.is(':checked')) {
        $switchText.text('Active');
    } else {
        $switchText.text('Unactive');
    }
}


$('#accounts').addClass('active');
$('#accounts-table').DataTable({
    responsive: true
});

$(document).ready(function() {
    $('#previewImage').on('click', function() {
        $('#profile_image').click();
    });
    $('#profile_image').on('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(event) {
            $('#previewImage').attr('src', event.target.result);
        };
        reader.readAsDataURL(e.target.files[0]);
    });

    $('#addAccountForm').on('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('user.store') }}",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert(response.message);
                $('#modal-dialog-add').modal('hide');
                $('#addAccountForm')[0].reset();
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseJSON.message);
            }
        });
    });
});
</script>
@endpush