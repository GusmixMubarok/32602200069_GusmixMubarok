<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class FormController extends Controller
{
    public function profile(){
        return view('profile');
    }
    public function experience(){
        return view('Eexperience');
    }
}