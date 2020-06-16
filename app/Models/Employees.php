<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Employees
 * @package App\Models
 * @version June 14, 2020, 5:57 pm UTC
 *
 * @property \App\Models\Company $company
 * @property integer $company_id
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 */
class Employees extends Model
{

    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'company_id',
        'email',
        'first_name',
        'last_name',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'company_id' => 'integer',
        'email' => 'string',
        'first_name' => 'string',
        'id' => 'integer',
        'last_name' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'company_id' => 'required',
//        'first_name' => 'required',
//        'last_name' => 'required',
//        'email' => 'email'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function company()
    {
        return $this->belongsTo(\App\Models\Companies::class, 'company_id');
    }
}
