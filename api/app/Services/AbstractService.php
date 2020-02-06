<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

abstract class AbstractService
{
    /**
     * @return Exception
     */
    public function all()
    {
        try {
            $data = $this->model->orderBy($this->model->getKeyName(), 'DESC');
            return request()->pagination == 'false' ? $data->all() : $data->paginate();

        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            return new Exception('Erro ao listar.' . $exception->getMessage());
        }
    }

    /**
     * @param $id
     * @return Exception
     */
    public function find($id)
    {
        try {
            return $this->model->find($id);
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            return new \Exception('Erro ao detalhar.' . $exception->getMessage());
        }
    }

    /**
     * @param $request
     * @return Exception|string
     */
    public function create($request)
    {
        try {
            $this->model->create($request->all());
            return 'Registro criado com sucesso.';
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return new \Exception('Erro ao criar. Tente novamente.');
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return Exception|string
     */
    public function update(Request $request, $id)
    {
        try {
            $this->model->find($id)->update($request->all());
            return 'Registro atualizado com sucesso.';
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            return new \Exception('Erro ao atualizar. Tente novamente.');
        }
    }

    /**
     * @param $id
     * @return Exception|string
     */
    public function destroy($id)
    {
        try {
            $this->model->find($id)->delete();
            return 'Registro excluído com sucesso.';
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            return new \Exception('Erro ao excluir. Tente novamente.');
        }
    }
}
