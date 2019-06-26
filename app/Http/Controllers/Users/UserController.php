<?php

namespace App\Http\Controllers\Users;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        //$users = User::orderByDesc('created_at')->paginate(5);
        $users = User::query()
            ->when(request('search'), function($query, $search){
                $query->where('name', 'like',"%{$search}%")
                    ->orWhere('email', 'like',"%{$search}%");
            })
            ->orderByDesc('created_at')
            ->paginate(5);
            

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(CreateUserRequest $request){            
        $request->createUser();
            
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable' , 'min:6', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'],
        ]);

        if($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route("users.show", ['user' => $user]);
    }

    public function trash(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
