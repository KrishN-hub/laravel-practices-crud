<html>
<head>
    <title>Subject Information</title>
</head>
<body>
    <h1>Subject Information</h1>
    <a href="/subjects" >Back</a>
    <hr>

    <table border = "1">

        <tr>
            <th>Subject Name:</th>
            <td>{{ $subject->Subject_name }}</td>
        </tr>
        <tr>
            <th>Subject Index:</th>
            <td>{{ $subject->Subject_index }}</td>
        </tr>
        <tr>
            <th>Subject Oder No:</th>
            <td>{{ $subject->Subject_odernumber }}</td>
        </tr>
        <tr>
            <th>Subject Type:</th>
            <td>{{ $subject->Subject_type }}</td>
        </tr>








</table>
</body>
</html>