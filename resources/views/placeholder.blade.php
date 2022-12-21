<html>
<head><title>View Project SV</title>
</head>

<body>
    <h1 align=center>View Project SV</h1>
    <table border=1 align=center>
        <tr>
            <td>Project Name</td>
            <td>Student</td>
            <td>Supervisor</td>
            <td>Examiner 1</td>
            <td>Examiner 2</td>
            <td>Operation</td>
        </tr>
        @foreach($www as $data)
        <tr>
            <td>{{$data['projectname']}}</td>
            <td>{{$data['student']}}</td>
            <td>{{$data['supervisor']}}</td>
            <td>{{$data['examiner1']}}</td>
            <td>{{$data['examiner2']}}</td>
            <td><a href={{"/details/".$data['projectname']}}>Details</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>