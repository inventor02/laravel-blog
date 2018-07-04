<?php

namespace Blog\Models\User;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'username', 'first_name', 'last_name', 'display_type', 'is_admin'
    ];

    /**
     * Attributes that should be hidden from output.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * Get the display name for the user based on the user's settings.
     *
     * @return string
     */
    public function getDisplayName()
    {
        switch ($this->display_type)
        {
            case 'FIRST_LAST_USERNAME':
                return $this->first_name . ' ' . $this->last_name . ' (' . $this->username . ')';
            case 'FIRST_LAST':
                return $this->first_name . ' ' . $this->last_name;
            case 'FIRSTINITIAL_LAST':
                return substr($this->first_name, 0, 1) . ' ' . $this->last_name;
            case 'FIRSTINITIAL_LAST_USERNAME':
                return substr($this->first_name, 0, 1) . ' ' . $this->last_name . ' (' . $this->username . ')';
            case 'FIRST':
                return $this->first_name;
            case 'FIRST_USERNAME':
                return $this->first_name . ' (' . $this->username . ')';
            default: // USERNAME and any others
                return $this->username;
        }
    }
}
