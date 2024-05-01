<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    /**
     * Overrides created date
     * 
     * @var string
     */
    const CREATED_AT = 'added_date';

    /**
     * Overrides updated date
     * 
     * @var string
     */
    const UPDATED_AT = 'updated_date';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'book';

    /**
     * The primary key associated with the table.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<datetime, float, string, int>
     */
    protected $fillable = [
        'checkin_date',
        'checkin_time',
        'checkin_actual_date',
        'checkin_actual_time',
        'checkout_date',
        'checkout_time',
        'checkout_actual_date',
        'checkout_actual_time',
        'payment',
        'payment_mode',
        'payment_refno',
        'extension_fee',
        'extension_fee_mode',
        'extension_refno',
        'status',
        'added_by',
        'updated_by',
    ];
}
