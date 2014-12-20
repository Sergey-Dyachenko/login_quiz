<?php

class HomeController extends BaseController {
public function home(){
 Mail::send('emails.auth.test', array ('name' => 'Admin'),function($message){
     $message->to('serjdyachenko@gmail.com', 'Test main')->subject('Test email');
 });   
 
    return View::make('hme');
 
 }	

}
