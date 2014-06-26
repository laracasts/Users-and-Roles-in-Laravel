<?php

// Examples

Route::get('/', function()
{
    $user = User::first();
    //$role = Role::whereName('administrator')->first();

    //$user->assignRole($role);
    // $user->removeRole(3);

    return $user->roles;

    // if ($user->hasRole('owner')) return 'you are the owner';
});


// Example of using filters and roles

Route::get('reporting', function()
{
    return 'secret financial reports';
})->before('role:owner');