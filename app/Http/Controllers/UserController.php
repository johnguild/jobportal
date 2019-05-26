<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Carbon\Carbon;
use App\Models\Sector;
use App\Models\Industry;

class UserController extends Controller
{


    public function login(Request $request){

        if($request->ajax()){
            return view('myauth.login');
        }

        return redirect('page-not-found');
    }

    public function registerApplicant(Request $request){

        $sectors = Sector::all();

        if($request->ajax()){
            return view('myauth.register_applicant', compact('sectors'));
        }

        return redirect('page-not-found');
    }

    public function storeApplicant(Request $request){

        $validator = Validator::make($request->all(), [
           'name'      => 'required|min:3|max:160',
           'email'     => 'required|email|max:190|unique:users',
           'password'  => 'required|min:8',
        ]);

        $result = [];

        if ($validator->fails()) {
            $result["status"] = 0;
            $result["data"] = $validator->errors()->all();
            return response()->json($result, 200);
        }

        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();

        $result["status"] = 1;
        return response()->json($result, 200);
    }

    public function registerEmployer(Request $request){

        if($request->ajax()){

            $industries = Industry::all();

            return view('myauth.register_employer', compact('industries'));
        }

        return redirect('page-not-found');
    }

    public function storeEmployer(Request $request){

        $validator = Validator::make($request->all(), [
           'name'      => 'required|min:3|max:160',
           'email'     => 'required|email|max:190|unique:users',
           'password'  => 'required|min:8',
           'company_name' => 'required|max:190|unique:companies,name',
           'address'  => 'required|max:190',
           'website'  => 'required|max:255',
           'about'    => 'required|max:1500',
           'industry' => 'required'
        ]);

        $result = [];

        if ($validator->fails()) {
            $result["status"] = 0;
            $result["data"] = $validator->errors()->all();
            return response()->json($result, 200);
        }

        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();

        $result["status"] = 1;
        return response()->json($result, 200);
    }

}
