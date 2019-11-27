<?php

namespace App\Http\Controllers;

use App\ActiveVoyage;
use App\DailyProgram;
use App\DailyProgramInformation;
use App\Http\Controllers\Api\BaseController;
use App\Menu;
use App\Parameter;
use App\Publication;
use App\Voyage;
use App\Weather;
use App\WeatherStation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ControlController extends BaseController
{
    public function index()
    {

    }

    public function getWeather()
    {
        $weather = WeatherStation::orderBy('id_ws', 'DESC')
            ->first();
        return $this->sendResponse($weather->toArray(), 'Weather retrieved successfully.');
    }

    public function getDailyProgram()
    {
        $publications = Publication::with(['galleries.files','voyage' => function($query) {
            $query->where('embark', '>=', Carbon::now()->toDateString())
                   ->where('desembark', '<=',Carbon::now()->toDateString());
        }])
            ->where('active', 1)
            ->where('realization_date','>=',Carbon::now())
            ->where('description_en','<>','sighting')
            ->where('description_en','<>','gallery')
            ->get();

        $menu = Menu::where('voyages_id_voyage',$publications[0]->voyage->id)
            ->where('realization_date','<=',Carbon::now())
            ->get();

    /*   $menu->each(function ($item,$key) use ($publications) {
            $publications->push($item);
        }); */
        $dailyProgram = $publications->sortBy('realization_date');

        $message = 'Daily program retrieved successfully.';
        if ($dailyProgram->count() == 0) {
            $message = 'Daily program is empty.';
        }
        return $this->sendResponse($dailyProgram->toArray(), $message);
    }

    public function getSighting()
    {
        $publications = Publication::with(['galleries.files','voyage' => function($query) {
            $query->where('embark', '>=', Carbon::now()->toDateString())
                ->where('desembark', '<=',Carbon::now()->toDateString());
        }])
            ->where('active', 1)
            ->where('realization_date','<=',Carbon::now())
            ->where('description_en','sighting')
            ->get();

        $message = 'Daily program retrieved successfully.';
        if ($publications->count() == 0) {
            $message = 'Daily program is empty.';
        }
        return $this->sendResponse($publications->toArray(), $message);
    }

    public function getTimePage()
    {
        $timePage = Parameter::whereHas('voyage.active_voyage')->first();
        if ($timePage == null)
            $timePage = collect('sin datos' );
        return $this->sendResponse($timePage->toArray(), 'Time retrieved successfully.')  ;
    }

    public function getInformation()
    {
        $information = DailyProgramInformation::all();
        $information = $information->random(1)->first();
        if ($information == null) {
            $information = collect('sin datos');
        }
        return $this->sendResponse($information->toArray(), 'Information retrieved successfully.')  ;
    }

    public function getDailyProgramNew()
    {
        $dailyProgram = DailyProgram::whereHas('voyage.active_voyage')
            ->where('date',Carbon::now()->toDateString())
            ->orderBy('hour','ASC')
            ->get();
        if ($dailyProgram == null) {
            $dailyProgram = collect('sin datos');
        }
        return $this->sendResponse($dailyProgram->toArray(), 'Daily program retrieved successfully.')  ;

    }

    public function getCurrentDaily()
    {
        $dailyProgram = DailyProgram::whereHas('voyage.active_voyage')
            ->where('hour','>=',Carbon::now()->toTimeString())
            ->where('date',Carbon::now()->toDateString())
            ->first();

        if ($dailyProgram == null) {
            $dailyProgram = collect('sin datos');
        }
        return $this->sendResponse($dailyProgram->toArray(), 'Daily program retrieved successfully.')  ;

    }


}
