<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\User;
use App\Models\ProductName;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return "hello";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $product = new ProductName();
        $product->product_name = $request->product_name;
        $product->user_id = $request->user_id;
        if($product->save()){
            return response()->json([
            'message' => 'Data inserted successfully',
            'status' => '200'
        ]);
        }else{
            return response()->json([
            'message' => 'something went worng',
            'status' => '404'
        ]);
        }
        // $product->save();
        
        // return redirect()->route('address.index')->with('success',"Product stored successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $product = ProductName::where('id',$id)->first();
        if(is_null($product)){
            return response()->json([
                'product' => null,
                'message' => 'product not found',
                'status' => 0
            ]);
        }else{
            return response()->json([
                'product' => $product,
                'message' => 'product found',
                'status' => 1
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = ProductName::where('id',$id)->first();
        if(is_null($product)){
            return response()->json([
                'message' => 'data not found',
                'status' => '404'
            ]);
        }else{
            $product->product_name = $request->product_name;
            $product->user_id = $request->user_id;
            if($product->save()){
                return response()->json([
                'message' => 'Data inserted successfully',
                'status' => '200'
            ]);
            }else{
                return response()->json([
                'message' => 'something went worng',
                'status' => '404'
            ]);
            }
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $product = ProductName::where('id',$id)->delete();
        if(is_null($product)){
            return response()->json([
                'product' => null,
                'message' => 'product not delete',
                'status' => 0
            ]);
        }else{
            return response()->json([
                'product' => $product,
                'message' => 'product deleted',
                'status' => 1
            ]);
        }
    }

    public function registger(Request $request){
        $request->validate([
            'name' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->password = Hash::make($request->password);
        $user->save();
        $token= $user->createToken("auth_token")->accessToken;
        return response()->json([
            'token' => $token,
            'user' => $user,
            'message' => 'user registgered',
            'status' => 1
        ]);
    }


    public function login(Request $request){
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        $user = User::where('email', $validatedData['email'])->first();
        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid email or password',
                'status' => 0
            ], 401); // Unauthorized
        }
        $token = $user->createToken('auth_token')->accessToken;
        return response()->json([
            'token' => $token,
            'user' => $user,
            'message' => 'Logged in',
            'status' => 1
        ]);
        // echo "<pre>";
        // print_r($user);
    }


    public function getUser($id){
        $user = User::where('id', $id)->with(['user_product'])->first();
        // $user = User::where('id', $id)->first();
        if(is_null($user)){
            return response()->json([
                'user' => null,
                'message' => 'user not found',
                'status' => 0
            ]);
        }else{
            return response()->json([
                'user' => $user,
                'message' => 'user found',
                'status' => 1
            ]);    
        }
        //     echo "<pre>";
        // print_r($id);   
    }
}