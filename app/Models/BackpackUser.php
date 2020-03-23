<?php

namespace App\Models;

use App\User;
use Backpack\Base\app\Models\Traits\InheritsRelationsFromParentModel;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;

class BackpackUser extends User
{
    use InheritsRelationsFromParentModel;

    protected $table = 'users';

    const ROLE_ADMIN = 'admin';
    const ROLE_CONTENT_WRITER = 'content_writer';

    // Permissions for Users
    const PERMISSION_USERS_VIEW = 'View Users';
    const PERMISSION_USERS_CREATE = 'Create Users';
    const PERMISSION_USERS_EDIT = 'Edit Users';
    const PERMISSION_USERS_DELETE = 'Delete Users';

    // Permissions for Events
    const PERMISSION_EVENTS_VIEW = 'View Events';
    const PERMISSION_EVENTS_CREATE = 'Create Events';
    const PERMISSION_EVENTS_EDIT = 'Edit Events';
    const PERMISSION_EVENTS_DELETE = 'Delete Events';

    // Permissions for Pages
    const PERMISSION_PAGES_VIEW = 'View Pages';
    const PERMISSION_PAGES_CREATE = 'Create Pages';
    const PERMISSION_PAGES_EDIT = 'Edit Pages';
    const PERMISSION_PAGES_DELETE = 'Delete Pages';

    /**
     * Send the password reset notification.
     *
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }
}
