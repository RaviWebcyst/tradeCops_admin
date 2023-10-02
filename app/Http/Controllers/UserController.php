<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Models\downline;
use App\Models\kyc;
use Hash;

use Illuminate\Support\Facades\Mail;
use App\Mail\verifyMail;



class UserController extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|unique:users',
            'dob' => 'required',
            'password' => 'required',
            'spid' => 'required',
        ]);

        // if($request->spid == "admin")
        // {
        //     return response()->json(['message'=>'Invalid Sponser!'], 500);
        //   exit;
        // }

        if($validator->fails()){
          return response()->json(['message'=>$validator->messages(),'status'=>false],500);
          exit;
        }
             

        $user = User::where("uid",$request->spid)->first();
        $usr = User::where("email",$request->email)->first();
        if(empty($user) ){
            return response()->json(['message'=>"Invaild User id",'status'=>false], 500);
            exit;
        }

        $uid =  "TC".mt_rand(100000, 999999);
        $whilee = true;
        while($whilee == true){
            $user = User::where("uid",$uid)->first();
            $uid =  "TC".mt_rand(100000, 999999);
            if($user == null){
                $uid = $uid;
                $whilee = false;
                break;
                exit;
            }
        }

       
        $user = User::where("uid",$request->uid)->first();

        if(!empty($user) || !empty($usr)){
          return response()->json(['message'=>"User Already Exist",'status'=>false], 500);
            exit;
        }

        $key = md5(rand());
        
        $user = new User();
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->showPass = $request->password;
        $user->spid = $request->spid;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->uid =$uid;
        $user->api_key = $key;
        $user->save();

        
    $tagsp = $user->spid;
    $sppp = $user->spid;
    $user_id = $user->uid;
    $while = true;
    $lv = 1;

    while ($while == true) {
        $udata = User::where("uid",$tagsp)->where("is_admin","!=",1)->get();
        if(count($udata)<1){
            $while = false;
            break;
            exit;
        }
        downline::create([
            "tagsp"=>$tagsp,
            "user_id"=>$user_id,
            "spid"=>$sppp,
            "level"=>$lv
        ]);
        $userdata = $udata[0];
        $tagsp = $userdata['spid'];
        $lv++;
    }

        // $url = env('MIX_APP_URL');

        // $data = [
        //     "link"=> $url.'verifyEmail?api_key='.$key.'&lang=en',
        //     "name"=> $user->first_name
        // ];

        // $this->sendMail($user->email,$data);
       
        return response()->json(["message"=> "Registration Successfully",'status'=>true],200);

    }


    public function login(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), 
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validate->fails()){
                return response()->json([
                    'status'=>false,
                    'message' => 'validation error',
                    'errors' => $validate->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json(['status'=>false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            if($user->is_admin == 1){
               return response()->json(['status'=>false,
                    'message' => 'Email & Password does not match with our record',
                ], 401);
            }

            return response()->json(['status'=>true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken,
            ], 200);

        } catch (\Throwable $th) {
            return response()->json(['status'=>false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function userDetails(){
     $user = Auth::user();
     return response()->json(["status"=>true,'user'=>$user]);
    }

    public function verifyEmail(Request $request){
        $user = User::where("api_key",$request->api_key)->first();
        if($user->email_verified == 1) {
            return response()->json(["message"=>'Email Already Verified',"status"=>true],200);
        }
        $user->email_verified = 1;
        $user->save();
        return response()->json(["message"=>'Email Verified',"status"=>true],200);
    }

    public function sendMail(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
        ]);


        if($validator->fails()){
          return response()->json(['message'=>$validator->messages(),'status'=>false],500);
          exit;
        }
        
        $user = User::where("email",$request->email)->first();
        if($user == null){
            return response()->json(['message'=>"Invalid User Email",'status'=>false], 500);
        }

        $url = env('MIX_APP_URL');
        $data = [
            "link"=> $url.'verifyEmail?api_key='.$user->api_key.'&lang=en',
            "name"=> $user->first_name
        ];
         Mail::to($request->email)->send(new verifyMail($data));  


        return response()->json(["message"=> "Email Send Successfully",'status'=>true],200);  
    }

    public function email_verification(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
        ]);
        if($validator->fails()){
            return response()->json(['message'=>$validator->messages(),'status'=>false],500);
            exit;
          }
          $user = User::where("email",$request->email)->first();
          if($user == null){
            return response()->json(['message'=>"Invalid User Email",'status'=>false], 500);
        }
        return response()->json(["status"=>true,"verified"=>$user->email_verified],200);
          

    }

    public function kyc_store(Request $request){
       
        $user = Auth::user();
        $kyc = kyc::firstOrNew(['user_id' =>$user->id,"status"=>"Incomplete"]);
        $kyc->user_id = $user->id;

        $path = "uploads/kyc/".$user->uid."/";


        
       $check_id =  $this->file_type($request,"id_proof"); 
       if($check_id){
            $file = $request->id_proof;
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path($path),$filename);

            $kyc->id_proof = $path.$filename;
            $kyc->save();
            return response()->json(["status"=>true],200);

       }

       $check_address =  $this->file_type($request,"address_proof"); 
       if($check_address){
            $file = $request->address_proof;
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path($path),$filename);

            $kyc->address_proof = $path.$filename;
            $kyc->save();
            return response()->json(["status"=>true],200);
       }

       $check_pan =  $this->file_type($request,"pan_card"); 
       if($check_pan){
            $file = $request->pan_card;
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path($path),$filename);

            $kyc->pan_card = $path.$filename;
            $kyc->save();
            return response()->json(["status"=>true],200);
       }

       $check_cheque =  $this->file_type($request,"cheque_book"); 
       if($check_cheque){
            $file = $request->cheque_book;
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path($path),$filename);

            $kyc->cheque_book = $path.$filename;
            $kyc->save();
            return response()->json(["status"=>true],200);
       }

       $check_photo =  $this->file_type($request,"image"); 
       if($check_photo){
            $file = $request->image;
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path($path),$filename);

            $kyc->image = $path.$filename;
            $kyc->save();
            return response()->json(["status"=>true],200);
       }

       $check_sign =  $this->file_type($request,"sign"); 
       if($check_sign){
            $file = $request->sign;
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path($path),$filename);

            $kyc->signature = $path.$filename;
            $kyc->save();
            return response()->json(["status"=>true],200);
       }


       if($request->complete_address != null){
           $kyc->complete_address = $request->complete_address;
           $kyc->postal_code = $request->postal_code;
       }
       if($request->pan_no != null){
        $kyc->pan_no = $request->pan_no;
        $kyc->account_type = $request->account_type;
        $kyc->account_name = $request->account_name;
        $kyc->account_no = $request->account_no;
        $kyc->ifsc = $request->ifsc;
        $kyc->bank_name = $request->bank_name;
        $kyc->bank_address = $request->bank_address;
       }

       if($request->status != null){
        $kyc->status = $request->status;
        $user->kyc_status = $request->status;
        $user->save();
       }

       $kyc->save();
       return response()->json(["status"=>true],200);


    }

    public function kyc_details(Request $request){
        $user = Auth::user();
        $kyc  = kyc::where("user_id",Auth::user()->id)->select($request->type)->orderBy("id","desc")->first();

        return response()->json(["status"=>true,"kyc"=>$kyc],200);

    }


  
       public function logout(Request $request){
           $request->user()->tokens()->delete();
           return response()->json(["status"=>true],200);
       }



       protected function file_type($request,$filename){
            if(!$request->hasFile($filename)){
                return false;
            }
            return true;
       }

       
}
