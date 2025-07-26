<html>
<head>
    <title>Edit Subject Information</title>
</head>
<body>
    <h1>Edit Subject Information</h1>
    <a href="/subjects" >Back</a>
    <hr>


<form action="/subjects/{{$subject->id}}" method="post" autocomplete="off" novalidate>
    @csrf
    @method('put')
    <table>

            <td><label >Subject Name:</label></td>
            <td><input type="text" name="Subject_name" id="Subject_name"  value ="{{$subject->Subject_name}}" ></td>
        </tr>
        <tr>
            <td><label >Sunject Index:</label></td>
            <td><input type="text" name="Subject_index" id="Subject_index" value ="{{$subject->Subject_index}}" ></td>
        </tr>
        <tr>
            <td><label >Subject Oder Number:</label></td>
            <td><input type="text" name="Subject_odernumber" id="Subject_odernumber"  value ="{{$subject->Subject_odernumber}}" ></td>
        </tr>
        <tr>
            <td><label >Subject Type:</label></td>
            <td><input type="text" name="Subject_type" id="Subject_type"  value ="{{$subject->Subject_type}}" ></td>
        </tr>



        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>



</body>
</html>