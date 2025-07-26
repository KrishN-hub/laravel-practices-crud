<html>
<head>
    <title>Enter student Information</title>
</head>
<body>
    <h1>Enter Student Information</h1>
    <a href="/students" >Back</a>
    <hr>


<form action="/students" method="post" autocomplete="off" novalidate>
    @csrf
    <table>
        {{-- <tr>
            <td><label >ID:</label></td>
            <td><input type="text" name="id" id="id" ></td>
        </tr> --}}

            <td><label >Admission Number:</label></td>
            <td><input type="text" name="Admission_no" id="Admission_no" ></td>
        </tr>
        <tr>
            <td><label >Student Name:</label></td>
            <td><input type="text" name="Student_name" id="Student_name" ></td>
        </tr>
        <tr>
            <td><label >Father Name:</label></td>
            <td><input type="text" name="Father_name" id="Father_name" ></td>
        </tr>
        <tr>
            <td><label >Gender:</label></td>
            <td><input type="text" name="Gender" id="Gender" ></td>
        </tr>
        <tr>
            <td><label >Telephone Number:</label></td>
            <td><input type="text" name="Telephone_number" id="Telephone_number" ></td>
        </tr>
        <tr>
            <td><label >NIC Number:</label></td>
            <td><input type="text" name="Nic_number" id="Nic_number" ></td>
        </tr>
        <tr>
            <td><label >Date of Birth:</label></td>
            <td><input type="date" name="Date_of_birth" id="Date_of_birth" ></td>
        </tr>
        <tr>
            <td><label >Address:</label></td>
            <td><input type="text" name="Address" id="Address" ></td>
        </tr>
        <tr>
            <td><label >Joint Date:</label></td>
            <td><input type="date" name="Joint_date" id="Joint_date" ></td>


        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>



</body>
</html>