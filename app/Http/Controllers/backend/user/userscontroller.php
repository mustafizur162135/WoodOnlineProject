<?php

namespace App\Http\Controllers\backend\user;



// include_once('App/Helpers/uploadeHelpers.php');

// namespace App\Helpers\uploadeHelper;

use App\Helpers\UploadHelper;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('backend.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.users.new_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // print_r($request->image);
        // dd($request->image);
        // return $request->all();
        // 
        //data validation
        $request->validate([
            'name' => 'required|max:255|min:2',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'username' => 'required|unique:users|alpha_num',
            'phone_no' => 'required|unique:users|max:11',
            'present_address' => 'nullable|max:255',
            'parmanent_address' => 'nullable|max:255',
            'image' => 'nullable|max:2048',
            'status' => 'required',
        ]);
        //dta insert
        $users = new user();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->username = $request->username;
        $users->phone_no = $request->phone_no;
        $users->present_address = $request->present_address;
        $users->parmanent_address = $request->parmanent_address;
        $users->status = $request->status;


        $imageName = UploadHelper::upload($request->image, $request->username, 'image/users');
        $users->image = $imageName;
        $users->save();

        session()->flash('success', 'user registration successfully');
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users = User::find($id);
        if (!is_null($users)) {
            return view('backend.pages.users.edit', compact('users'));
        } else {
            session()->flash('error', 'User Not Found');
            return redirect()->route('admin.users.index');
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
        $users = User::find($id);
        if (!is_null($users)) {
            $request->validate([
                'name' => 'required|max:255|min:2',
                'email' => 'required|max:255|unique:users,email,' . $users->id,
                'password' => 'required|max:255',
                'username' => 'alpha_num|required|unique:users,username,' . $users->id,
                'phone_no' => 'required|max:11|unique:users,phone_no,' . $users->id,
                'present_address' => 'nullable|max:255',
                'parmanent_address' => 'nullable|max:255',
                'image' => 'nullable|max:2048',
                'status' => 'required',
            ]);
            //dta insert
  
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = Hash::make($request->password);
            $users->username = $request->username;
            $users->phone_no = $request->phone_no;
            $users->present_address = $request->present_address;
            $users->parmanent_address = $request->parmanent_address;
            $users->status = $request->status;


            $imageName = UploadHelper::upload($request->image, $request->username, 'image/users');
            $users->image = $imageName;
             $users->save();

            session()->flash('success', 'user update successfully');
            //return $users;
            return redirect()->route('admin.users.index');
        } else {
            session()->flash('error', 'Cheack Your Information');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
