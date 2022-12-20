<x-app-layout>

</x-app-layout>
<html>
<head>
    <title>Update Project Details</title>
</head>
<body>
    <h1 align=center>Update Project Details</h1>

    <h3 align=center>{{$www['projectname']}}</h3>
    <table border=0 align=center>
        <form action="/edit" method="POST"> <!-- action is url, so url go to route -->
            @csrf
            <tr>
                <td>Start Date:</td>
                <td><input type=date name="startdate" value="{{$www['startdate']}}"></td>
            </tr>

            <tr>
                <td>End Date:</td>
            <td><input type=date name="enddate" value="{{$www['enddate']}}"></td>
            </tr>

            <tr>
                <td><label for="progress">Progress:</label></td>
                <td><select name="progress" id="progress" required>
                        <option value="Milestone 1" @if($www['progress'] == "Milestone 1") selected @endif>Milestone 1</option>
                        <option value="Milestone 2" @if($www['progress'] == "Milestone 2") selected @endif>Milestone 2</option>
                        <option value="Final Report" @if($www['progress'] == "Final Report") selected @endif>Final Report</option>
                </select></td>
            </tr>

            <tr>
                <td><label for="status">Status:</label></td>
                <!--<td><input type=text name="status" value="{{$www['status']}}"></td>-->
                <td><select name="status" id="status" required>
                        <option value="On Track" @if($www['status'] == "On Track") selected @endif>On Track</option>
                        <option value="Delayed" @if($www['status'] == "Delayed") selected @endif>Delayed</option>
                        <option value="Extended" @if($www['status'] == "Extended") selected @endif>Extended</option>
                        <option value="Completed" @if($www['status'] == "Completed") selected @endif>Completed</option>
                </select></td>
            </tr>

            <tr>
                <td><button type=submit>Submit</button></td>
                <td><button type=reset>Reset</button></td>
            </tr>

            <tr>
                <td><input type=hidden name="duration" value="{{$www['duration']}}"></td>
                <td><input type=hidden name="projectname" value="{{$www['projectname']}}"></td>
            </tr>
        </form>
    </table>
    <table border=0>
        <tr>
            <td><a href="/viewsv"><button >View Project SV</button></a></td>
        </tr>
    </table>
</body>

</html>