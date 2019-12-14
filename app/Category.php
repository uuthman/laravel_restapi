<?php

namespace App;

use App\Transformers\CategoryTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['name','description'];

    public $transformer = CategoryTransformer::class;

    protected $hidden = [
        'pivot'
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }


}
