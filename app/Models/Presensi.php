<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $table = "presensis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','user_id','tgl','jammasuk','jamkeluar','jamkerja'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
