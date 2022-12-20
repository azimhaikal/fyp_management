<x-app-layout>

</x-app-layout>
<html>
<head><title>View Project Details</title>
</head>

<body>
    <h1 align=center>View Project Details</h1>
    <table border=1 align=center>
        <tr>
            <td>Project Name</td>
            <td>Start Date</td>
            <td>End Date</td>
            <td>Duration</td>
            <td>Progress</td>
            <td>Status</td>
            <td>Operation</td>
        </tr>
        <tr>
            <td>{{$www['projectname']}}</td>
            <td>{{$www['startdate']}}</td>
            <td>{{$www['enddate']}}</td>
            <td>{{$www['duration']}}</td>
            <td>{{$www['progress']}}</td>
            <td>{{$www['status']}}</td>
            <td><a href={{"/update/".$www['projectname']}}>Update</a></td>
        </tr>
    </table>
    <table border=0>
        <tr>
            <td><a href="/viewsv"><button >View Project SV</button></a></td>
        </tr>
    </table>
</body>
</html>