@extends('layouts.main')


@push('style-file')

@endpush

@push('script-file')


@endpush

@section('content')
<div class="row" style="margin-right: 18px !important; margin-left: 5px !important;">
    <!-- BEGIN #content -->

    <!-- BEGIN breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Schedules</li>
    </ol>
    <!-- END breadcrumb -->
    <!-- BEGIN page-header -->
    <h1 class="page-header">Schedules <small><a href="#modal-create-own-sched" data-bs-toggle="modal"
                class="btn btn-primary btn-sm me-1 mb-1">Create own
                schedule</a> <a href="#modal-create-mass-sched" class="btn btn-success btn-sm me-1 mb-1"
                data-bs-toggle="modal">Create mass
                schedule</a></small></h1>
    <!-- END page-header -->
    <hr />
    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN event-list -->
        <div class="d-none d-lg-block" style="width: 215px">
            <div id="external-events" class="fc-event-list " style="display: none">
                <h5 class="mb-3">List own schedules</h5>
                <div class="fc-event" data-sched_id="1" data-color="#00acac">
                    <div class="fc-event-text">Meeting with Client</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-success"></i></div>
                </div>
                <div class="fc-event" data-sched_id="2" data-color="#348fe2">
                    <div class="fc-event-text">IOS App Development</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-blue"></i></div>
                </div>
                <div class="fc-event" data-sched_id="3" data-color="#f59c1a">
                    <div class="fc-event-text">Group Discussion</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-warning"></i></div>
                </div>
                <div class="fc-event" data-sched_id="4" data-color="#ff5b57">
                    <div class="fc-event-text">New System Briefing</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-danger"></i></div>
                </div>
                <hr class="my-3" />
                <h5 class="mb-3">List mass schedules</h5>
                <div class="fc-event" data-sched_id="5" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 1</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
                <div class="fc-event" data-sched_id="6" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 2</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
                <div class="fc-event" data-sched_id="7" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 3</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
                <div class="fc-event" data-sched_id="8" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 4</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
                <div class="fc-event" data-sched_id="9" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 5</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
            </div>
        </div>
        <!-- END event-list -->
        <div class="col-lg">
            <!-- BEGIN calendar -->
            <div id="calendar" class="calendar"></div>
            <!-- END calendar -->
        </div>
    </div>
    <!-- END row -->

    <!-- END #content -->
    <div class="modal fade" id="modal-create-own-sched">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create own schedule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-5">
                            <h6 class="mb-3 mt-3">Enter Date</h6>
                            <hr>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Date</label>
                                <div class="input-group date" id="datepicker-disabled-past" data-date-format="yyyy-m-d"
                                    data-date-start-date="Date.default">
                                    <input type="text" class="form-control form-control-sm" placeholder="Select Date" />
                                    <span class="input-group-text input-group-addon"><i
                                            class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <h6 class="mb-3">Enter Time</h6>
                            <hr>
                            <div class="mb-3">
                                <label class="form-label">From</label>
                                <div class="input-group bootstrap-timepicker">
                                    <input id="timepicker-from" type="text" class="form-control form-control-sm" />
                                    <span class="input-group-text input-group-addon"><i class="fa fa-clock"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">To</label>
                                <div class="input-group bootstrap-timepicker">
                                    <input id="timepicker-to" type="text" class="form-control form-control-sm" />
                                    <span class="input-group-text input-group-addon"><i class="fa fa-clock"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-7">
                            <div class="mb-3">
                                <label class="form-label">Venue:</label>
                                <input class="form-control form-control-sm venue" id="venue" type="text"
                                    placeholder="venue..." />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address:</label>
                                <input class="form-control form-control-sm address" id="address" type="text"
                                    placeholder="address..." />
                            </div>
                            <div class="mb-3">
                                <label class="form-label purpose-label">Purpose:</label>
                                @foreach(get_all_liturgical() as $priest)

                                @if($priest->id != 1)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        data-val="{{$priest->title}}" data-id="{{$priest->id}}">
                                    <label class="form-check-label" for="{{$priest->title}}">
                                        {{$priest->title}}
                                    </label>
                                </div>
                                @endif


                                @endforeach

                            </div>
                            <div class="mb-3">
                                <label class="form-label">If others, please specify:</label>
                                <input class="form-control form-control-sm others" type="text" placeholder="If others, please specify..." disabled />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white btn-xs" data-bs-dismiss="modal">Close</a>
                    <a href="javascript:;" class="btn btn-primary btn-xs" id="save-schedule">Action</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-create-mass-sched">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create mass schedule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Date</label>
                        <div class="input-group date" id="datepicker-mass" data-date-format="yyyy-m-d"
                            data-date-start-date="Date.default">
                            <input type="text" class="form-control form-control-sm" id="datepicker-mass-input"
                                placeholder="Select Date" />
                            <span class="input-group-text input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">From</label>
                                <div class="input-group bootstrap-timepicker">
                                    <input id="timepicker-mass-from" type="text" class="form-control form-control-sm" />
                                    <span class="input-group-text input-group-addon"><i class="fa fa-clock"></i></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="form-label">To</label>
                                <div class="input-group bootstrap-timepicker">
                                    <input id="timepicker-mass-to" type="text" class="form-control form-control-sm" />
                                    <span class="input-group-text input-group-addon"><i class="fa fa-clock"></i></span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Assign a priest:</label>
                        <select class="form-select" id="priest-select">
                            <option value="" selected>Choose a priest</option>
                            @foreach(get_all_priest() as $priest)

                            <option value="{{ $priest->id }}">{{ $priest->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white btn-xs" data-bs-dismiss="modal">Close</a>
                    <a href="javascript:;" class="btn btn-success btn-xs" id="save-event-btn">Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END page-header -->
</div>


<!-- END row -->
@endsection

@push('scripts')

<script>
$('#schedules').addClass('active');
$(document).ready(function () {
        $("input[type='radio'][name='flexRadioDefault']").on("change", function () {
            let selectedValue = $(this).data("val"); // Get the selected radio value

            if (selectedValue.toLowerCase() === "others") {
                $(".others").prop("disabled", false).focus(); // Enable input field
            } else {
                $(".others").prop("disabled", true).val(""); // Disable and clear input field
            }
        });
    });
    $(document).on('click', '#save-schedule', function() {
    let isValid = true; // Track overall form validity
    $('.error-message').remove(); // Remove previous error messages
    $('.form-control, .form-check-input').removeClass('is-invalid');
    $('.form-label.purpose-label').removeClass('text-danger'); // Reset Purpose label

    const dateInput = $('#datepicker-disabled-past input');
    const dateValue = dateInput.val().trim();

    if (dateValue === '') {
        isValid = false;
        dateInput.addClass('is-invalid'); // Highlight the date field
        // dateInput.after('<div class="text-danger error-message small">Date is required.</div>'); // Show error message
    }

    const data = {
        date: dateValue,
        time_from: $('#timepicker-from').val(),
        time_to: $('#timepicker-to').val(),
        venue: $('.venue').val(),
        address: $('.address').val(),
        purpose: $('input[name="flexRadioDefault"]:checked').attr('data-val'),
        liturgical_id: $('input[name="flexRadioDefault"]:checked').attr('data-id'),
        others: $('.others').val(),
        sched_type: 'own_sched',
        assign_to: '',
        _token: $('meta[name="csrf-token"]').attr('content'),
    };

    if (!isValid) {
        return; // Stop submission if any validation fails
    }

    $.ajax({
        url: '{{ route("schedules.store") }}',
        method: 'POST',
        data: data,
        success: function(response) {
            alert(response.message);
            location.reload(); // Reload the page or update the DOM dynamically
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(field, messages) {
                    let inputField = $('.' + field.replace('_', '-')); // Match class

                    if (field === 'purpose') {
                        $('.purpose-label').addClass('text-danger'); // Add red text to label
                    } else {
                        inputField.addClass('is-invalid'); // Highlight error field
                        inputField.after('<div class="text-danger error-message small">' + messages[0] + '</div>'); // Show error
                    }
                });
            } else {
                alert('An error occurred: ' + xhr.responseText);
            }
        },
    });
});




$('#save-event-btn').on('click', function() {
    var selectedDate = $('#datepicker-mass-input').val();
    var fromTime = $('#timepicker-mass-from').val();
    var toTime = $('#timepicker-mass-to').val();
    var priestId = $('#priest-select').val();

    // Validate data

    // Send data using AJAX
    $.ajax({
        url: '{{ route("schedules.store") }}',
        method: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            liturgical_id: '1',
            date: selectedDate,
            time_from: fromTime,
            time_to: toTime,
            assign_to: priestId,
            sched_type: 'mass_sched',
        },
        success: function(response) {
            alert('Event saved successfully.');
            // Optionally, you can close the modal or reset the form here
            $('#datepicker').val('');
            $('#timepicker-mass-from').val('');
            $('#timepicker-mass-to').val('');
            $('#priest-select').val('');
            // Close modal
            $('[data-bs-dismiss="modal"]').click();
        },
        error: function(xhr, status, error) {
            alert('An error occurred: ' + error);
        }
    });
});

// var handleCalendarDemo = function() {
//     // external events
//     var containerEl = document.getElementById('external-events');
//     var Draggable = FullCalendar.Interaction.Draggable;
//     new Draggable(containerEl, {
//         itemSelector: '.fc-event',
//         eventData: function(eventEl) {

//             return {
//                 title: eventEl.innerText,
//                 color: eventEl.getAttribute('data-color')
//             };
//         }
//     });

//     // fullcalendar

//     var d = new Date();
//     var month = d.getMonth() + 1;
//     month = (month < 10) ? '0' + month : month;
//     var year = d.getFullYear();
//     var day = d.getDate();
//     var today = moment().startOf('day');
//     var calendarElm = document.getElementById('calendar');
//     var calendar = new FullCalendar.Calendar(calendarElm, {
//         headerToolbar: {
//             left: 'dayGridMonth,timeGridWeek,timeGridDay',
//             center: 'title',
//             right: 'prev,next today'
//         },
//         buttonText: {
//             today: 'Today',
//             month: 'Month',
//             week: 'Week',
//             day: 'Day'
//         },
//         initialView: 'dayGridMonth',
//         editable: true,
//         droppable: true,
//         themeSystem: 'bootstrap',
//         events: []
//     });

//     calendar.render();


// };

// Baptism
// Wedding
// Funeral
// Confirmation
// Personal





var handleCalendarDemo = function() {
    var containerEl = document.getElementById('external-events');
    var Draggable = FullCalendar.Interaction.Draggable;
    new Draggable(containerEl, {
        itemSelector: '.fc-event',
        eventData: function(eventEl) {
            return {
                title: eventEl.innerText,
                color: eventEl.getAttribute('data-color')
            };
        }
    });

    var calendarElm = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarElm, {
        headerToolbar: {
            left: 'dayGridMonth,timeGridWeek,timeGridDay',
            center: 'title',
            right: 'prev,next today'
        },
        initialView: 'dayGridMonth',
        editable: true,
        droppable: true,
        themeSystem: 'bootstrap',
        events: getEvets(),
        drop: function(info) {
            saveEvent({
                schedule_id: info.draggedEl.getAttribute('data-sched_id'),
                title: info.draggedEl.innerText,
                start: info.dateStr,
                color: info.draggedEl.getAttribute('data-color')
            });
        },

        eventResize: function(info) {
            console.log('eventResize :', info.event.id);

            // saveEvent({
            //     id: info.event.id, 
            //     title: info.event.title,
            //     start: info.event.start.toISOString(),
            //     end: info.event.end ? info.event.end.toISOString() : null,
            //     color: info.event.backgroundColor
            // });
        },
        eventDrop: function(info) {
            console.log('eventDrop :', info.event.title);
            // saveEvent({
            //     id: info.event.id,
            //     title: info.event.title,
            //     start: info.event.start.toISOString(),
            //     end: info.event.end ? info.event.end.toISOString() : null,
            //     color: info.event.backgroundColor
            // });
        }
    });

    calendar.render();

    function getEvets() {
        let ret = {};
        $.ajax({
            url: '/get-events',
            method: 'GET',
            async: false,
            success: function(data) {

                if (typeof data === 'string') {
                    try {
                        const parsedData = JSON.parse(data);
                        ret = parsedData;
                        console.log("Parsed data:", parsedData);
                    } catch (error) {
                        console.error("JSON parsing error:", error);
                    }
                } else {
                    ret = data;

                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
        return ret;
    }


    function saveEvent(eventData) {

        $.ajax({
            url: '/save-event',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                ...eventData
            },
            success: function(response) {

                console.log(response);

            },
            error: function(xhr) {
                console.error(xhr.responseJSON.error);

            }
        });
    }
};



// var handleCalendarDemo = function() {
//     // external events
//     var containerEl = document.getElementById('external-events');
//     var Draggable = FullCalendar.Interaction.Draggable;
//     new Draggable(containerEl, {
//         itemSelector: '.fc-event',
//         eventData: function(eventEl) {

//             return {
//                 title: eventEl.innerText,
//                 color: eventEl.getAttribute('data-color')
//             };
//         }
//     });

//     // fullcalendar

//     var d = new Date();
//     var month = d.getMonth() + 1;
//     month = (month < 10) ? '0' + month : month;
//     var year = d.getFullYear();
//     var day = d.getDate();
//     var today = moment().startOf('day');
//     var calendarElm = document.getElementById('calendar');
//     var calendar = new FullCalendar.Calendar(calendarElm, {
//         headerToolbar: {
//             left: 'dayGridMonth,timeGridWeek,timeGridDay',
//             center: 'title',
//             right: 'prev,next today'
//         },
//         buttonText: {
//             today: 'Today',
//             month: 'Month',
//             week: 'Week',
//             day: 'Day'
//         },
//         initialView: 'dayGridMonth',
//         editable: true,
//         droppable: true,
//         themeSystem: 'bootstrap',
//         events: getEvets(),
//         drop: function(info) {
//             let pa = {
//             title: 'Trip to London',
//             start: year + '-' + month + '-01',
//             color: app.color.success
//         }
//         console.log('pa', pa);

//             console.log('drop', info);

//             saveEvent({
//                 schedule_id: info.draggedEl.getAttribute('data-sched_id'),
//                 title: info.draggedEl.innerText,
//                 start: info.dateStr,
//                 color: info.draggedEl.getAttribute('data-color')
//             });
//         },
//         eventResize: function(info) {
//             console.log('eventResize');
//             saveEvent({
//                 id: info.event.id,
//                 title: info.event.title,
//                 start: info.event.start.toISOString(),
//                 end: info.event.end ? info.event.end.toISOString() : null,
//                 color: info.event.backgroundColor
//             });
//         },
//         eventDrop: function(info) {
//             console.log('eventDrop');
//             saveEvent({
//                 id: info.event.id,
//                 title: info.event.title,
//                 start: info.event.start.toISOString(),
//                 end: info.event.end ? info.event.end.toISOString() : null,
//                 color: info.event.backgroundColor
//             });
//         }
//     });

//     calendar.render();

//     getEvets();
//     function getEvets() {
//         let ret = {};
//         $.ajax({
//             url: '/get-events',
//             method: 'GET',
//             async: false, // Make the request synchronous
//             success: function(data) {
//                 console.log("Raw data:", data);
//                 // Safely parse only if it's a JSON string
//                 if (typeof data === 'string') {
//                     try {
//                         const parsedData = JSON.parse(data);
//                         console.log("Parsed data:", parsedData);
//                     } catch (error) {
//                         console.error("JSON parsing error:", error);
//                     }
//                 } else {
//                     ret = data;
//                     console.log("Data is already an object:", data);
//                 }
//             },
//             error: function(xhr) {
//                 console.error(xhr.responseText);
//             }
//         });
//         return ret; // This will now contain the correct value
//     }


//     function saveEvent(eventData) {

//         $.ajax({
//             url: '/save-event',
//             method: 'POST',
//             data: {
//                 _token: $('meta[name="csrf-token"]').attr('content'),
//                 ...eventData
//             },
//             success: function(response) {
//                 // alert(response.message);
//                 console.log(response);

//             },
//             error: function(xhr) {
//                 console.error(xhr.responseJSON.error);

//             }
//         });
//     }

//     console.log('eventEl ::', calendar);

// };

var Calendar = function() {
    "use strict";
    return {
        //main function
        init: function() {
            handleCalendarDemo();
        }
    };
}();

$(document).ready(function() {
    Calendar.init();
});

$("#datepicker-disabled-past").datepicker({
    todayHighlight: true
});

$("#datepicker-mass").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
});

$("#timepicker-from").timepicker();
$("#timepicker-to").timepicker();
$("#timepicker-mass-from").timepicker();
$("#timepicker-mass-to").timepicker();
</script>
@endpush