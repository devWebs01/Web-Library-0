<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function members()
    {
        $users = User::whereNotNull('email_verified_at');

        return view('user.members.index', [
            'members' => $users->where('role', 'Anggota')->get(),
        ]);
    }

    public function officers()
    {
        $users = User::whereNotNull('email_verified_at');

        return view('user.officers.index', [
            'officers' => $users->whereIn('role', ['Petugas', 'Kepala'])->get(),
        ]);
    }

    public function store(UserRequest $request)
    {
        $password = Carbon::parse($request->birthdate)->format('dmY');

        $data = $request->validated();
        $data['slug'] = Str::slug($request->name).Str::random(5);
        $data['email_verified_at'] = now();
        $data['password'] = bcrypt($password);

        User::create($data);

        return back()->with('success', 'Proses penambahan data telah berhasil dilakukan.');
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->validated();
        $data['slug'] = Str::slug($request->name).Str::random(5);

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return back()->with('success', 'Proses penambahan data telah berhasil dilakukan.');
    }

    public function show($slug)
    {

        return view('user.show', [
            'user' => User::whereSlug($slug)->first(),
        ]);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return back()->with('success', 'Proses penghapusan data telah berhasil dilakukan.');
    }
}
