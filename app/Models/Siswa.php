<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Siswa
 * @package App\Models
 * @version January 2, 2023, 9:57 am UTC
 *
 * @property string $Nama
 * @property string $Email
 * @property string $Telepon
 * @property string $NIS
 * @property string $Alamat
 */
class Siswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'siswas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nama',
        'Email',
        'Telepon',
        'NIS',
        'Alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama' => 'string',
        'Email' => 'string',
        'Telepon' => 'string',
        'NIS' => 'string',
        'Alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama' => 'required',
        'Email' => 'required',
        'Telepon' => 'required',
        'NIS' => 'required',
        'Alamat' => 'required'
    ];

    
}
