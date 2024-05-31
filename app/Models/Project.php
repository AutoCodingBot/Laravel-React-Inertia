<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Log;

class Project extends Model
{
    use HasFactory;

    public function tasks() :HasMany{
        return $this->hasMany(Task::class);
    }

    //表关系,根据 created_by 查找user中所有row信息
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }

    //表关系,根据 updated_by 查找user中所有row信息
    public function updatedBy(){
        return $this->belongsTo(User::class,'updated_by');
    }

    //表关系,仅返回项目创建人的name field
    public function getCreateUser(){
        $data =  $this->createdBy()->select('users.name')->first();
        return $data->name;
    }

    //表关系,仅返回项目修改人的name field
    public function getUpdateUser(){
        $data =  $this->updatedBy()->select('users.name')->first();
        return $data->name;
    }
}
