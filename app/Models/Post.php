<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=[
        'title',
        'body',
        ];
    
    public function getByLimit(int $limit_count=5){
        return $this->orderBy('updated_at','desc')->limit($limit_count)->get();
    }
    public function getPaginateByLimit(int $limit_count=5){
        return $this->orderBy('updated_at','desc')->paginate($limit_count);
    }
}
