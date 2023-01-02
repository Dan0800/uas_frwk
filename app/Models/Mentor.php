<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Mentor
 * @package App\Models
 * @version January 2, 2023, 9:51 am UTC
 *
 * @property string $Nama
 * @property string $Email
 * @property string $Telepon
 * @property string $alamat
 * @property integer $Umur
 */
class Mentor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mentors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nama',
        'Email',
        'Telepon',
        'alamat',
        'Umur'
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
        'alamat' => 'string',
        'Umur' => 'integer'
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
        'alamat' => 'required',
        'Umur' => 'required'
    ];

    
}
