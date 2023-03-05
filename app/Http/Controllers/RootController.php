<?php

namespace App\Http\Controllers;
use App\Models\User;
use Request;

class RootController extends Controller {

    public function register() {
        if (Request::isMethod('POST')) {
            return;
        }

        return view('authentication', [
            'status' => [
                'state' => null,
                'message' => null,
            ],
            'placeholders' => [
                'identifier' => '',
                'firstName' => '',
                'lastName' => '',
                'email' => '',
                'confirmEmail' => ''
            ],

            'showRegisterScreen' => false
        ]);
    }

}
