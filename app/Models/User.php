<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $array_keys = [];
    protected $values = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];

    protected $guarded = [''];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'staff_no';
    }

    public function browseable()
    {
        foreach($this->getUserFields() as $key => $field) {
            if ($field['browse'] == true)
                $this->array_keys[] = $field['display'];
        }

        return $this->array_keys;
    }

    public function browseableValues()
    {
        foreach($this->getUserFields() as $key => $field) {
            if ($field['browse'] == true)
                $this->values[] = $key;
        }

        return $this->values;
    }

    public function getUserFields()
    {
        return config('gym.user-form-details.fields');
    }

    public function attestation()
    {
        return $this->hasOne(Attestation::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function medical()
    {
        return $this->hasOne(Medical::class);
    }
}
