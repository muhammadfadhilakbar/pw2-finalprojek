@extends('_layouts.main') 

@section('content')
<!-- ===== Main Content Start ===== -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Digital Tahun Ini</title>
    <style>
      
        .calendar {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .month {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px;
            overflow: hidden;
        }
        .month h3 {
            text-align: center;
            margin: 0;
        }
        .days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
        }
        .day {
            padding: 10px;
            border: 1px solid #0056b3;
            border-radius: 3px;
            background-color: #0056b3;
            margin: 2px;
        }
        .day:nth-child(even) {
            background-color: #0066cc;
        }
    </style>
</head>
<body>


<div class="calendar" id="calendar"></div>

<script>
    const currentYear = new Date().getFullYear();
    const months = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    function createCalendar() {
        const calendarContainer = document.getElementById("calendar");
        
        for (let month = 0; month < 12; month++) {
            const monthDiv = document.createElement("div");
            monthDiv.classList.add("month");
            monthDiv.innerHTML = `<h3>${months[month]}</h3>`;
            
            const daysDiv = document.createElement("div");
            daysDiv.classList.add("days");

            const firstDay = new Date(currentYear, month, 1).getDay();
            const totalDays = new Date(currentYear, month + 1, 0).getDate();

            for (let i = 0; i < firstDay; i++) {
                const emptyDay = document.createElement("div");
                emptyDay.classList.add("day");
                daysDiv.appendChild(emptyDay);
            }

            for (let day = 1; day <= totalDays; day++) {
                const dayDiv = document.createElement("div");
                dayDiv.classList.add("day");
                dayDiv.textContent = day;
                daysDiv.appendChild(dayDiv);
            }

            monthDiv.appendChild(daysDiv);
            calendarContainer.appendChild(monthDiv);
        }
    }

    createCalendar();
</script>

</body>
</html>
<!-- ===== Main Content End ===== -->
@endsection
