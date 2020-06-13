<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Services\CurrencyService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{

    public function index(){
        $day = Carbon::createFromTimestamp(strtotime('last weekday' . Carbon::now()));
        $currencies = Currency::date($day->format('Y-m-d'))->simplePaginate(20);

        return view('index', compact('currencies'));
    }

    public function show(Currency $currency)
    {
        $currencies = Currency::name($currency->name)->get();

        return view('show', compact('currencies'));
    }
}
