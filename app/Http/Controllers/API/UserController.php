<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'firstName' => 'required|string|max:191',
            'lastName' => 'required|string|max:191',
            'name' => 'required|string|max:191',
            'email' => 'required|email|unique:users|max:191',
             'phone' => 'required|numeric|min:11',
             'location' => 'required|string|max:191',
             'type' => 'required|',
             
            

        ]);

        return User::create([ 
            'firstName' => $request['firstName'],
            'name' => $request['name'],
            'lastName' => $request['lastName'],
            'country' => $request['country'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'type' => $request['type'],
            'photo' => $request['photo'],
            'password' => Hash::make($request['password']),

        ]);
    }


 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
       $user = auth('api')->user();
       return $request->photo;
    //    return ['message', 'successful'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return auth('api')->user();
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
       

        $user = User::findOrFail($id);

        $this->validate($request,[
            'firstName' => 'required|string|max:191',
            'lastName' => 'required|string|max:191',
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191|unique:users,email,'.$user->id,
             'phone' => 'required|numeric|min:11',
             'country' => 'required|string|max:191',
             'password' => 'sometimes|password|min:6',
             'type' => 'required|',
             
            

        ]);

        $user->update($request->all());
    

    

        return ['message' => 'updated successful'];
    }


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return ['message'=>'user deleted'];
    }
}
