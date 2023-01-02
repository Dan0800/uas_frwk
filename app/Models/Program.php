<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Program
 * @package App\Models
 * @version January 2, 2023, 11:44 am UTC
 *
 * @property string $Nama
 * @property string $Mentor
 * @property string $Pelajaran
 * @property string $Jenis
 * @property string $Durasi
 */
class Program extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'programs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nama',
        'Mentor',
        'Pelajaran',
        'Jenis',
        'Durasi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama' => 'string',
        'Mentor' => 'string',
        'Pelajaran' => 'string',
        'Jenis' => 'string',
        'Durasi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama' => 'required',
        'Mentor' => 'required',
        'Pelajaran' => 'required',
        'Jenis' => 'required',
        'Durasi' => 'required'
    ];

    
}
