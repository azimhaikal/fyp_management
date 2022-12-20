<x-app-layout>

</x-app-layout>
<html>
<head><title>View Project</title>
</head>

<body>
    <h1 align=center>View Project</h1>
    <table border=1 align=center>
        <tr>
            <td>Project Name</td>
            <td>Student</td>
            <td>Supervisor</td>
            <td>Examiner 1</td>
            <td>Examiner 2</td>
            <td>Operation</td>
            <td>Operation</td>
        </tr>
        @foreach($www as $data)
        <tr>    
            <td>{{$data['projectname']}}</td>
            <td>{{$data['student']}}</td>
            <td>{{$data['supervisor']}}</td>
            <td>{{$data['examiner1']}}</td>
            <td>{{$data['examiner2']}}</td>
            <td><a href={{"/updateproject/".$data['projectname']}}>Update</a></td>
            <td><a href={{"/deleteproject/".$data['projectname']}}>Delete</a></td>
        </tr>
        @endforeach
    </table>
    <table border=0>
        <tr>
            <td><a href="/create"><button >Create Project</button></a></td>
        </tr>
    </table>
</body>
</html>