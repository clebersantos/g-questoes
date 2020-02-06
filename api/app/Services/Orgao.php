<?php

namespace App\Services;

use App\Models\Orgao;

class OrgaoService extends AbstractService
{
    protected $model;

    public function __construct(Orgao $model)
    {
        $this->model = $model;
    }
}
