<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'categoryId',
        'carBrand',
        'carName',
        'coverImage',
        'galleryImage',
        'available',
        'transmisi',
        'totalSit',
        'totalLuggage',
        'noPol',
        'costPerDay',
    ];

    protected $attributes = [

        'available' => '0',

    ];

    protected $casts = [
        'galleryImage' => 'array',
    ];
    
    public $timestamps = true;

    public function category() : BelongsTo
    {   
        return $this->belongsTo(Category::class  ,'categoryId', 'id');
    }

    public function status(){
        if ($this->available == 0){
            return 'Available';
        }else{
            return 'Not Available';
        }
    }
    
    public function transmission(){
        if ($this->transmisi == 0){
            return 'Manual';
        }else{
            return 'Matic';
        }
    }
}
