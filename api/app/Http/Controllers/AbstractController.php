<?php

namespace App\Http\Controllers;

use App\Services\AbstractService;
use Illuminate\Http\Response;

abstract class AbstractController extends Controller
{
    /**
     * @var AbstractService $service
     */
    protected $service;
    protected $model;

    /**
     * @return mixed
     */
    public function index()
    {
        return Response::custom('list', $this->service->all(), Response::HTTP_OK);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Response::custom('list', $this->service->find($id), Response::HTTP_OK);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function save($request)
    {
        return Response::custom('created', $this->service->create($request), Response::HTTP_CREATED);
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function updateAs($request, $id)
    {
        return Response::custom('updated', $this->service->update($request, $id), Response::HTTP_OK);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return Response::custom('deleted', $this->service->destroy($id), Response::HTTP_OK);
    }
}
