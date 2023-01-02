<?php

namespace App\Repositories;

use App\Models\Program;
use App\Repositories\BaseRepository;

/**
 * Class ProgramRepository
 * @package App\Repositories
 * @version January 2, 2023, 11:44 am UTC
*/

class ProgramRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama',
        'Mentor',
        'Pelajaran',
        'Jenis',
        'Durasi'
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
        return Program::class;
    }
}
