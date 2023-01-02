<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  Request  $input
     * @return \App\Models\User
     */


     public function createViaApi(Request $input)
     {
       

        $validator=  Validator::make($input->all(), [
             'name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'password' => $this->passwordRules(),
         ]);
         if ($validator->fails()) {
            return $validator->errors();
        }
         
         return DB::transaction(function () use ($input) {
             return tap(User::create([
                 'bio' => $input['bio'],
                 'job' => $input['job'],
                 'phone' => $input['phone'],
                 'name' => $input['name'],
                 'email' => $input['email'],
                 'password' => Hash::make($input['password']),
             ]), function (User $user) {
                 $this->createTeam($user);
             });
         });
     }

    public function create(array $input)
    {
        return $input;
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'bio' => $input['bio'],
                'job' => $input['job'],
                'phone' => $input['phone'],
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
