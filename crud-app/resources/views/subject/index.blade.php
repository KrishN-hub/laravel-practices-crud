<html>

<head>
    <title>Subject List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <html>
<head>
    <title>Subject</title>
</head>
<body>
    <h1>Subject List</h1>
    <form action="/subjects/create" method="post" style="display:inline;">
        @csrf
        @method('get')
        <button type="submit">Add New </button>
      </form>
    <hr>

<table border ="2">
    <tr>
        <th>Subject Name</th>
        <th>Subject Index</th>
        <th>Subject Oder No</th>
        <th>Subject type</th>
        <th colspan="3">Actions</th>

    </tr>

    <tr>
        @foreach ($subjects as $subject)
        <tr>
        <td>{{$subject->Subject_name}}</td>
        <td>{{$subject->Subject_index }}</td>
        <td>{{$subject->Subject_odernumber}}</td>
        <td>{{$subject->Subject_type}}</td>



        <td><a href="subjects/{{$subject->id}}" >show</a></td>
        <td><a href="subjects/{{$subject->id}}/edit" >edit</a></td>
        <td> <form action="/subjects/{{$subject->id}}" method="post" style="display:inline;">
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