<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\kyc;
use App\Models\level_income;
use App\Models\roi;
use App\Models\salary;

use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
   public function pending_kyc(){
    $kycs = kyc::with("user")->where("status","Pending")->orderBy("id","desc")->paginate(50);
    return response()->json(compact('kycs'));
   }

   public function kyc_details($id){
    $kyc = kyc::with("user")->where("id",$id)->first();
    return response()->json(compact('kyc'));
   }

   public function update_kyc(Request $request,$id){
        $validate = Validator::make($request->all(), 
            [
                'status' => 'required',
            ]);

        if($validate->fails()){
            return response()->json([
                'message' => 'validation error',
                'errors' => $validate->errors()
            ], 500);
        }
        $kyc = kyc::findOrFail($id);
        $kyc->status = $request->status;
        if($request->remarks != null){
            $kyc->remarks = $request->remarks;
        }
        $kyc->save();

        return response()->json(['message' => 'Status Update Successfully'],200);
   }

   public function pending_deposits(){
        return view('admin.pending_deposits');
   }


   public function loginUser(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), 
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validate->fails()){
                return response()->json([
                    'message' => 'validation error',
                    'errors' => $validate->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            if($user->is_admin == 0){
               return response()->json([
                    'message' => 'Email & Password does not match with our record',
                ], 401);
            }

            return response()->json([
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function userDetails(){
     $user = Auth::user();
     return response()->json(compact('user'));
    }

    public function logout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(["status"=>true],200);
    }

    public function get_users(Request $request){
        $users = User::where("is_admin",0)->orderBy("id","desc")->when($request->status=="Pending",function($q) use($request){
            $q->where("kyc_status",$request->status);
        })->paginate(50);
        return response()->json(compact('users'));
    }

    public function level_incomes(){
        $incomes = level_income::orderBy("id","asc")->get();
        return response()->json(compact('incomes'));
    }

    public function store_income(Request $request){
        $validate = Validator::make($request->all(), 
        [
            'level' => 'required|numeric',
            'percentage' => 'required|numeric',
        ]);

        if($validate->fails()){
            return response()->json([
                'message' => 'validation error',
                'errors' => $validate->errors()
            ], 500);
        }

        $income = new level_income();
        $income->level = $request->level;
        $income->percentage = $request->percentage;
        $income->save();
        return response()->json(["message"=>'Add Successfully'],200);
    }
    public function update_income(Request $request,$id){
        $validate = Validator::make($request->all(), 
        [
            'level' => 'required|numeric',
            'percentage' => 'required|numeric',
        ]);

        if($validate->fails()){
            return response()->json([
                'message' => 'validation error',
                'errors' => $validate->errors()
            ], 500);
        }

        $income = level_income::findOrFail($id);
        $income->level = $request->level;
        $income->percentage = $request->percentage;
        $income->save();
        return response()->json(["message"=>'Update Successfully'],200);
    }

    public function delete_income($id){
        $validate = Validator::make($request->all(), 
        [
            'id' => 'required|numeric',
        ]);

        if($validate->fails()){
            return response()->json([
                'message' => 'validation error',
                'errors' => $validate->errors()
            ], 500);
        }
        $income = level_income::findOrFail($id);
        $income->delete();
        return response()->json(["message"=>'Delete Successfully'],200);
    }

    public function roi(){
        $roi = roi::first();
        return response()->json(compact('roi'));
    }

    public function update_roi(Request $request,$id){
        $validate = Validator::make($request->all(), 
        [
            'percentage' => 'required|numeric',
        ]);

        if($validate->fails()){
            return response()->json([
                'message' => 'validation error',
                'errors' => $validate->errors()
            ], 500);
        }

        $roi = roi::findOrFail($id);
        $roi->percentage = $request->percentage;
        $roi->save();
        return response()->json(["message"=>'Update Successfully'],200);
    }

    public function salary(){
        $salary = salary::first();
        return response()->json(compact('salary'));
    }

    public function update_salary(Request $request,$id){
        $validate = Validator::make($request->all(), 
        [
            'amount' => 'required|numeric',
        ]);

        if($validate->fails()){
            return response()->json([
                'message' => 'validation error',
                'errors' => $validate->errors()
            ], 500);
        }

        $salary = salary::findOrFail($id);
        $salary->amount = $request->amount;
        $salary->save();

        return response()->json(["message"=>'Update Successfully'],200);
    }


}
