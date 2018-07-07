<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * create a new user from the parameters given in the request body
     * $request @param => user-name, email, password
     */
    public function register(Request $request) {
        
    }

    /**
     * log the user by a given password and email in the request body
     * updates the last-seen column and return basic info about the user
     */
    public function login(Request $request) {

    }

    /**
     * return all the info about the user for the profile page
     */
    public function profile($id) {

    }

    /**
     * must have a user-id in the request body
     * updates the user info with the parameters in the request body
     * i.e => @param (id=$id&image=$newImage&address=$address) will update the user image and address
     * available keys => user-name, image, address, first-name, last-name, description, text-color
     */
    public function updateProfile(Request $request) {

    }
}