<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\EletroRepositoryInterface;
use App\Models\Eletrodomestico;
use Illuminate\Support\Facades\DB;

class EletroRepository implements EletroRepositoryInterface
{

    public function __construct(private Eletrodomestico $eletrodomestico)
    {
    }
    public function cadastrar(array $data)
    {
        DB::beginTransaction();
        try {
            $eletro = $this->eletrodomestico->create([
                'nome' => $data['nome'],
                'descricao' => $data['descricao'],
                'marca' => $data['marca'],
                'tensao' => $data['tensao'],
            ]);
            DB::commit();
            return $eletro;
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e->getMessage());
        }
    }
    public function editar(array $data, $id)
    {
        $eletrodomestico = $this->eletrodomestico->find($id);
        DB::beginTransaction();
        try {
            $eletrodomestico->update($data);
            DB::commit();
            return $eletrodomestico;
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e->getMessage());
        }
    }
    public function recuperar()
    {
        return $this->eletrodomestico->all();
    }
    public function recuperarEletro($id)
    {
        return $this->eletrodomestico->find($id);
    }
    public function deletar(int $id)
    {
        DB::beginTransaction();
        try {
            $eletrodomestico = $this->eletrodomestico->find($id);
            $eletrodomestico->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e->getMessage());
        }
    }
}
