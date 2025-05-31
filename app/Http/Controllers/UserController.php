<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'asc')
            ->paginate(10);

        return view('users/index', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        return view('users/show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users/edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        // authorize (On Hold...)
        // validate
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'contact' => 'required|string|max:16',
            'age' => 'required|integer|min:18',
            'gender' => 'required|string|max:10',
            'occupation' => 'required|string|max:50',
            'province' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'street' => 'required|string|max:50',
        ]);

        try {
            DB::beginTransaction();
            $user = $this->updateUser($data, $user);

            if ($user) {
                DB::commit();
                session()->flash('success', 'User updated successfully');
                return redirect('/user/' . $user->id);
            } else {
                DB::rollBack();
                session()->flash('error', 'Failed to update user');
                return redirect('/user/' . $user->id . '/edit');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return redirect('/user/' . $user->id . '/edit');
        }
    }

    public function create()
    {
        return view('users/create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
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

        try {
            DB::beginTransaction();
            $user = $this->createUser($data);
            if ($user) {
                DB::commit();
                session()->flash('success', 'User created successfully');
                return redirect('/users');
            } else {
                DB::rollBack();
                session()->flash('error', 'Failed to create user');
                return redirect('/users/create');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return redirect('/users/create');
        }
    }

    public function destroy(User $user_id)
    {
        try {
            DB::beginTransaction();
            $user = $this->deleteuser($user_id);

            if ($user) {
                DB::commit();
                session()->flash('success', 'User deleted successfully');
                return redirect('/users');
            } else {
                DB::rollBack();
                session()->flash('error', 'Failed to delete user');
                return redirect('/users');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return redirect('/users');
        }
    }

    // Helper Functions
    // create user
    private function createUser($data): User
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
    
    // update user
    private function updateUser($data, User $user ): User
    {
        
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $user->userDetails()->update([
            'contact' => $data['contact'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'occupation' => $data['occupation'],
        ]);

        $user->userAddress()->update([
            'province' => $data['province'],
            'city' => $data['city'],
            'barangay' => $data['street']
        ]);

        return $user;
    }

    private function deleteUser($user_id): bool
    {
        $user_id->delete();
        return true;
    }
}
