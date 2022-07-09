<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $datas = ['created_at', 'updated_at'];
    
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'jenkel', 'alamat', 'hp', 'jurusan', 'email', 'jwlkembali', 'jumlahpin'];
    
    public function dosen()
    {
        return $this->belongsTo('App\Models\Dosen');
    }

    public function matkul()
    {
        return $this->belongsToMany('App\Models\Matkul')->withPivot(['nilai']);
    }
}
