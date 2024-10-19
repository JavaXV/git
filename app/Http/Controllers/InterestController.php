<?php
namespace App\Http\Controllers;
use App\Models\Person;
use App\Models\User;
use App\Models\Account;
use App\Models\Permissions;
use App\Models\Staff;
use App\Models\Smsalert;
use App\Models\Transaction;
use App\Models\AdminPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class InterestController extends Controller
{
   

        public function findingAll()
        {
            $allUser =  DB::table('users')->get();

            return response()->json([
                'message' => 'Fetch All User',
                'data'  =>  $allUser,
                ], 200);   
        }

        public function insertValue(Request $request)
        {
            $request->validate([

                'date' => 'required|max:100',
                'firstname' => 'required|max:100',
                'lastname' => 'required|max:100',
              
            ]);
    
            $date               = $request->date;
            $firstname          = $request->firstname;
            $lastname           = $request->lastname;
            $gender             = $request->gender;
            $phoneno            = $request->phoneno;
            $emailaddress       = $request->emailaddress;
            $role               = $request->role;
            $salarylevel        = $request->salarylevel;


            $users = DB::insert('insert into users(DATE,FIRSTNAME,LASTNAME,GENDER,PHONENUMBER,EMAILADDRESS,ROLE,SALARYLEVEL) value(?,?,?,?,?,?,?,?)', [$date,$firstname,$lastname,$gender,$phoneno,$emailaddress,$role,$salarylevel]);
            if($users){

                return response()->json([
                    'message' => 'User Successfully Inserted',
                    'data'  =>  $users,
                    ], 200);   
                
            }
        }

        public function show($id)
        {
            $users = User::find($id);
            if($users){
                
                                 return response()->json([
                                'users' => $users,
                                'data'    => "success",
                                ], 200);   
            }
            
        }


        public function findByFirstname(Request $request)
        {
            $firstname          = $request->firstname;

            $user = DB::select('select * from users where FIRSTNAME=?', [$firstname]);
            if($user){

                return response()->json([
                    'users' => $user,
                    'data'    => "success",
                    ], 200);   

            }
        }

        


}
