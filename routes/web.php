<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/cadastrar_candidato', function (Request $informacoes) {
     Candidato::create([
        'nome' => $informacoes->nome_candidato ,
        'sobrenome' => $informacoes->sobrenome_candidato ,
        'numero' => $informacoes->numero_candidato 
    ]);
    echo "usuario criado com sucesso";  
    return view('lista_usuarios');
});

 
Route::get('/mostrar_candidato/{id_do_candidato}', function ($id_do_candidato) {
   $candidato = Candidato::findOrFail($id_do_candidato);
   echo $candidato->nome;
   echo "</br>";
   echo $candidato->numero;

});

Route::get('/editar-candidato/{id_do_candidato}', function ($id_do_candidato) {
   $candidato = Candidato::findOrFail($id_do_candidato);
   return view('editar_candidato', ['candidato' => $candidato]);
});

Route::put('/atualizar-candidato/{id_do_candidato}', function (Request $informacoes , $id_do_candidato) { 
   $candidato = Candidato::findOrFail($id_do_candidato);
   $candidato->nome = $informacoes->nome_candidato; 
   $candidato->sobrenome = $informacoes->sobrenome_candidato; 
   $candidato->numero = $informacoes->numero_candidato; 
   $candidato->save();
   echo " candidato atualizado com sucesso!" ;
});


Route::get('/excluir-candidato/{id_do_candidato}', function ($id_do_candidato) { 
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->delete();
    echo "candidato deletado com sucesso";
    echo "Deus seja louvado ,  toda honrra e gloria para Deus ";
    
});


//Exibir candidados
Route::get('/exibir-candidatos', function () {
   $candidatos = Candidato::select('nome', 'sobrenome' , 'numero')->get();

   foreach ($candidatos as $candidato) {
       echo "Nome: " . $candidato->nome . "<br>";
       echo "sobrenome: " . $candidato->sobrenome . "<br>";
       echo "numero: " . $candidato->numero . "<br>";
       echo "<br>";
   }
});


 