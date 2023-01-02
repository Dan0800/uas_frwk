<?php

namespace App\Repositories;

use App\Models\Mentor;
use App\Repositories\BaseRepository;

/**
 * Class MentorRepository
 * @package App\Repositories
 * @version January 2, 2023, 9:51 am UTC
*/

class MentorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama',
        'Email',
        'Telepon',
        'alamat',
        'Umur'
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
        return Mentor::class;
    }
}
