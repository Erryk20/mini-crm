<?php

namespace App\Repositories;

use App\Models\Employees;
use App\Repositories\BaseRepository;

/**
 * Class EmployeesRepository
 * @package App\Repositories
 * @version June 14, 2020, 5:57 pm UTC
*/

class EmployeesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'email',
        'first_name',
        'last_name',
        'phone'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employees::class;
    }
}
