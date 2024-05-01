<?php

namespace App\Models;

use Carbon\Carbon;
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

    /**
     * Default attributes
     * 
     * @var array<string>
     */
    protected $attributes = [
        'payment_mode' => 'CASH',
        'extension_fee_mode' => 'CASH',
        'status' => 'CHECKIN',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // defaulting check in date/time
        $this->attributes['checkin_date'] = $this->attributes['checkin_date'] ?? Carbon::now()->format('Y-m-d');
        $this->attributes['checkin_time'] = $this->attributes['checkin_time'] ?? Carbon::now()->format('H:i:s');

        // defaulting actual check in date/time
        $this->attributes['checkin_actual_date'] = $this->attributes['checkin_actual_date'] ?? Carbon::now()->format('Y-m-d');
        $this->attributes['checkin_actual_time'] = $this->attributes['checkin_actual_time'] ?? Carbon::now()->format('H:i:s');

        // defaulting check out date/time
        $this->attributes['checkout_date'] = $this->attributes['checkout_date'] ?? Carbon::now()->format('Y-m-d');
        $this->attributes['checkout_time'] = $this->attributes['checkout_time'] ?? Carbon::now()->format('H:i:s');

        // defaulting actual check out date/time
        $this->attributes['checkout_actual_date'] = $this->attributes['checkout_actual_date'] ?? Carbon::now()->format('Y-m-d');
        $this->attributes['checkout_actual_time'] = $this->attributes['checkout_actual_time'] ?? Carbon::now()->format('H:i:s');
        
        // defaulting initial payment
        $this->attributes['payment'] = 150.00;
        $this->attributes['extension_fee'] = 0.0;

    }
}
