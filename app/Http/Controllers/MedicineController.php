<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::select('select * from medicine');
        // dd($data);
        return view('admin.medecine',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        DB::table('medicine')
        ->insert(
            [
                'name'=>(string)$req->name,
                'quantity'=>(int)$req->quantity,
                'price'=>(int)$req->price
            ]
        );

        return redirect('/medecine');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('medicine')
        ->where('id',['id'=>$id])
        ->delete();
        return redirect('/medecine');
    }
}
