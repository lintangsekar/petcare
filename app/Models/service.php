<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Menyebutkan tabel yang terkait dengan model ini
    protected $table = 'services';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'nama_service',
        'deskripsi',
        // tambahkan kolom lainnya yang Anda perlukan di sini
        'user_id', // ID pengguna sebagai foreign key
    ];

    // Mendefinisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

?>
