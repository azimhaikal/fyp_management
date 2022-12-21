<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\detail;

class projectCtrl extends Controller
{   
    #/////////// fyp coordinator
    function view(){
        $data = project::all();
        return view('/viewproject',['www'=>$data]);
    }
    
    function create(Request $req){#Request to receive data from the form ,$req contains data in form
        
        $member = new project; #var to hold data & attribute of table
        $data = new detail;

        $con = mysqli_connect("localhost","root","","finalproject");
        $u = "SELECT projectname from projects where projectname='$req->projectname'";
        $uu = mysqli_query($con,$u);

        if(mysqli_num_rows($uu)>0){
            echo "<script>alert('projectname already exists')</script>";
            return view('/createproject');}
        else{
        #attribute for member must be same as table | attribute for req same as name in form
        $member->projectname = $req->projectname;
        $member->type = $req->type;
        $member->student = $req->student;
        $member->supervisor = $req->supervisor;
        $member->examiner1 = $req->examiner1;
        $member->examiner2 = $req->examiner2;
        $member->save();

        $data->projectname = $req->projectname;
        $data->startdate = 'Start Date';
        $data->enddate = 'End Date';
        $data->duration = '4';
        $data->progress = 'Milestone 1';
        $data->status = 'On Track';
        $data->save();

        return redirect('/view'); #redirect to coordinatorhome
        }
    }

    function updateproject($projectname){
        $data = project::find($projectname);
        return view('/updateproject',['www'=>$data]);
    }

    function editproject(Request $req){
        $member = project::find($req->projectname);
        $data = detail::find($req->projectname);

        $member->projectname = $req->projectname;
        $data->projectname = $req->projectname;
        $member->type = $req->type;
        $member->student = $req->student;
        $member->supervisor = $req->supervisor;
        $member->examiner1 = $req->examiner1;
        $member->examiner2 = $req->examiner2;
        $member->save();

        return redirect('/view');
    }

    function deleteproject($projectname){
        $member = project::find($projectname);
        $data = detail::find($projectname);

        $member->delete();
        $data->delete();

        return redirect('/view');
    }

    #//////////// lecturer
    function viewsv(){
        $data = project::all();
        return view('/viewprojectsv',['www'=>$data]);
    }

    function details($projectname){
        $data = detail::find($projectname);
        return view('/viewprojectdetails',['www'=>$data]);
    }

    function update($projectname){
        $data = detail::find($projectname);
        return view('/updateprojectdetails',['www'=>$data]);
    }

    function edit(Request $req){

        $member = detail::find($req->projectname);

        $member->projectname = $req->projectname;
        $member->startdate = $req->startdate;
        $member->enddate = $req->enddate;
        $member->duration = $req->duration;
        $member->progress = $req->progress;
        $member->status = $req->status;
        $member->save();

        return redirect('/viewsv');
    }
}