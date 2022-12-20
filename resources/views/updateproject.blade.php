<x-app-layout>

</x-app-layout>
<html>
<head>
    <title>Update Project</title>
</head>
<body>
    <h1 align=center>Update Project</h1>

    <h3 align=center>{{$www['projectname']}}</h3>

    <table border=0 align=center>
        <form action="/editproject" method="POST"> <!-- action is url, so url go to route -->
            @csrf
            <tr>
                <td><label for="student">student:</label></td>
                <td><input type=text name="student" value="{{$www['student']}}" id="student"></td>
            </tr>

            <tr>
                <td><label for="sv">Supervisor:</label></td>
                <td><select name="supervisor" id="sv" required>
                        <option value="Azlan Yusof" @if($www['supervisor'] == "Azlan Yusof") selected @endif>Azlan Yusof</option>
                        <option value="Badariah Bte. Solemon, Assoc. Prof. Dr." @if($www['supervisor'] == "Badariah Bte. Solemon, Assoc. Prof. Dr.") selected @endif>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                        <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr." @if($www['supervisor'] == "Faridah Hani Bte Mohamed Salleh, Ts. Dr.") selected @endif>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                        <option value="Raja Feninferina Raja Azman" @if($www['supervisor'] == "Raja Feninferina Raja Azman") selected @endif>Raja Feninferina Raja Azman</option>
                        <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr." @if($www['supervisor'] == "Hazleen Bte Aris, Assoc. Prof. Ts. Dr.") selected @endif>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                        <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr." @if($www['supervisor'] == "Mohd Hazli Bin Mohamed Zabil, Ts. Dr.") selected @endif>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                        <option value="Lim Kok Cheng, Ts." @if($www['supervisor'] == "Lim Kok Cheng, Ts.") selected @endif>Lim Kok Cheng, Ts.</option>
                        <option value="Moamin A Mahmoud, Dr." @if($www['supervisor'] == "Moamin A Mahmoud, Dr.") selected @endif>Moamin A Mahmoud, Dr.</option>
                        <option value="Naziffa Raha Binti Md Nasir" @if($www['supervisor'] == "Naziffa Raha Binti Md Nasir") selected @endif>Naziffa Raha Binti Md Nasir</option>
                        <option value="Ramona Binti Ramli, Ts." @if($www['supervisor'] == "Ramona Binti Ramli, Ts.") selected @endif>Ramona Binti Ramli, Ts.</option>
                        <option value="Muhammad Sufyian Bin Mohd Azmi, Ts." @if($www['supervisor'] == "Muhammad Sufyian Bin Mohd Azmi, Ts.") selected @endif>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                        <option value="Suhaimi Bin Ab. Rahman, Ts. Dr." @if($www['supervisor'] == "Suhaimi Bin Ab. Rahman, Ts. Dr.") selected @endif>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                        <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr." @if($www['supervisor'] == "Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.") selected @endif>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                        <option value="Zailani Bte. Ibrahim, Ts." @if($www['supervisor'] == "Zailani Bte. Ibrahim, Ts.") selected @endif>Zailani Bte. Ibrahim, Ts.</option>
                        <option value="Azhana Ahmad, Ts. Dr." @if($www['supervisor'] == "Azhana Ahmad, Ts. Dr.") selected @endif>Azhana Ahmad, Ts. Dr.</option>
                </select></td>
            </tr>

            <tr>
                <td><label for="exam1">Examiner 1:</label></td>
                <td><select name="examiner1" id="exam1" required>
                        <option value="Azlan Yusof" @if($www['examiner1'] == "Azlan Yusof") selected @endif>Azlan Yusof</option>
                        <option value="Badariah Bte. Solemon, Assoc. Prof. Dr." @if($www['examiner1'] == "Badariah Bte. Solemon, Assoc. Prof. Dr.") selected @endif>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                        <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr." @if($www['examiner1'] == "Faridah Hani Bte Mohamed Salleh, Ts. Dr.") selected @endif>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                        <option value="Raja Feninferina Raja Azman" @if($www['examiner1'] == "Raja Feninferina Raja Azman") selected @endif>Raja Feninferina Raja Azman</option>
                        <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr." @if($www['examiner1'] == "Hazleen Bte Aris, Assoc. Prof. Ts. Dr.") selected @endif>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                        <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr." @if($www['examiner1'] == "Mohd Hazli Bin Mohamed Zabil, Ts. Dr.") selected @endif>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                        <option value="Lim Kok Cheng, Ts." @if($www['examiner1'] == "Lim Kok Cheng, Ts.") selected @endif>Lim Kok Cheng, Ts.</option>
                        <option value="Moamin A Mahmoud, Dr." @if($www['examiner1'] == "Moamin A Mahmoud, Dr.") selected @endif>Moamin A Mahmoud, Dr.</option>
                        <option value="Naziffa Raha Binti Md Nasir" @if($www['examiner1'] == "Naziffa Raha Binti Md Nasir") selected @endif>Naziffa Raha Binti Md Nasir</option>
                        <option value="Ramona Binti Ramli, Ts." @if($www['examiner1'] == "Ramona Binti Ramli, Ts.") selected @endif>Ramona Binti Ramli, Ts.</option>
                        <option value="Muhammad Sufyian Bin Mohd Azmi, Ts." @if($www['examiner1'] == "Muhammad Sufyian Bin Mohd Azmi, Ts.") selected @endif>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                        <option value="Suhaimi Bin Ab. Rahman, Ts. Dr." @if($www['examiner1'] == "Suhaimi Bin Ab. Rahman, Ts. Dr.") selected @endif>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                        <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr." @if($www['examiner1'] == "Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.") selected @endif>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                        <option value="Zailani Bte. Ibrahim, Ts." @if($www['examiner1'] == "Zailani Bte. Ibrahim, Ts.") selected @endif>Zailani Bte. Ibrahim, Ts.</option>
                        <option value="Azhana Ahmad, Ts. Dr." @if($www['examiner1'] == "Azhana Ahmad, Ts. Dr.") selected @endif>Azhana Ahmad, Ts. Dr.</option>
                </select></td>
            </tr>

            <tr>
                <td><label for="exam2">Examiner 2:</label></td>
                <td><select name="examiner2" id="exam2" required>
                        <option value="Azlan Yusof" @if($www['examiner2'] == "Azlan Yusof") selected @endif>Azlan Yusof</option>
                        <option value="Badariah Bte. Solemon, Assoc. Prof. Dr." @if($www['examiner2'] == "Badariah Bte. Solemon, Assoc. Prof. Dr.") selected @endif>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                        <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr." @if($www['examiner2'] == "Faridah Hani Bte Mohamed Salleh, Ts. Dr.") selected @endif>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                        <option value="Raja Feninferina Raja Azman" @if($www['examiner2'] == "Raja Feninferina Raja Azman") selected @endif>Raja Feninferina Raja Azman</option>
                        <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr." @if($www['examiner2'] == "Hazleen Bte Aris, Assoc. Prof. Ts. Dr.") selected @endif>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                        <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr." @if($www['examiner2'] == "Mohd Hazli Bin Mohamed Zabil, Ts. Dr.") selected @endif>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                        <option value="Lim Kok Cheng, Ts." @if($www['examiner2'] == "Lim Kok Cheng, Ts.") selected @endif>Lim Kok Cheng, Ts.</option>
                        <option value="Moamin A Mahmoud, Dr." @if($www['examiner2'] == "Moamin A Mahmoud, Dr.") selected @endif>Moamin A Mahmoud, Dr.</option>
                        <option value="Naziffa Raha Binti Md Nasir" @if($www['examiner2'] == "Naziffa Raha Binti Md Nasir") selected @endif>Naziffa Raha Binti Md Nasir</option>
                        <option value="Ramona Binti Ramli, Ts." @if($www['examiner2'] == "Ramona Binti Ramli, Ts.") selected @endif>Ramona Binti Ramli, Ts.</option>
                        <option value="Muhammad Sufyian Bin Mohd Azmi, Ts." @if($www['examiner2'] == "Muhammad Sufyian Bin Mohd Azmi, Ts.") selected @endif>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                        <option value="Suhaimi Bin Ab. Rahman, Ts. Dr." @if($www['examiner2'] == "Suhaimi Bin Ab. Rahman, Ts. Dr.") selected @endif>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                        <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr." @if($www['examiner2'] == "Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.") selected @endif>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                        <option value="Zailani Bte. Ibrahim, Ts." @if($www['examiner2'] == "Zailani Bte. Ibrahim, Ts.") selected @endif>Zailani Bte. Ibrahim, Ts.</option>
                        <option value="Azhana Ahmad, Ts. Dr." @if($www['examiner2'] == "Azhana Ahmad, Ts. Dr.") selected @endif>Azhana Ahmad, Ts. Dr.</option>
                </select></td>
            </tr>

            <tr>
                <td><button type=submit>Submit</button></td>
                <td><button type=reset>Reset</button></td>
            </tr>

            <tr>
                <td><input type=hidden name="projectname" value="{{$www['projectname']}}"></td>
            </tr>
        </form>
    </table>
    <table border=0>
        <tr>
            <td><a href="/view"><button >View Project</button></a></td>
        </tr>
    </table>
</body>

</html>