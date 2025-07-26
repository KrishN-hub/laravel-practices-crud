<html>
<head>
    <title>Grade Information</title>
</head>
<body>
    <h1>Grade Information</h1>
    <a href="/grades">Back</a>
    <hr>

    <table border="1">
        <tr>
            <th>Grade Name:</th>
            <td>{{ $grade->Grade_name }}</td>
        </tr>
        <tr>
            <th>Grade Color:</th>
            <td>{{ $grade->Grade_color }}</td>
        </tr>
        <tr>
            <th>Grade Order No:</th>
            <td>{{ $grade->Grade_ordernumber }}</td>
        </tr>
        <tr>
            <th>Grade Group:</th>
            <td>{{ $grade->Grade_group }}</td>
        </tr>

    </table>
</html>