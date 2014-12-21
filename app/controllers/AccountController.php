<?php
class AccountController extends BaseController{
    public function getCreate(){
       return View::make('account.create');
    }
    
    public function postCreate(){
         $validator = Validator::make(Input::all(), array(
             'email'=>'required|max:50|email|unique:users',
             'username'=>'required|max:20|min:3|unique:users',
             'password'=>'required|min:6',
             'password_again'=>'required|same:password'
             
         )
       );
         if ($validator->fails()){
             return Redirect::route('account-create-post')
                    ->withErrors($validator)
                    ->withInput();
         }else{
             $email = Input::get('email');
             $username = Input::get('username');
             $password = Input::get('pasword');
             
             //Activation code
             $code = str_random(60);
             $create = User::create(array(
                 'email'=> $email,
                 'username'=> $username,
                 'password'=> Hash::make($password),
                 'code'=> $code,
                 'active'=> 0
             ));
         }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

