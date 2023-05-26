<?php


namespace App\Http\Interfaces;
interface EletroServiceInterface
{
	public function cadastrarEletrodomestico(array $data);
    public function editarEletrodomestico(array $data, $id);
    public function recuperarEletrodomesticos();
    public function recuperarEletrodomestico(int $id);
    public function deletarEletrodomestico(int $id);
}
