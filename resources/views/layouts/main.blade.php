<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dumala</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/facebook/app.min.css') }}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

    <!-- ================== BEGIN page-css ================== -->
    <link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" />
    <!-- ================== END page-css ================== -->
    @stack('style-file')

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.canvaswrapper.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.colorhelpers.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.saturated.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.browser.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.drawSeries.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.uiConstants.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.navigate.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.touchNavigate.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.hover.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.touch.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.symbol.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/source/jquery.flot.legend.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap-content/world-mill.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/dashboard.js') }}"></script>

    <!-- ================== END page-js ================== -->


    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('assets/plugins/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/@fullcalendar/core/index.global.js') }}"></script>
    <script src="{{ asset('assets/plugins/@fullcalendar/daygrid/index.global.js') }}"></script>
    <script src="{{ asset('assets/plugins/@fullcalendar/timegrid/index.global.js') }}"></script>
    <script src="{{ asset('assets/plugins/@fullcalendar/interaction/index.global.js') }}"></script>
    <script src="{{ asset('assets/plugins/@fullcalendar/list/index.global.js') }}"></script>
    <script src="{{ asset('assets/plugins/@fullcalendar/bootstrap/index.global.js') }}"></script>


    <script src="{{ asset('assets/plugins/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/render.highlight.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>


    <script>
    function message(params) {
        if (params.icon == 'success') {
            $('#successToast').fadeIn(700).removeClass('hide').addClass('show');
            $('.successToast').html(params.message);
            setTimeout(() => {

                $('#successToast').fadeOut(700, function() {
                    $(this).removeClass('show').addClass('hide');
                });
            }, 2000);
        } else if (params.icon == 'warning') {
            $('#warningToast').fadeIn(700).removeClass('hide').addClass('show');
            $('.warningToast').html(params.message);
            setTimeout(() => {

                $('#warningToast').fadeOut(700, function() {
                    $(this).removeClass('show').addClass('hide');
                });
            }, 2000);
        } else {
            $('#errorToast').fadeIn(700).removeClass('hide').addClass('show');
            $('.errorToast').html(params.message);
            setTimeout(() => {
                $('#errorToast').fadeOut(700, function() {
                    $(this).removeClass('show').addClass('hide');
                });
            }, 2000);
        }
    }
    </script>
    @stack('script-file')
    <!-- ================== END page-js ================== -->
</head>

<body class="pace-done theme-green">
    <!-- BEGIN #loader -->
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <!-- END #loader -->

    <!-- BEGIN #app -->
    <div id="app" class="app app-header-fixed app-sidebar-fixed app-content-full-height">

        <!-- BEGIN #header -->

        @include('layouts.header')

        <!-- END #header -->

        <!-- BEGIN #sidebar -->

        @include('layouts.sidebar')

        <!-- END #sidebar -->

        <!-- BEGIN #content -->
        <div id="content" class="app-content d-flex flex-column p-0">

            @yield('content')


            <!-- @include('layouts.footer') -->
        </div>

        <!-- END #content -->

        <!-- BEGIN scroll-top-btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top"
            data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- END scroll-top-btn -->
    </div>
    <div class="toast-container">

        <!-- Success Toast -->
        <div id="successToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header" style="background-color: #e6f9ea;">
                <div class="rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"
                    style="background-color: #28a745;">
                    <i class="fa fa-check-circle"></i>
                </div>
                <strong class="me-auto ms-2">Success</strong>

                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body successToast" style="background-color: #e6f9ea;">
                Your action was successful!
            </div>
        </div>

        <!-- Warning Toast -->
        <div id="warningToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header" style="background-color: #fff7e6;">
                <div class="rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"
                    style="background-color: #ffc107;">
                    <i class="fa fa-exclamation-triangle"></i>
                </div>
                <strong class="me-auto ms-2">Warning</strong>

                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body warningToast" style="background-color: #fff7e6;">
                Please be cautious with this action!
            </div>
        </div>

        <!-- Error Toast -->
        <div id="errorToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header" style="background-color: #fcebea;">
                <div class="rounded w-25px h-25px d-flex align-items-center justify-content-center text-white"
                    style="background-color: #dc3545;">
                    <i class="fa fa-times-circle"></i>
                </div>
                <strong class="me-auto ms-2">Error</strong>

                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body errorToast" style="background-color: #fcebea;">
                Something went wrong. Please try again!
            </div>
        </div>

    </div>



    <!-- #modal-dialog -->
    <div class="modal fade" id="modal-dialog-changepass">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change password</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label" for="old_password">Old password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="old_password" name="old_password"
                                placeholder="Old Password">
                            <div class="input-group-text">
                                <i class="fa fa-eye" onclick="changeEye('old_password', this)"></i>
                            </div>
                            <div class="invalid-feedback old_password_feed_back"></div>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="new_password">New password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="new_password" name="new_password"
                                placeholder="New Password">
                            <div class="input-group-text">
                                <i class="fa fa-eye" onclick="changeEye('new_password', this)"></i>
                            </div>
                            <div class="invalid-feedback new_password_feed_back"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="confirm_pass">Confirm password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" id="confirm_pass" name="confirm_pass"
                                placeholder="Confirm Password">
                            <div class="input-group-text">
                                <i class="fa fa-eye" onclick="changeEye('confirm_pass', this)"></i>
                            </div>
                            <div class="invalid-feedback confirm_pass_feed_back"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                    <a href="javascript:;" class="btn btn-success" id="change-password-btn">Save Changes</a>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="modal-dialog-edit-profile">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: 0px !important">
                    <h4 class="modal-title">Edit Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body" style="margin-top: -10px !important;">
                    <form id="editAccountFormProfilev1" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center">
                                <img id="editProfileImageProfile" src="{{ asset('assets/img/user/user-12.jpg') }}"
                                    width="200" height="200" alt="Profile Image" style="border-radius: 100px;" />
                                <input type="file" name="profile_image" id="editProfileImageProfileInput"
                                    class="form-control" accept="image/*" style="display: none;" />
                            </div>
                            <div class="col-8 pt-3">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="text" class="form-control fs-15px" id="editPrefixProfile"
                                                name="prefix" placeholder="Prefix"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="editPrefixProfile"
                                                class="d-flex align-items-center fs-13px">Prefix</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="text" class="form-control fs-15px" id="editFirstnameProfile"
                                                name="firstname" placeholder="First Name"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="editFirstnameProfile" class="d-flex align-items-center fs-13px">First
                                                Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="text" class="form-control fs-15px" id="editLastnameProfile"
                                                name="lastname" placeholder="Last Name"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="editLastnameProfile" class="d-flex align-items-center fs-13px">Last
                                                Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <select class="form-control fs-15px" id="editRoleProfile" name="role"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important;">
                                                <option value="admin">Admin</option>
                                                <option value="parish_priest">Parish priest</option>
                                                <option value="secretary">Secretary</option>
                                                <option value="priest">Priest</option>
                                                <option value="parishioners">Parishioners</option>
                                                <option value="non_parishioners">Non-parishioners</option>
                                            </select>
                                            <label for="editRoleProfile" class="d-flex align-items-center fs-13px">User
                                                Role</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="text" class="form-control fs-15px" id="editContactProfile"
                                                name="contact" placeholder="Contact Number"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="editContactProfile" class="d-flex align-items-center fs-13px">Contact
                                                Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-0 mb-md-0">
                                            <input type="email" class="form-control fs-15px" id="editEmailProfile" name="email"
                                                placeholder="Email"
                                                style="border-bottom: 1px solid gray !important; border-top: 0px !important; border-right: 0px !important; border-left: 0px !important; border-radius: 0px !important; ">
                                            <label for="editEmailProfile" class="d-flex align-items-center fs-13px">Email
                                                Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer" style="border: 0px !important;">
                            <button type="submit" class="btn btn-primary" style="margin-top: 15px !important;">Save
                                Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
    $('#change-password-btn').on('click', function() {
        // Get values from the input fields
        var oldPassword = $('#old_password').val();
        var newPassword = $('#new_password').val();
        var confirmPassword = $('#confirm_pass').val();

        // Validation
        if (oldPassword === "") {
            $('#new_password').removeClass('is-invalid');
            $('#confirm_pass').removeClass('is-invalid');
            $('#old_password').addClass('is-invalid');
            $('.old_password_feed_back').html('*Old password fields are required!');


            return;
        }
        if (newPassword === "") {
            $('#old_password').removeClass('is-invalid');
            $('#confirm_pass').removeClass('is-invalid');
            $('#new_password').addClass('is-invalid');
            $('.new_password_feed_back').html('*Old password fields are required!');

            return;
        }
        if (confirmPassword === "") {
            $('#new_password').removeClass('is-invalid');
            $('#old_password').removeClass('is-invalid');
            $('#confirm_pass').addClass('is-invalid');
            $('.confirm_pass_feed_back').html('*Old password fields are required!');

            return;
        }



        if (newPassword !== confirmPassword) {

            $('#new_password').addClass('is-invalid');
            $('.new_password_feed_back').html('*New password and Confirm password do not match!');

            $('#confirm_pass').val('');
            return;
        }

        $('#new_password').removeClass('is-invalid');
        $('#old_password').removeClass('is-invalid');
        $('#confirm_pass').removeClass('is-invalid');

        // Send data via AJAX
        $.ajax({
            url: '/change-password', // Replace with the URL of your password change endpoint
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), // Include CSRF token for security
                old_password: oldPassword,
                new_password: newPassword,
                confirm_pass: confirmPassword
            },
            success: function(response) {

                if (response.success) {
                    $('#modal-dialog-changepass').modal('hide');
                    message({
                        title: 'Success!',
                        message: response.message,
                        icon: 'success'
                    });
                } else {
                    if (response.status == '1') {
                        $('#old_password').addClass('is-invalid');
                        $('.old_password_feed_back').html('*' + response.message);
                    } else {
                        $('#new_password').addClass('is-invalid');
                        $('.new_password_feed_back').html(
                            '*New password and Confirm password do not match!');
                    }
                }

                console.log('response ::', response);


            },
            error: function(xhr, status, error) {
                console.error("An error occurred: ", error);
                alert("Something went wrong. Please try again later.");
            }
        });
    });

    function changeEye(inputId, icon) {
        // Get the password input field
        const input = document.getElementById(inputId);

        // Toggle the input type between 'password' and 'text'
        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = "password";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }

    $('#editProfileImageProfile').on('click', function() {
        $('#editProfileImageProfileInput').click();
    });

    $('#editProfileImageProfileInput').on('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(event) {
            $('#editProfileImageProfile').attr('src', event.target.result);
        };
        reader.readAsDataURL(e.target.files[0]);
    });

    function openEditModalv(userId) {
        console.log(userId);
        
        $.ajax({
            url: `/user/${userId}/edit`, // Replace with your URL
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Populate modal fields with user data
                $('#editPrefixProfile').val(response.data.prefix);
                $('#editFirstnameProfile').val(response.data.firstname);
                $('#editLastnameProfile').val(response.data.lastname);
                $('#editRoleProfile').val(response.data.role);
                $('#editContactProfile').val(response.data.contact);
                $('#editEmailProfile').val(response.data.email);
                $('#editProfileImageProfile').attr('src', response.data.profile_image ||
                    '/assets/img/user/user-12.jpg');

                // Store the user ID in a hidden field for form submission
                $('#editAccountFormProfilev1').data('userId', userId);

                // Show the modal
                $('#modal-dialog-edit-profile').modal('show');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching user data:', error);
            }
        });
    }

    $('#editAccountFormProfilev1').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        const userId = $(this).data('userId');
        const formData = new FormData(this);

        $.ajax({
            url: `/user/${userId}/update`, // Replace with your update URL
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#modal-dialog-edit-profile').modal('hide');
                    message({
                        title: 'Success!',
                        message: 'Account updated successfully!',
                        icon: 'success'
                    });

                    getList(null);
                    
                } else {
                    message({
                        title: 'Error!',
                        message: 'Failed to update account.',
                        icon: 'error'
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error updating user:', error);
            }
        });
    });
    </script>
    <!-- END #app -->
    @stack('scripts')
</body>

</html>