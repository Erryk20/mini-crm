<?php

namespace App\Repositories;

use App\Models\Companies;

/**
 * Class CompaniesRepository
 * @package App\Repositories
 * @version June 14, 2020, 5:09 pm UTC
*/

class CompaniesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'logo',
        'name',
        'website'
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
        return Companies::class;
    }
}
