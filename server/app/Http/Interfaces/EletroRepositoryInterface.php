<?php


namespace App\Http\Interfaces;
interface EletroRepositoryInterface
{
	public function cadastrar(array $data);
    public function editar(array $data, int $id);
    public function recuperarEletro($id);
    public function recuperar();
    public function deletar(int $id);
}
