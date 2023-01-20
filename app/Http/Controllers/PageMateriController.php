<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Models\KnowledgeContent;

class PageMateriController extends Controller
{
    public function index(KnowledgeContent $knowledge_content)
    {
        return view('course.materi', [
            // 'materi' => $module,
            'current_bab' => $knowledge_content->bab,
            'current_sub_bab' => $knowledge_content->sub_bab,
            'bab' => KnowledgeContent::where('sub_bab', 1)->get(),
            'sub_bab' => KnowledgeContent::all(),
        ]);
    }
}
