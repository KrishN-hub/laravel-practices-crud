<html>
<head>
    <title>Edit Grade Information</title>
</head>
<body>
    <h1>Edit Grade Information</h1>
    <a href="/grades" >Back</a>
    <hr>

    <form action="/grades/{{$grade->id}}" method="post" autocomplete="off" novalidate>
        @csrf
        @method('put')
        <table>
            <tr>
                <td><label>Grade Name:</label></td>
                <td><input type="text" name="Grade_name" id="Grade_name" value="{{$grade->Grade_name}}"></td>
            </tr>
            <tr>
                <td><label>Grade Color:</label></td>
                <td><input type="text" name="Grade_color" id="Grade_color" value="{{$grade->Grade_color}}"></td>
            </tr>
            <tr>
                <td><label>Grade Order Number:</label></td>
                <td><input type="text" name="Grade_ordernumber" id="Grade_ordernumber" value="{{$grade->Grade_ordernumber}}"></td>
            </tr>
            <tr>
                <td><label>Grade Group:</label></td>
                <td><input type="text" name="Grade_group" id="Grade_group" value="{{$grade->Grade_group}}"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>

        </table>

    </form>











</html>
