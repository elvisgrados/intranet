<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes'; // nombre exacto de la tabla
    protected $primarykey = 'id_docente';
    protected $fillable = [
        'nombres',
        'apellidos',
        'correo_academico',
        'telefono',
        'foto'
    ];
    public function cursos(){
        return $this->belongsToMany(
            Curso::class,      // modelo relacionado
            'docente_curso',   // tabla pivote
            'id_docente',      // columna en pivote para el docente
            'id_curso'         // columna en pivote para el curso
        )->withPivot('ciclo');
}
}
