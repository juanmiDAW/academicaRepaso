<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    /** @use HasFactory<\Database\Factories\EvaluacionFactory> */
    use HasFactory;

    protected $fillable = ['evaluaciones'];

    protected $table = 'evaluaciones';

    public function notas(){
        return $this->hasMany(Nota::class);
    }
}
