<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Project extends Model
{

    protected $guarded = ['id'];
    public function types(){
        return $this->belongsTo(Type::class);
    }

}
