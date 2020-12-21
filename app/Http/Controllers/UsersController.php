<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use App\Models\User;
class UsersController extends Controller
{

 public function show (User $user){
    return View('users.show',compact('user'));
 }
 public function edit (User $user){
    return View('users.edit',compact('user'));
 }
 public  function update(UserRequest $Request,User $user){
    $user->update($Request->all());
    return redirect()->route('users.show',$user->id)->with('success','更新成功');
 }
}
