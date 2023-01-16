<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KnowledgeContent;

class KnowledgeContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.materi.index', [
            'contents' => KnowledgeContent::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.materi.tambah', [
            'kelass' => \App\Models\Module::all('id', 'judul_kelas')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKnowledgeContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrMateri = $request->validate([
            'bab' => 'required',
            'sub_bab' => 'required',
            'isi' => 'required',
            'kelas_id' => 'required'
        ]);

        KnowledgeContent::create($arrMateri);

        return redirect('/dashboard/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KnowledgeContent  $knowledgeContent
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeContent $knowledgeContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KnowledgeContent  $knowledgeContent
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeContent $content)
    {
        return view('dashboard.materi.ubah', [
            'content' => $content,
            'kelass' => \App\Models\Module::all('id', 'judul_kelas')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKnowledgeContentRequest  $request
     * @param  \App\Models\KnowledgeContent  $knowledgeContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeContent $content)
    {
        $arrMateri = $request->validate([
            'bab' => 'required',
            'sub_bab' => 'required',
            'isi' => 'required',
            'kelas_id'=> 'required'
        ]);

        KnowledgeContent::where('id', $content->id)->update($arrMateri);

        return redirect('/dashboard/content');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KnowledgeContent  $knowledgeContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeContent $content)
    {
        KnowledgeContent::destroy($content->id);

        return redirect('/dashboard/content');
    }
}
