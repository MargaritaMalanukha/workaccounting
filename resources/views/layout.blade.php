<html>
<head>
    <title>WorkAccounting</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/main.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/dashboard.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/normalize.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/subdivisions.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/timesheets.css") }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="/timesheets"><img src='{{ asset("img/document.svg") }}'><p>Табелі</p></a></li>
            <li><a href="/subdivisions"><img src='{{ asset("img/business.svg") }}'><p>Підрозділи</p></a></li>
            <li><a href="/employees"><img src='{{ asset("img/profile.svg") }}'><p>Робітники</p></a></li>
            <li><a href="/hospitals"><img src='{{ asset("img/Vector.svg") }}'><p>Лікарняні</p></a></li>
            <li><a href="/businesstrips"><img src='{{ asset("img/hospital-svgrepo-com.svg") }}'><p>Відрядження</p></a></li>
            <li><a href="/vacations"><img src='{{ asset("img/holiday-svgrepo-com.svg") }}'><p>Відпустки</p></a></li>
            <li><a href="/absents"><img src='{{ asset("img/calendar.svg") }}'><p>Прогули</p></a></li>
            <li><a href="/logout"><img src='{{ asset("img/logout.svg") }}'><p>Вихід</p></a></li>
        </ul>
    </div>
    @yield('content')
</body>
</html>
