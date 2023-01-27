<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as Req;

class CustomFuncController extends Controller
{
    
    public function aincrement() {
        $last = '';

        if(Req::is('dashboard/module')) {
            $last = DB::table('modules')->orderBy('id', 'desc')->limit(1)->get();
        }elseif(Req::is('dashboard/category')) {
            $last = DB::table('categories')->orderBy('id', 'desc')->limit(1)->get();
        }

        return $last[0]->id;
        // return $dtnow->getTimestamp();
    }

    public function customid() {
        $category = Req::is('dashboard/category');
        $module = Req::is('dashboard/module');
        

        $dtnow = Carbon::parse();
        return $dtnow->getTimestamp() . ($category ? '010' : ($module ? '020' : ''));

        // return $module;
    }

}
