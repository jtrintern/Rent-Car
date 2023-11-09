<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $fillable = [
        'startBook',
        'duration',
        'NIK',
        'fotoktp',
        'carId',
        'userId',
        'bookType',
        'totalCost',
    ];

    public function user() : BelongsTo
    {   
        return $this->belongsTo(User::class  ,'userId', 'id');
    }
    
    public function car() : BelongsTo
    {   
        return $this->belongsTo(Car::class  ,'carId', 'id');
    }
    
    public function type(){
        if ($this->bookType == 0){
            return 'Tanpa supir';
        }else{
            return 'Dengan supir';
        }
    }

    public function until(){
        $current = $this->startBook;
        return date('Y-m-d', strtotime($current. ' + '.$this->duration.' days'));
    }
}
