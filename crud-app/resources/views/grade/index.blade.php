<html>

<head>
    <title>Grade List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <html>
<head>
    <title>Grade</title>
</head>
<body>
    <h1>Subject List</h1>
    <form action="/grades/create" method="post" style="display:inline;">
        @csrf
        @method('get')
        <button type="submit">Add New </button>
      </form>
    <hr>

<table border ="2">
    <tr>
        <th>Grade Namr</th>
        <th>Grade Color</th>
        <th>Grade Oder No</th>
        <th>Grade Group</th>
        <th colspan="3">Actions</th>

    </tr>

    <tr>
        @foreach ($grades as $grade)
        <tr>
        <td>{{$grade->Grade_name}}</td>
        <td>{{$grade->Grade_color }}</td>
        <td>{{$grade->Grade_odernumber}}</td>
        <td>{{$grade->Grade_group}}</td>



        <td><a href="grades/{{$grade->id}}" >show</a></td>
        <td><a href="grades/{{$grade->id}}/edit" >edit</a></td>
        <td> <form action="/grades/{{$grade->id}}" method="post" style="display:inline;">
            @csrf
            @method('delete')
            <button type="submit" >Delete</button>
          </form>
        </td>
        </tr>
        @endforeach
    </tr>


</table>
</body>
</html>


</html>