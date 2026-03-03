<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\News;
use App\Models\Statistic;

class HomeController extends Controller
{
    public function index()
    {
        $statistic = Statistic::first();
        // 2. Kirim ke view (Pastikan namanya 'layanans' sesuai variabel di atas)
        return view('welcome', compact('statistic'));
    }
}
