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
            <div id="external-events" class="fc-event-list">
                <h5 class="mb-3">List own schedules</h5>
                <div class="fc-event" data-color="#00acac">
                    <div class="fc-event-text">Meeting with Client</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-success"></i></div>
                </div>
                <div class="fc-event" data-color="#348fe2">
                    <div class="fc-event-text">IOS App Development</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-blue"></i></div>
                </div>
                <div class="fc-event" data-color="#f59c1a">
                    <div class="fc-event-text">Group Discussion</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-warning"></i></div>
                </div>
                <div class="fc-event" data-color="#ff5b57">
                    <div class="fc-event-text">New System Briefing</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-danger"></i></div>
                </div>
                <div class="fc-event">
                    <div class="fc-event-text">Brainstorming</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-dark"></i></div>
                </div>
                <hr class="my-3" />
                <h5 class="mb-3">List mass schedules</h5>
                <div class="fc-event" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 1</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
                <div class="fc-event" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 2</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
                <div class="fc-event" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 3</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
                <div class="fc-event" data-color="#b6c2c9">
                    <div class="fc-event-text">Other Event 4</div>
                    <div class="fc-event-icon"><i class="fas fa-circle fa-fw fs-9px text-gray-500"></i></div>
                </div>
                <div class="fc-event" data-color="#b6c2c9">
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
                                <div class="input-group date" id="datepicker-disabled-past"
                                    data-date-format="yyyy-m-d" data-date-start-date="Date.default">
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
                                <input class="form-control form-control-sm" type="text" placeholder="venue..." />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address:</label>
                                <input class="form-control form-control-sm" type="text" placeholder="address..." />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Purpose:</label>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="baptism">
                                    <label class="form-check-label" for="baptism">
                                        Baptism
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="wedding1">
                                    <label class="form-check-label" for="wedding1">
                                        Wedding
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="funeral">
                                    <label class="form-check-label" for="funeral">
                                        Funeral
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="confirm1">
                                    <label class="form-check-label" for="confirm1">
                                        Confirmation
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="personal1">
                                    <label class="form-check-label" for="personal1">
                                        Personal
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="others1">
                                    <label class="form-check-label" for="others1">
                                        Others
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">If others, please specify:</label>
                                <input class="form-control form-control-sm" type="text"
                                    placeholder="if others, please specify..." />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white btn-xs" data-bs-dismiss="modal">Close</a>
                    <a href="javascript:;" class="btn btn-primary btn-xs">Action</a>
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
                            <input type="text" class="form-control form-control-sm" placeholder="Select Date" />
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
                        <select class="form-select">
                            <option value="" selected>Choose a priest</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-white btn-xs" data-bs-dismiss="modal">Close</a>
                    <a href="javascript:;" class="btn btn-success btn-xs">Action</a>
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

var handleCalendarDemo = function() {
    // external events
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

    // fullcalendar

    var d = new Date();
    var month = d.getMonth() + 1;
    month = (month < 10) ? '0' + month : month;
    var year = d.getFullYear();
    var day = d.getDate();
    var today = moment().startOf('day');
    var calendarElm = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarElm, {
        headerToolbar: {
            left: 'dayGridMonth,timeGridWeek,timeGridDay',
            center: 'title',
            right: 'prev,next today'
        },
        buttonText: {
            today: 'Today',
            month: 'Month',
            week: 'Week',
            day: 'Day'
        },
        initialView: 'dayGridMonth',
        editable: true,
        droppable: true,
        themeSystem: 'bootstrap',
        events: [{
            title: 'Trip to London',
            start: year + '-' + month + '-01',
            end: year + '-' + month + '-05',
            color: app.color.success
        }, {
            title: 'Meet with Irene Wong',
            start: year + '-' + month + '-02T06:00:00',
            color: app.color.blue
        }, {
            title: 'Mobile Apps Brainstorming',
            start: year + '-' + month + '-10',
            end: year + '-' + month + '-12',
            color: app.color.pink
        }, {
            title: 'Stonehenge, Windsor Castle, Oxford',
            start: year + '-' + month + '-05T08:45:00',
            end: year + '-' + month + '-06T18:00',
            color: app.color.indigo
        }, {
            title: 'Paris Trip',
            start: year + '-' + month + '-12',
            end: year + '-' + month + '-16'
        }, {
            title: 'Domain name due',
            start: year + '-' + month + '-15',
            color: app.color.blue
        }, {
            title: 'Cambridge Trip',
            start: year + '-' + month + '-19'
        }, {
            title: 'Visit Apple Company',
            start: year + '-' + month + '-22T05:00:00',
            color: app.color.success
        }, {
            title: 'Exercise Class',
            start: year + '-' + month + '-22T07:30:00',
            color: app.color.orange
        }, {
            title: 'Live Recording',
            start: year + '-' + month + '-22T03:00:00',
            color: app.color.blue
        }, {
            title: 'Announcement',
            start: year + '-' + month + '-22T15:00:00',
            color: app.color.red
        }, {
            title: 'Dinner',
            start: year + '-' + month + '-22T18:00:00'
        }, {
            title: 'New Android App Discussion',
            start: year + '-' + month + '-25T08:00:00',
            end: year + '-' + month + '-25T10:00:00',
            color: app.color.red
        }, {
            title: 'Marketing Plan Presentation',
            start: year + '-' + month + '-25T12:00:00',
            end: year + '-' + month + '-25T14:00:00',
            color: app.color.blue
        }, {
            title: 'Chase due',
            start: year + '-' + month + '-26T12:00:00',
            color: app.color.orange
        }, {
            title: 'Heartguard',
            start: year + '-' + month + '-26T08:00:00',
            color: app.color.orange
        }, {
            title: 'Lunch with Richard',
            start: year + '-' + month + '-28T14:00:00',
            color: app.color.blue
        }, {
            title: 'Web Hosting due',
            start: year + '-' + month + '-30',
            color: app.color.blue
        }]
    });

    calendar.render();

    console.log('eventEl ::', calendar);

};

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
    todayHighlight: true
});

$("#timepicker-from").timepicker();
$("#timepicker-to").timepicker();
$("#timepicker-mass-from").timepicker();
$("#timepicker-mass-to").timepicker();
</script>
@endpush