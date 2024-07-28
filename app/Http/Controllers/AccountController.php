<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acc = DB::table('accounts')->get();
        return view('Account.index', compact('acc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Account.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'type' => 'required|in:1-Truong phong,2-Nhan vien',
            'dob' => 'required',
            'phone' => 'required|max:11',
            'address' => 'required',
            'image' => 'required',
        ]);
        // dd($request);
        if($request->hasFile('image')){
            $image = Storage::put('image', $request->file('image'));
        }
        DB::table('accounts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $image,
        ]);
        return redirect()->route('account.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = DB::table('accounts')->where('id',$id)->first();
        return view('Account.edit',compact('edit'));
    }
    public function update(Request $request, string $id)
    {
        $edit = DB::table('accounts')->where('id',$id)->first();
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'type' => 'required|in:1-Truong phong,2-Nhan vien',
            'dob' => 'required',
            'phone' => 'required|max:11',
            'address' => 'required',
            'image' => 'required',
        ]);
        // dd($request);
        if($request->hasFile('image')){
            $image = Storage::put('image', $request->file('image'));
        }else{
            $image = $edit->image;
        }
        DB::table('accounts')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $image,
        ]);
        return redirect()->route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('accounts')->where('id', $id)->delete();
        return redirect()->route('account.index');
    }
}
