@extends('layouts.main')

@push('style-file')
    <style>
        .is-invalid {
            border-color: red;
        }
        .error {
            color: red;
        }
    </style>
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
    <h1 class="page-header">Create Announcement</h1>
    <!-- END page-header -->
    <div class="panel panel-inverse">
        <!-- BEGIN panel-body -->
        <div class="panel-body">
            <form id="announcement-form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-10px">
                            <label class="form-label">Announcement type:</label>
                            <select class="form-select" id="announcement_type" name="announcement_type" required>
                                <option value="public">Public announcement</option>
                                <option value="marriage" selected>Marriage banns</option>
                                <option value="project">Project and financial</option>
                                <option value="mass">Mass schedules</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-10px">
                            <label class="form-label">Marriage bann:</label>
                            <select class="form-select" id="marriage_bann" name="marriage_bann" required>
                                <option value="Unang Tawag">Unang Tawag</option>
                                <option value="Ikaduhang Tawag">Ikaduhang Tawag</option>
                                <option value="Ikatulong Tawag">Ikatulong Tawag</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Other input fields -->
                <div class="row">
                    <div class="col-6">
                        <div class="mb-10px">
                            <label class="form-label">Groom name:</label>
                            <input class="form-control" type="text" id="groom_name" name="groom_name" placeholder="Enter groom's name" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-10px">
                            <label class="form-label">Bride name:</label>
                            <input class="form-control" type="text" id="bride_name" name="bride_name" placeholder="Enter bride's name" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-10px">
                            <label class="form-label">Groom age:</label>
                            <input class="form-control" type="number" id="groom_age" name="groom_age" placeholder="Enter groom's age" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-10px">
                            <label class="form-label">Bride age:</label>
                            <input class="form-control" type="number" id="bride_age" name="bride_age" placeholder="Enter bride's age" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-10px">
                            <label class="form-label">Groom address:</label>
                            <input class="form-control" type="text" id="groom_address" name="groom_address" placeholder="Enter groom's address" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-10px">
                            <label class="form-label">Bride address:</label>
                            <input class="form-control" type="text" id="bride_address" name="bride_address" placeholder="Enter bride's address" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-10px">
                            <label class="form-label">Groom parents' name:</label>
                            <input class="form-control" type="text" id="groom_parents" name="groom_parents" placeholder="Enter groom's parents' names" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-10px">
                            <label class="form-label">Bride parents' name:</label>
                            <input class="form-control" type="text" id="bride_parents" name="bride_parents" placeholder="Enter bride's parents' names" required>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <div class="pagination pagination-sm d-flex justify-content-end mt-3">
                    <button type="button" id="submit-announcement" class="btn btn-sm btn-success me-5px">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
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
    // Validate input fields
    function validateInput(input) {
        if ($(input).val().trim() === "") {
            $(input).addClass('is-invalid');
        } else {
            $(input).removeClass('is-invalid');
        }
    }

    // On input change, remove invalid class
    $('input, select').on('input change', function() {
        validateInput(this);
    });

    // Submit form using AJAX
    $('#submit-announcement').click(function(e) {
        e.preventDefault();

        // Validate inputs
        let isValid = true;
        $('input, select').each(function() {
            validateInput(this);
            if ($(this).hasClass('is-invalid')) {
                isValid = false;
            }
        });

        if (isValid) {
            $.ajax({
                url: "{{ route('marriage.store') }}",
                type: "POST",
                data: $('#announcement-form').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('Announcement created successfully!');
                    location.href = "{{ route('anouncements') }}";
                },
                error: function(xhr) {
                    alert('Error saving the announcement');
                }
            });
        } 
    });
});
</script>
@endpush