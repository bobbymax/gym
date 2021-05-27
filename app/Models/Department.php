<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function modules()
    {
        return $this->morphToMany(Module::class, 'moduleable');
    }

    public function staffs()
    {
        return $this->morphToMany(User::class, 'userable');
    }

    public function grantModuleAccess(Module $module)
    {
        return $this->modules()->save($module);
    }

    public function subBudgetHeads()
    {
        return $this->hasMany(SubBudgetHead::class);
    }
}
