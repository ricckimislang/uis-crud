<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;



Route::get('/', function () {
    return view('home');
});

// show all users
Route::get('/users', function () {
    $users = User::orderBy('name', 'asc')
    ->paginate(10);

    return view('users/index', [
        'users' => $users
    ]);
});

// show create user form
Route::get('/users/create', function () {
    return view('users/create');
});

// show user details
Route::get('/user/{id}', function ($id) {

    $user = User::with('userDetails', 'userAddress')->find($id);

    if (!$user) {
        abort(404);
    }
    
    return view('users/show', ['user' => $user]);
});


Route::get('/about', function () {
    return view('about');
});

// show about page
Route::get('/about', function () {
    return view('about');
});



// post
Route::post('/users', function(){
    $data = request()->validate([
        'name' => 'required|string|max:50',
        'email' => 'required|email|unique:users',
        'contact' => 'required|string|max:16',
        'age' => 'required|integer|min:18',
        'gender' => 'required|string|max:10',
        'occupation' => 'required|string|max:50',
        'province' => 'required|string|max:50',
        'city' => 'required|string|max:50',
        'street' => 'required|string|max:50',
    ]);
    
    try{
        DB::beginTransaction();
        $user = createuser($data);
        if($user)
        {
            DB::commit();
            return redirect('/users')->with('success', 'User created successfully');
        }
        else
        {
            DB::rollBack();
            return redirect('/users/create')->with('error', 'Failed to create user');
        }
    }
    catch(\Exception $e)
    {
        DB::rollBack();
        return redirect('/users/create')->with('error', 'Failed to create user');
    }

});



// functions
function createuser($data):User 
{
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make('password')
    ]);

    $user->userDetails()->create([
        'user_id' => $user->id,
        'contact' => $data['contact'],
        'age' => $data['age'],
        'gender' => $data['gender'],
        'occupation' => $data['occupation'],
    ]);

    $user->userAddress()->create([
        'user_id' => $user->id,
        'province' => $data['province'],
        'city' => $data['city'],
        'barangay' => $data['street']
    ]);
    
    return $user;
}