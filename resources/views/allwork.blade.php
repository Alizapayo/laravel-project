<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Schedule</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            padding: 0;
            margin: 0;
        }

        #calendar-container {
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .employee-header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            border-bottom: 1px solid #e9ecef;
            margin-bottom: 10px;
        }

        .employee-header img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            object-fit: cover;
            margin-right: 10px;
        }

        .employee-header .employee-name {
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        .employee-header .employee-info {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .employee-header .employee-info span {
            background-color: #007bff;
            color: #fff;
            font-size: 12px;
            border-radius: 12px;
            padding: 5px 10px;
            margin-left: 5px;
        }

        .fc .fc-toolbar-title {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
        }

        .fc-toolbar.fc-header-toolbar {
            margin-bottom: 20px;
        }

        .fc .fc-button-primary {
            background-color: #007bff;
            border: none;
            font-size: 14px;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .fc .fc-button-primary:hover {
            background-color: #0056b3;
        }

        .fc-timegrid-slot {
            background-color: #f8f9fa;
        }

        .fc-daygrid-event, .fc-timegrid-event {
            background-color: #66b2ff;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 5px 10px;
            font-size: 0.9em;
            text-align: left;
        }

        .fc-day-today {
            background-color: #e2e6ea;
        }

        .fc-event-time {
            font-size: 0.8em;
        }

        .fc-event-title {
            font-size: 1em;
            font-weight: bold;
        }

        .fc-nonbusiness {
            background-color: rgba(200, 200, 200, 0.2);
        }
    </style>
</head>
<body>
    <div id="calendar-container">
        <!-- Employee Header -->
        <div class="employee-header">
            <div class="employee-info">
                <img src="path/to/image1.jpg" alt="Employee 1">
                <span class="employee-name">Aliza</span>
            </div>
        </div>

        <!-- Calendar -->
        <div id="calendar"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                businessHours: {
                    daysOfWeek: [1, 2, 3, 4, 5], // Monday - Friday
                    startTime: '09:00',
                    endTime: '18:00',
                },
                events: [
                    {
                        title: 'Sample Service',
                        start: '2024-09-02T09:00:00',
                        end: '2024-09-02T10:00:00',
                        color: '#66b2ff'
                    },
                    {
                        title: 'Example Holiday',
                        start: '2024-09-07',
                        end: '2024-09-08',
                        display: 'background',
                        color: '#c4c4c4'
                    }
                ],
                editable: true,
                droppable: true
            });

            calendar.render();
        });
    </script>
</body>
</html>
