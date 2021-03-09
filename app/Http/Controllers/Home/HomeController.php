<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Repositories\UnicaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use voku\helper\ASCII;

class HomeController extends Controller
{
    private $unica;
    public function __construct(UnicaRepository $unicaRepository)
    {
        $this->unica = $unicaRepository;
    }

    public function index() {
        return view('home.index');
    }

    public function viewRegisterPage() {
        return view('home.register');
    }

    public function viewLoginPage()
    {
        return view('auth.login');
    }

    public function testPage()
    {
        $data = [
            'username' => 'hienhv@vano.vn',
            'password' => 'Vano#2019'
        ];
        $this->unica->getToken($data);
        dd($this->unica->getListCategory());

    }
}
