<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Alumni extends Model
{
    use Sortable;

    protected $table = 'alumni';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_siswa', 'email_siswa', 'jenis_kelamin_siswa', 'no_hp_siswa', 'ttl_siswa', 'foto_siswa', 'alamat_lengkap_rumah_siswa', 'nama_sekolah_siswa', 'jenjang', 'paket', 'pengalaman'];

    public $sortable = ['id', 'jenis_kelamin_siswa', 'jenjang', 'paket'];
}
