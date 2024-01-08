<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\DataPasien;

class HomeController extends Controller
{
    protected $DBModel;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->DBModel = new DataPasien;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function simple_map()
    {
        // Refresh Titik Pointer
        $result = $this->DBModel->DatabaseMap();
        json_encode($result);

        return view('leaflet.simple-map');
    }

    public function marker()
    {
        return view('marker');
    }

    public function getcoordinate()
    {
        return view('leaflet.get_coordinate');
    }

    public function pasien()
    {
        $data = $this->DBModel->DatabaseMap();

        return view('leaflet.data-pasien', [
            'data' => $data
        ]);
    }

    //     public function spots()
    //     {
    //         $centerPoint = Centre_Point::get()->first();
    //         $spot = Spot::get();

    //         return view('frontend.home', [
    //             'centerPoint' => $centerPoint,
    //             'spot' => $spot
    //         ]);
    //     }

    //     public function detailSpot($slug)
    //     {
    //         $spot = Spot::where('slug', $slug)->first();
    //         return view('frontend.detail', ['spot' => $spot]);
    //     }
}
