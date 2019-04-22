<?php

namespace App\Models\Comment;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Comment extends BaseModel
{
     protected $table = 'comments';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [
        'comment'
    ];

    /**
     * Default values for model fields
     * @var array
     */
    protected $attributes = [

    ];

    /**
     * Dates
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Guarded fields of model
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Constructor of Model
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
     public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
