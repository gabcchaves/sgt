<?php

/* Modelo para a entidade Tarefa. */

namespace App\Models;

// Invocar o ORM Eloquent.
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ["titulo", "completo"];
}
