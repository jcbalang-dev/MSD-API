<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomRate extends Model
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
    protected $table = 'room_rate';

    /**
     * The primary key associated with the table.
     * 
     * @var string
     */
    protected $primaryKey = 'id';
    
}
