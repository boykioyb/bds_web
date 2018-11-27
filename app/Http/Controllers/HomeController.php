<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\ProjectSale;
use App\Models\Property;
use App\Models\Slider;
use Carbon\Carbon;
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
     * @return mixed
     */
    public function index()
    {
        $slider = Slider::where('code', 'BANNER_TOP')->first();

        $apartmentHot = Property::where(['status' => STATUS_ACTIVE])
            ->orderBy('priority', 'DESC')
            ->orderBy('weight', 'ASC')
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->get();

//        foreach ($apartmentHot as $value){
//            $value->start_date = Carbon::parse($value->start_date)->format('d-m-Y');
//            $value->end_date = Carbon::parse($value->end_date)->format('d-m-Y');
//        }

        $allProjectSale = \Helper::getAllProjectSale();
        $allCategories = \Helper::getAllCategories();
        return view('home.index', compact('slider', 'apartmentHot', 'allProjectSale','allCategories'));
    }
}
