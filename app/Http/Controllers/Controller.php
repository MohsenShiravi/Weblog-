<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Morilog\Jalali\CalendarUtils;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ImageUpload($file , $location)
    {
        $filename = time()."-".$file->getClientOriginalName();
        $path = public_path($location);
        $file->move($path,$filename);
        return $location.$filename;
    }

    public function convertDate($data)
    {
        $dateString = CalendarUtils::convertNumbers($data, true);
        return CalendarUtils::createCarbonFromFormat('Y-m-d', $dateString)->format('Y-m-d');
 }

    public function convertToMiladi($data)
    {
        $date = CalendarUtils::strftime('Y-m-d', strtotime($data));
        return CalendarUtils::convertNumbers($date);
 }


}
