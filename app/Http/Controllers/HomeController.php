<?php

namespace App\Http\Controllers;

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
        $slider = Slider::where(['code'=> 'BANNER_TOP'])->first();
        return view('home.index', compact('slider'));
    }
}
