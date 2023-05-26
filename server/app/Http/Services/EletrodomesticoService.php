<?php

namespace App\Http\Services;

use App\Http\Interfaces\EletroRepositoryInterface;
use App\Http\Interfaces\EletroServiceInterface;

class EletrodomesticoService implements EletroServiceInterface
{

    public function __construct(private EletroRepositoryInterface $eletroRepository)
    {
    }
    public function cadastrarEletrodomestico(array $data)
    {
        $eletro = $this->eletroRepository->cadastrar($data);

        return $eletro;
    }
    public function editarEletrodomestico(array $data, $id)
    {
        $eletro = $this->eletroRepository->editar($data, (int) $id);

        return $eletro;
    }
    public function recuperarEletrodomesticos()
    {
        return $this->eletroRepository->recuperar();
    }
    public function recuperarEletrodomestico($id)
    {
        return $this->eletroRepository->recuperarEletro($id);
    }
    public function deletarEletrodomestico(int $id)
    {
        $this->eletroRepository->deletar((int) $id);
        return true;
    }
}
