<?php


namespace App\Helpers;

use App\Models\Category;
use App\Models\ProjectSale;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Helper
{
    public final function queryLog(): array
    {
        DB::enableQueryLog();
        return DB::getQueryLog();
    }

    public final function getAllProjectSale(): array
    {
        $all = ProjectSale::where('status', STATUS_ACTIVE)->get();
        if (empty($all)) {
            return null;
        }
        $result = array();
        foreach ($all as $project) {
            $result[$project->_id]['lang_code'] = $project->lang_code;
            $result[$project->_id]['name'] = $project->name;
            $result[$project->_id]['name_ascii'] = $project->name_ascii;
            $result[$project->_id]['url_alias'] = $project->url_alias;
            $result[$project->_id]['city'] = $project->city;
            $result[$project->_id]['district'] = $project->district;
            $result[$project->_id]['address'] = $project->address;
            $result[$project->_id]['tags'] = $project->tags;
            $result[$project->_id]['short_description'] = $project->short_description;
            $result[$project->_id]['description'] = $project->description;
            $result[$project->_id]['type'] = $project->type;
            $result[$project->_id]['scale'] = $project->scale;
            $result[$project->_id]['priority'] = $project->priority;
            $result[$project->_id]['area'] = $project->area;
            $result[$project->_id]['loc'] = $project->loc;
            $result[$project->_id]['meta_title'] = $project->meta_title;
            $result[$project->_id]['meta_description'] = $project->meta_description;
            $result[$project->_id]['meta_keywords'] = $project->meta_keywords;
            $result[$project->_id]['status'] = $project->status;
            $result[$project->_id]['land_area_of_study'] = $project->land_area_of_study;
            $result[$project->_id]['construction_land_area'] = $project->construction_land_area;
            $result[$project->_id]['construction_density'] = $project->construction_density;
            $result[$project->_id]['files'] = $project->files;
            $result[$project->_id]['created_at'] = Carbon::parse($project->created_at)->format('d-m-Y');
        }
        return $result;
    }

    public function getAllCategories(){
        $all = Category::where('status', STATUS_ACTIVE)->get();
        if (empty($all)) {
            return null;
        }
        $result = array();
        foreach ($all as $cate) {
            $result[$cate->_id]['lang_code'] = $cate->lang_code;
            $result[$cate->_id]['code'] = $cate->code;
            $result[$cate->_id]['name'] = $cate->name;
            $result[$cate->_id]['name_ascii'] = $cate->name_ascii;
            $result[$cate->_id]['url_alias'] = $cate->url_alias;
            $result[$cate->_id]['description'] = $cate->description;
            $result[$cate->_id]['status'] = $cate->status;
            $result[$cate->_id]['weight'] = $cate->weight;
            $result[$cate->_id]['created_at'] = Carbon::parse($cate->created_at)->format('d-m-Y');
        }
        return $result;
    }

    /**
     * @param null $money
     * @return string
     */
    public final function formatMoney(int $money = null): string
    {
        if (strlen($money) < 10) {
            $format = number_format($money, 0, ',', '.');
            $format = round($format, 1) / 1000 . " Tỷ";
        } else {
            $format = number_format($money, 0, ',', '.');
            $format = round($format, 1) . " Tỷ";
        }
        return $format;
    }

    public final function calcDate(string $date1, string $date2): string
    {

        if (empty($date1)) {
            return null;
        }
        if (empty($date2)) {
            $date2 = date('Y-m-d');
        }
        $ts1 = strtotime($date1);
        $ts2 = strtotime($date2);

        $year1 = date('Y', $ts1);
        $year2 = date('Y', $ts2);

        $month1 = date('m', $ts1);
        $month2 = date('m', $ts2);

        $day1 = date('d', $ts1);
        $day2 = date('d', $ts2);

        $diff = (($year2 - $year1) * 12) + ($month2 - $month1);

        if ($diff > 0) {
            return $diff . trans('message.month');
        } else {
            return ($day2 - $day1) . trans('message.day');
        }
    }
}
