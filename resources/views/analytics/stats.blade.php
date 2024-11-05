<!-- resources/views/analytics/stats.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Statistics</title>
</head>
<body>
    <h1>User Statistics</h1>

    <div>
        <h2>Today's Users: {{ $todayUserCount }}</h2>
        <h2>Total Users: {{ $totalUserCount }}</h2>
    </div>
</body>
</html>