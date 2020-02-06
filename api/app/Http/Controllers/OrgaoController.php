<?php

namespace App\Http\Controllers;

use App\Models\Orgao;
use App\Http\Resources\Orgao as OrgaoResource;
use Illuminate\Http\Request;

class OrgaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrgaoResource::collection(App(Orgao::class)->get());
    }
}
