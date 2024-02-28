<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'company_name',
        'evaluation_id',
        'occupation',
        'selection_type_id',
        'result_id',
        'question',
        'answer',
        ];
        
    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
    
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
    
    public function selection_type()
    {
        return $this->belongsTo(Selection_type::class);
    }
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderby('updated_at', 'DESC')->paginate($limit_count);
    }
}
