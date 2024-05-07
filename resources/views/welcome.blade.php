<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body class="antialiased">
<table>
    <tr>
        <th>Name</th>
        <td>{{ $data['name'] }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $data['email'] }}</td>
    </tr>
    <tr>
        <th>Phone</th>
        <td>{{ $data['phone'] }}</td>
    </tr>
    <tr>
        <th>Course</th>
        <td>{{ $data['course'] }}</td>
    </tr>
    <tr>
        <th>Age</th>
        <td>{{ $data['age'] }}</td>
    </tr>
    <tr>
        <th>Student Gender</th>
        <td>{{ $data['student_gender'] }}</td>
    </tr>
    <tr>
        <th>Teacher Gender</th>
        <td>{{ $data['teacher_gender'] }}</td>
    </tr>
    <tr>
        <th>Plan</th>
        <td>{{ $data['plan'] }}</td>
    </tr>
    <tr>
        <th>Updated At</th>
        <td>{{ $data['updated_at'] }}</td>
    </tr>
    <tr>
        <th>Created At</th>
        <td>{{ $data['created_at'] }}</td>
    </tr>
    <tr>
        <th>ID</th>
        <td>{{ $data['id'] }}</td>
    </tr>
</table>
</body>
</html>
