<?php

namespace App\Services;

class RedirectService
{
    public static function redirectToRole($user)
    {
        $role = $user->getRoleNames()->first();
        $userID = $user->id;

        switch ($role) {
            case 'Gerente General':
                return redirect()->route('admin.gg.home', $userID);
            case 'Dependiente':
                return redirect()->route('depend.home', $userID);
            default:
                return redirect()->route('admin.login.index');
        }
    }
}
