<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
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
