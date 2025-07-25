<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h1>Student Information</h1>
    <a href="/students" >Back</a>
    <hr>

    <table border = "1">

        <tr>
            <th>ID</th>
            <td>{{ $student->id }}</td>
        </tr>
        <tr>
            <th>Addmission Number</th>
            <td>{{ $student->Admission_no }}</td>
        </tr>
        <tr>
            <th>Student Name</th>
            <td>{{ $student->Student_name }}</td>
        </tr>
        <tr>
            <th>Father Name</th>
            <td>{{ $student->Father_name }}</td>
        </tr>
        <tr>
            <th> Gender </th>
            <td>{{ $student->Gender }}</td>
        </tr>
        <tr>
            <th>Telephone Number</th>
            <td>{{ $student->Telephone_number }}</td>
        </tr>
        <tr>
            <th>NIC Number</th>
            <td>{{ $student->Nic_number }}</td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td>{{ $student->Date_of_birth }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $student->Address }}</td>
        </tr>
        <tr>
            <th>Joint Date</th>
            <td>{{ $student->Joint_date }}</td>
        </tr>
        <tr>



        <tr>
            <th>Created At</th>
            <td>{{ $student->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $student->updated_at }}</td>

        </tr>







</table>
</body>
</html>