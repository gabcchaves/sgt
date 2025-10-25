<?php

/* Modelo para a entidade Tarefa. */

namespace App\Models;

// Invocar o ORM Eloquent.
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ["titulo", "completo"];
}
