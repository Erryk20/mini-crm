<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Companies
 * @package App\Models
 * @version June 14, 2020, 5:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $employees
 * @property string $email
 * @property string $logo
 * @property string $name
 * @property string $website
 */
class Companies extends Model
{

    public $table = 'companies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'email',
        'logo',
        'name',
        'website'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'id' => 'integer',
        'logo' => 'string',
        'name' => 'string',
        'website' => 'string',
        'email' => 'email'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
//        'name' => 'required',
//        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=100,min_height=100',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Employees::class, 'company_id');
    }

    /**
     * @return array
     */
    public static function list()
    {
        return array_column(self::all(['id', 'name'])->toArray(), 'name', 'id');
    }
}
