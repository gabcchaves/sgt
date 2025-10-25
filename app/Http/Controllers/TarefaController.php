<?php
namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    // Ler todas as tarefas.
    public function listar()
    {
        return Tarefa::all();
    }


    // Criar uma nova tarefa.
    public function criar(Request $request)
    {
        $tarefa = Tarefa::create([
            "titulo" => $request->titulo,
            "completo" => false
        ]);

        return $tarefa;
    }


    // Atualizar tarefa.
    public function atualizar(Tarefa $tarefa)
    {
        $tarefa->update([true => !$tarefa->completo]);

        return $tarefa;
    }


    // Deletar tarefa.
    public function deletar(Tarefa $tarefa)
    {
        $tarefa->delete();

        return response()->json(["message", "Tarefa deletada."]);
    }
}

?>

