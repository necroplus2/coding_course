<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Chapter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KnowledgeContent;

class PageModuleController extends Controller
{
    public function index(Module $module, KnowledgeContent $knowledge_content)
    {
        // $bab = Module::find(Str::substr(request()->path(),7))->chapters;
        // dd(Str::substr(request()->path(),7));
        return view('course.materi', [
            // 'materi' => $module,
            // 'bab' => $bab,
            'sub_bab' => KnowledgeContent::all(),
            'content' => $knowledge_content
        ]);
    }

    public function description_module(Module $module)
    {
        $bab = Module::find(Str::substr(request()->path(), 6))->chapters;
        return view('course.desk_kelas', [
            'module' => $module,
            'bab' => $bab
        ]);
    }
}
