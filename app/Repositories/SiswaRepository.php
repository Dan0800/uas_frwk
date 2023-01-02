<?php

namespace App\Repositories;

use App\Models\Siswa;
use App\Repositories\BaseRepository;

/**
 * Class SiswaRepository
 * @package App\Repositories
 * @version January 2, 2023, 9:57 am UTC
*/

class SiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama',
        'Email',
        'Telepon',
        'NIS',
        'Alamat'
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
        return Siswa::class;
    }
}
