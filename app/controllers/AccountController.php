<?php
class AccountController extends BaseController{
    public function getCreate(){
       return View::make('account.create');
    }
    
    public function postCreate(){
       return 'Hello';
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

