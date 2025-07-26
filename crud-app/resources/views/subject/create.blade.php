<html>
<head>
    <title>Edit student Information</title>
</head>
<body>
    <h1>Edit Student Information</h1>
    <a href="/subjects" >Back</a>
    <hr>


<form action="/subjects" method="post" autocomplete="off" novalidate>
    @csrf

    <table>

            <td><label >Subject Name:</label></td>
            <td><input type="text" name="Subject_name" id="Subject_name" ></td>
        </tr>
        <tr>
            <td><label >Sunject Index:</label></td>
            <td><input type="text" name="Subject_index" id="Subject_index" ></td>
        </tr>
        <tr>
            <td><label >Subject Oder Number:</label></td>
            <td><input type="text" name="Subject_odernumber" id="Subject_odernumber" ></td>
        </tr>
        <tr>
            <td><label >Subject Type:</label></td>
            <td><input type="text" name="Subject_type" id="Subject_type" ></td>
        </tr>



        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>



</body>
</html>