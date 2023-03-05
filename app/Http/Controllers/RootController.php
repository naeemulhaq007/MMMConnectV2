<?php

namespace App\Http\Controllers;
use App\Models\User;
use Request;

class RootController extends Controller {

    private static $DEFAULT_VIEW_ARGS = [
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
    ];

    public function register() {
        if (Request::isMethod('GET')) {
            // Display default registration view.
            return view('authentication', RootController::$DEFAULT_VIEW_ARGS);
        }

        // Process previous data.
        if (Request::exists('submitLogin')) {
            return $this->handleLogin();
        } else {
            return $this->handleRegistration();
        }
    }

    private function handleLogin() {
        // Ensure these properties exist.
        Request::validate([
            'identifier' => 'required',
            'password' => 'required'
        ]);

        $emailOrUsername = Request::get('identifier');
        $password = Request::get('password');

        $user = User::whereRaw('LOWER(username) = ?', strtolower($emailOrUsername))
                    ->orWhereRaw('LOWER(email) = ?', strtolower($emailOrUsername))
                    ->first();

        // Check if user exists.
        if ($user == NULL) {
            return view('authentication', array_merge(RootController::$DEFAULT_VIEW_ARGS, [
                'status' => [
                    'state' => 'error',
                    'message' => 'Your credentials were incorrect.'
                ],
                'placeholders' => [
                    'identifier' => $emailOrUsername,
                    'firstName' => '',
                    'lastName' => '',
                    'email' => '',
                    'confirmEmail' => ''
                ]
            ]));
        }

        // Verify password against user.
        $userPasswordHash = $user->getAttribute('password');
        if (!password_verify($password, $userPasswordHash)) {
            return view('authentication', array_merge(RootController::$DEFAULT_VIEW_ARGS, [
                'status' => [
                    'state' => 'error',
                    'message' => 'Your credentials were incorrect.'
                ],
                'placeholders' => [
                    'identifier' => $emailOrUsername,
                    'firstName' => '',
                    'lastName' => '',
                    'email' => '',
                    'confirmEmail' => ''
                ]
            ]));
        }

        // Login success!
        // Reopen user account if user logs in.
        if (!$user->getAttribute('user_closed')) {
            $user->setAttribute('user_closed', false);
            $user->save();
        }

        Request::session()->put('id', $user->getAttribute('id'));
        Request::session()->save();

        return redirect('/feed');
    }

    private function handleRegistration() {
        // Ensure these properties exist.
        Request::validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'confirmEmail' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required'
        ]);

        $status = null;

        $firstName = Request::get('firstName');
        $lastName = Request::get('lastName');
        $email = Request::get('email');
        $confirmEmail = Request::get('confirmEmail');
        $password = Request::get('password');
        $confirmPassword = Request::get('confirmPassword');

        // Check if user exists first.
        $user = User::whereRaw('LOWER(email) = ?', strtolower($email))
                    ->first();

        // Error checking.
        if ($user != null) {
            $status = [
                'state' => 'error',
                'message' => 'The email already exists.'
            ];
        } else if (strtolower($email) != strtolower($confirmEmail)) {
            $status = [
                'state' => 'error',
                'message' => 'The emails provided do not match.'
            ];
        } else if (strlen($firstName) > 25 || strlen($firstName) < 2) {
            $status = [
                'state' => 'error',
                'message' => 'Your first name must be within 2 and 25 characters.'
            ];
        } else if (strlen($lastName) > 25 || strlen($lastName) < 2) {
            $status = [
                'state' => 'error',
                'message' => 'Your last name must be within 2 and 25 characters.'
            ];
        } else if ($password != $confirmPassword) {
            $status = [
                'state' => 'error',
                'message' => 'The passwords provided do not match.'
            ];
        } else if (preg_match("/[^A-Za-z0-9]/", $password)) {
            $status = [
                'state' => 'error',
                'message' => 'Your password can only contain english characters or numbers.'
            ];
        } else if (strlen($password) > 30 || strlen($password) < 5) {
            $status = [
                'state' => 'error',
                'message' => 'Your password must be within 5 and 30 characters.'
            ];
        }

        // No error? Register the user.
        if ($status == null) {
            $username = $this->generateUsername($firstName, $lastName);

            $avatar = '';
            if (rand(0, 1)) {
                $avatar .= 'head_deep_blue.png';
            } else {
                $avatar .= 'head_emerald.png';
            }

            $status = [
                'state' => 'success',
                'message' => 'Successfully registered! Your username is ' . $username
            ];

            $user = new User([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'profile_pic' => $avatar,
                'user_closed' => false
            ]);
            $user->save();
        }

        return view('authentication', array_merge(RootController::$DEFAULT_VIEW_ARGS, [
            'status' => $status,
            'placeholders' => [
                'identifier' => '',
                'firstName' => $firstName,
                'lastName' => $lastName,
                'email' => $email,
                'confirmEmail' => $confirmEmail
            ],
            'showRegisterScreen' => true
        ]));


    }

    private function generateUsername($firstName, $lastName) {
        $username = strtolower($firstName) . "_" . strtolower($lastName);
        $ogUsername = $username;
        $num = 1;
        $user = null;
        do {
            $username = $ogUsername . $num;
            $num++;
            $user = User::where('username', $username)
                ->first();
        } while ($user != null);

        return $username;
    }

}
