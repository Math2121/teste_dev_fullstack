<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\EletroServiceInterface;
use App\Http\Requests\CreateEletroRequest;
use App\Http\Requests\EditandoEletroRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EletroController extends Controller
{
    //

    public function __construct(private EletroServiceInterface $eletroService){}
    public function criandoEletro(CreateEletroRequest $request){

        $eletro = $this->eletroService->cadastrarEletrodomestico($request->all());

        return response()->json($eletro, Response::HTTP_CREATED);
    }
    public function editandoEletro(EditandoEletroRequest $request, $id){

        $eletro = $this->eletroService->editarEletrodomestico($request->all(), $id);

        return response()->json($eletro, Response::HTTP_CREATED);
    }
    public function recuperarEletros(){

        $eletros = $this->eletroService->recuperarEletrodomesticos();

        return response()->json($eletros, Response::HTTP_ACCEPTED);
    }


    public function recuperarEletro($id){

        $eletros = $this->eletroService->recuperarEletrodomestico($id);

        return response()->json($eletros, Response::HTTP_ACCEPTED);
    }
    public function deletarEletro($id){

        $this->eletroService->deletarEletrodomestico($id);

        return response()->json(Response::HTTP_ACCEPTED);
    }
}
