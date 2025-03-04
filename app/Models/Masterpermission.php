<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterpermission extends Model
{
    use HasFactory;
    protected $table = 'master_permissions';
    protected $fillable = ['name', 'description', 'code', 'created_by', 'updated_by', 'deleted_by'];
    
}
