<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\KnowledgeContent;

class PageContentController extends Controller
{
    public function index(KnowledgeContent $knowledge_content)
    {
        return view('course.materi', [
            // 'materi' => $module,
            'bab' => Chapter::all(),
            'sub_bab' => KnowledgeContent::all(),
        ]);
    }
}
