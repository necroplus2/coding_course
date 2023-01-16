<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Module;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\StoreModuleRequest;
// use App\Http\Requests\UpdateModuleRequest;

class ModuleController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
        $this->middleware('is.admin.menthor');
        $this->middleware('is.menthor')->only('edit');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = '';
        if(auth()->user()->status == 'menthor') {
            $module = DB::table('modules')
                ->join('categories', 'modules.kategori_id', '=', 'categories.id')
                ->join('users', 'modules.menthor_id', '=', 'users.id')
                ->select('modules.*', 'categories.nama_kategori', 'users.nama_lengkap')
                ->where([
                    ['status', '=', 'menthor'],
                    ['users.id', '=', auth()->user()->id]
                ])
                ->get();
        } else if(auth()->user()->status == 'administrator') {
            $module = DB::table('modules')
                ->join('categories', 'modules.kategori_id', '=', 'categories.id')
                ->join('users', 'modules.menthor_id', '=', 'users.id')
                ->select('modules.*', 'categories.nama_kategori', 'users.nama_lengkap')
                ->get();
        }

        return view('dashboard.kelas.index', [
            // 'kelass' => Module::all(),
            'kelass' => $module,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelas.tambah', [
            'kategoris' => Category::all(),
            'menthor' => User::where('status', 'menthor')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModuleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrKelas = $request->validate([
            'judul_kelas' => 'required',
            'kategori_id' => 'required',
            'menthor_id' => 'required'
        ]);

        Module::create($arrKelas);

        return redirect('/dashboard/module');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        return view('course.blog', [
            'kelas' => $module
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('dashboard.kelas.ubah', [
            'kelas' => $module,
            'kategoris' => Category::all(),
            'menthor' => User::where('status', 'menthor')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModuleRequest  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $arrKelas = $request->validate([
            'judul_kelas' => 'required',
            'kategori_id' => 'required',
        ]);

        Module::where('id', $module->id)->update($arrKelas);

        return redirect('/dashboard/module');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        Module::destroy($module->id);

        return redirect('/dashboard/module');
    }
}
