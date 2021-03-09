<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Repositories\UnicaRepository;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    private $unica;
    public function __construct(UnicaRepository $unicaRepository)
    {
        $this->unica = $unicaRepository;
    }

    public function viewListCategory()
    {
        $categories = $this->unica->getListCategory();
        $data = compact('categories');

    }
}
