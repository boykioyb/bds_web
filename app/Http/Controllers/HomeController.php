<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Property;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $request;

    /**
     * HomeController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Show the application dashboard.
     * @param $locale
     * @return \Illuminate\Http\Response
     */
    public function index($locale = null)
    {

        $slider = Slider::where('code', 'BANNER_TOP')->first();

        $apartment_hot = Property::where(['status' => STATUS_ACTIVE])
                        ->orderBy('priority', 'DESC')
                        ->orderBy('weight', 'ASC')
                        ->orderBy('created_at', 'DESC')
                        ->limit(5)
                        ->get();


        return view('home.index', compact('slider','apartment_hot'));
    }
}
