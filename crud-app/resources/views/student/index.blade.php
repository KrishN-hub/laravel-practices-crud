<html>

<head>
    <title>Student List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <html>
<head>
    <title>Student</title>
</head>
<body>
    <h1>Student List</h1>
    <form action="/students/create" method="post" style="display:inline;">
        @csrf
        @method('get')
        <button type="submit">Add New </button>
      </form>
    <hr>

<table border ="2">
    <tr>
        <th>Id</th>
        <th>Addmission Number</th>
        <th>Student Name</th>
        <th>Father Name</th>
        <th>Gender</th>
        <th>Telephone Number</th>
        <th>NIC Number</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Joint Date</th>
        {{-- <th>Created At</th>
        <th>Updated At</th> --}}
        <th colspan="3">Actions</th>

    </tr>

    <tr>
        @foreach ($students as $student)
        <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->Admission_no}}</td>
        <td>{{$student->Student_name}}</td>
        <td>{{$student->Father_name}}</td>
        <td>{{$student->Gender}}</td>
        <td>{{$student->Telephone_number}}</td>
        <td>{{$student->Nic_number}}</td>
        <td>{{$student->Date_of_birth}}</td>
        <td>{{$student->Address}}</td>
        <td>{{$student->Joint_date}}</td>

        {{-- <td>{{$student->created_at}}</td>
        <td>{{$student->updated_at}}</td> --}}
        <td><a href="students/{{$student->id}}" >show</a></td>
        <td><a href="students/{{$student->id}}/edit" >edit</a></td>
        <td> <form action="/students/{{$student->id}}" method="post" style="display:inline;">
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