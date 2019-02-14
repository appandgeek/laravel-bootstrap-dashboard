<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;



class UserController extends Controller
{

    public function __construct(UserService $users)
    {
        $this->middleware(['auth']);
        $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(8);
        return view('dashboard.users.users_list', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Herer";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:50',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->with('warning', 'There was error in creating new user.');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with(
            'success',
            'User successfully Added.'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "hello";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->users->getUserInfo($id);
        return view('dashboard.users.edit_user', compact('user'));
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
        $user_details = $this->users->getUserInfo($id);


        if ($request->email == $user_details->email) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'name' => 'required|string|max:50',
                'password' => 'required|min:6'
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users',
                'name' => 'required|string|max:50',
                'password' => 'required|min:6'
            ]);
        }


        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->messages());
        }

        $user_details->name = $request->name;
        $user_details->email = $request->email;
        $user_details->password = Hash::make($request->password);
        $user_details->save();

        return redirect()->back()->with('success', 'User updated successfully!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->back()->with('warning', 'Deletion of currently logged in user is not allowed.');
        }

        $user = User::findOrFail($id);
        if ($user) {
            $user->delete();
        }

        return redirect()->back()->with(
            'success',
            'User successfully deleted.'
        );
    }

    public function search(Request $request)
    {
        $term = $request->id;
        $users = User::where('name', 'like', '%' . $term . '%')->paginate(8);
        $users->appends(['id' => $term]);

        return view('dashboard.users.users_search_result', compact('users'));
        //return response($users);
    }
}
