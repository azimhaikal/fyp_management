<x-app-layout>

</x-app-layout>
<html>
<head><title>Create Project</title>
</head>

<body>
    <h1 align=center>Create Project</h1>
    <table border=0 align=center>
        <form action="/add" method="POST">
        @csrf
            <tr>
                <td>Project Name: </td>
                <td><input type="text" name="projectname" required></td>
            </tr>
            <tr>
                <td>Student: </td>
                <td><input type="text" name="student" required></td>
            </tr>
            <tr>
                <td><label for="sv">Supervisor:</label></td>
                <td>
                    <select name="supervisor" id="sv" required>
                        <option value="" disabled selected hidden>Choose Supervisor</option>
                        <option value="Azlan Yusof">Azlan Yusof</option>
                        <option value="Badariah Bte. Solemon, Assoc. Prof. Dr.">Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                        <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr.">Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                        <option value="Raja Feninferina Raja Azman">Raja Feninferina Raja Azman</option>
                        <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr.">Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                        <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr.">Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                        <option value="Lim Kok Cheng, Ts.">Lim Kok Cheng, Ts.</option>
                        <option value="Moamin A Mahmoud, Dr.">Moamin A Mahmoud, Dr.</option>
                        <option value="Naziffa Raha Binti Md Nasir">Naziffa Raha Binti Md Nasir</option>
                        <option value="Ramona Binti Ramli, Ts.">Ramona Binti Ramli, Ts.</option>
                        <option value="Muhammad Sufyian Bin Mohd Azmi, Ts.">Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                        <option value="Suhaimi Bin Ab. Rahman, Ts. Dr.">Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                        <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.">Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                        <option value="Zailani Bte. Ibrahim, Ts.">Zailani Bte. Ibrahim, Ts.</option>
                        <option value="Azhana Ahmad, Ts. Dr.">Azhana Ahmad, Ts. Dr.</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="exam1">Examiner 1:</label></td>
                <td>
                    <select name="examiner1" id="exam1" required>
                        <option value="" disabled selected hidden>Choose Examiner 1</option>
                        <option value="Azlan Yusof">Azlan Yusof</option>
                        <option value="Badariah Bte. Solemon, Assoc. Prof. Dr.">Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                        <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr.">Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                        <option value="Raja Feninferina Raja Azman">Raja Feninferina Raja Azman</option>
                        <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr.">Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                        <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr.">Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                        <option value="Lim Kok Cheng, Ts.">Lim Kok Cheng, Ts.</option>
                        <option value="Moamin A Mahmoud, Dr.">Moamin A Mahmoud, Dr.</option>
                        <option value="Naziffa Raha Binti Md Nasir">Naziffa Raha Binti Md Nasir</option>
                        <option value="Ramona Binti Ramli, Ts.">Ramona Binti Ramli, Ts.</option>
                        <option value="Muhammad Sufyian Bin Mohd Azmi, Ts.">Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                        <option value="Suhaimi Bin Ab. Rahman, Ts. Dr.">Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                        <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.">Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                        <option value="Zailani Bte. Ibrahim, Ts.">Zailani Bte. Ibrahim, Ts.</option>
                        <option value="Azhana Ahmad, Ts. Dr.">Azhana Ahmad, Ts. Dr.</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="exam2">Examiner 2:</label></td>
                <td>
                    <select name="examiner2" id="exam2" required>
                        <option value="" disabled selected hidden>Choose Examiner 2</option>
                        <option value="Azlan Yusof">Azlan Yusof</option>
                        <option value="Badariah Bte. Solemon, Assoc. Prof. Dr.">Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                        <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr.">Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                        <option value="Raja Feninferina Raja Azman">Raja Feninferina Raja Azman</option>
                        <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr.">Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                        <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr.">Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                        <option value="Lim Kok Cheng, Ts.">Lim Kok Cheng, Ts.</option>
                        <option value="Moamin A Mahmoud, Dr.">Moamin A Mahmoud, Dr.</option>
                        <option value="Naziffa Raha Binti Md Nasir">Naziffa Raha Binti Md Nasir</option>
                        <option value="Ramona Binti Ramli, Ts.">Ramona Binti Ramli, Ts.</option>
                        <option value="Muhammad Sufyian Bin Mohd Azmi, Ts.">Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                        <option value="Suhaimi Bin Ab. Rahman, Ts. Dr.">Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                        <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.">Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                        <option value="Zailani Bte. Ibrahim, Ts.">Zailani Bte. Ibrahim, Ts.</option>
                        <option value="Azhana Ahmad, Ts. Dr.">Azhana Ahmad, Ts. Dr.</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button type="reset">Cancel</td>
                <td><button type="submit">Create</td>
            </tr>
        </form>
    </table>
    <table border=0>
        <tr>
            <td><a href="/view"><button >Go Back</button></a></td>
        </tr>
    </table>
</body>
</html>