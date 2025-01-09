@extends('layouts.main')

@push('style-file')
<!-- Include any required CSS here -->
@endpush

@push('script-file')
<!-- Include any additional JS libraries here if necessary -->
@endpush

@section('content')
<div class="row" style="margin-right: 18px !important; margin-left: 5px !important;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Create Announcement</li>
    </ol>
    
    <h1 class="page-header">Create Announcement <small></small></h1>
    
    <div class="panel panel-inverse">
        <div class="panel-body">
            <form id="announcement-form">
                <div class="row">
                    <div class="col-md-6 mb-10px">
                        <label class="form-label">Announcement type:</label>
                        <select class="form-select" id="announcement_type" name="announcement_type">
                            <option value="public" selected>Public announcement</option>
                            <option value="marriage">Marriage banns</option>
                            <option value="project">Project and financial</option>
                            <option value="mass">Mass schedules</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-10px">
                        <label class="form-label">Title:</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="title...">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Content:</label>
                        <textarea class="form-control content_text" id="content" name="content" rows="3" placeholder="Content..."></textarea>
                    </div>
                </div>
                <div class="pagination pagination-sm d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-sm btn-success me-5px">Save Announcement</button>
                    <a href="javascript:;" class="btn btn-sm btn-danger me-5px">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('#announcements').addClass('active');

    // Change event for announcement type
    $('#announcement_type').change(function() {
        var selectedValue = $(this).val(); // Get the selected value
        
        // Redirect based on the selected value
        switch (selectedValue) {
            case 'public':
                location.href = "{{ route('public_announce') }}";
                break;
            case 'marriage':
                location.href = "{{ route('marriage_bann') }}";
                break;
            case 'project':
                location.href = "{{ route('project_financial') }}";
                break;
            case 'mass':
                location.href = "{{ route('public_announce') }}";
                break;
        }
    });

    // Validate fields on form submit
    $('#announcement-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        $('.error').remove();

        var isValid = true;

        var title = $('#title').val().trim();
        var content = $('.content_text').val();
        var announcementType = $('#announcement_type').val();

        if (title == '') {
            validateInput('#title');
            if ($('#title').hasClass('is-invalid')) {
                isValid = false; // If any input is invalid, set isValid to false
              
            }
        }else if (content == '') {
            validateInput('.content_text');
            if ($('.content_text').hasClass('is-invalid')) {
                isValid = false; // If any input is invalid, set isValid to false
              
            }
        }else if (announcementType == '') {
            validateInput('#announcement_type');
            if ($('#announcement_type').hasClass('is-invalid')) {
                isValid = false; // If any input is invalid, set isValid to false
              
            }
        }
    
        if (isValid) {

            // AJAX request to save the announcement
            $.ajax({
                url: "{{ route('save_announcement') }}", // Adjust this route according to your Laravel routes
                type: 'POST',
                data: {
                    title: title,
                    content: content,
                    announcement_type: announcementType,
                    _token: '{{ csrf_token() }}' // CSRF token for security
                },
                success: function(response) {

                    alert('Announcement saved successfully!');
                    location.href = "{{ route('anouncements') }}";
                },
                error: function(xhr) {
                    // Handle error response
                    alert('An error occurred while saving the announcement.');
                    console.error('Error response:', xhr.responseText);
                    console.error('Status:', xhr.status);
                    console.error('Status Text:', xhr.statusText);
                }
            });
        }
    });

    // Validate on field blur (optional for immediate validation)
    $('#title, #content').on('blur', function() {
        validateInput(this);
    });

    // Remove 'is-invalid' class when the user starts typing
    $('#title, #content').on('input', function() {
        $(this).removeClass('is-invalid'); // Remove invalid class
        $(this).closest('.form-group').find('.invalid-feedback').hide(); // Hide error message
    });

    // Function to validate input
    function validateInput(input) {
        if ($(input).val().trim() === "") {
            $(input).addClass('is-invalid'); // Add invalid class
            $(input).closest('.form-group').find('.invalid-feedback').show(); // Show feedback message
        } else {
            $(input).removeClass('is-invalid');
            $(input).closest('.form-group').find('.invalid-feedback').hide();
        }
    }

</script>
@endpush
