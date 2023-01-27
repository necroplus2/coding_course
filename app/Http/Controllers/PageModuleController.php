<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Chapter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KnowledgeContent;

class PageModuleController extends Controller
{
    public function index(KnowledgeContent $knowledge_content)
    {
        $bab = Module::find(Str::substr(request()->path(),7))->chapters;
        // dd(Str::substr(request()->path(),7));
        return view('course.materi', [
            // 'materi' => $module,
            'bab' => $bab,
            'sub_bab' => KnowledgeContent::all(),
        ]);
    }

    public function description_module() 
    {
        $bab = Module::find(request()->path())->chapters;
        return view('course.desk_kelas', [
            'bab' => $bab
        ]);
    }
}
