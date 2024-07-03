<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Activity;
use App\Models\DataFeed;
use App\Models\Kriteria;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();
        $activities = Activity::latest()->take(10)->get();

        //Menampilkan jumlah data
        $totalProducts = Product::count();
        $totalKriterias = Kriteria::count();
        $totalUsers = User::count();

        return view('pages/dashboard/dashboard', compact('dataFeed', 'activities', 'totalProducts', 'totalKriterias', 'totalUsers'));
    }

    /**
     * Displays the analytics screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function analytics()
    {
        return view('pages/dashboard/analytics');
    }

    /**
     * Displays the fintech screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function fintech()
    {
        return view('pages/dashboard/fintech');
    }


    public function alternative()
    {
        return view('pages/dashboard/alternative');
    }

    public function kriteria()
    {
        $kriterias = Kriteria::all();
        return view('pages/dashboard/kriteria', compact('kriterias'));
    }

    public function penilaian()
    {
        return view('pages/dashboard/penilaian');
    }
    public function laporan()
    {
        return view('pages/dashboard/laporan');
    }
}
