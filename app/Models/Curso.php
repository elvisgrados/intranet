<?php
/*namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model{
    use HasFactory;

    protected $table = 'cursos'; // nombre exacto de la tabla
    protected $primaryKey = 'id_curso'; // clave primaria de tu tabla
    public $timestamps = false; // tu tabla no tiene created_at ni updated_at

    protected $fillable = [
        'nombre_curso'
    ];

    public function docentes()
    {
        // Relación inversa: un curso puede ser dictado por muchos docentes
        return $this->belongsToMany(Docente::class, 'docente_curso', 'id_curso', 'id_docente')
                    ->withPivot('ciclo');
    }
}*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey = 'id_curso';
    protected $fillable = ['nombre_curso'];
    public function docentes()
    {
        return $this->belongsToMany(
            Docente::class,
            'docente_curso',
            'id_curso',
            'id_docente'
        )->withPivot('ciclo');
    }
}