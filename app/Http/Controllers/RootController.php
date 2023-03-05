<?php

namespace App\Http\Controllers;

class RootController extends Controller {

    public function register() {
        return view('authentication', [
            'status' => [
                'state' => null,
                'message' => 'Your credentials were incorrect.',
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
