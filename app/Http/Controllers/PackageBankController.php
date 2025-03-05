<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBankRequest;
use App\Http\Requests\UpdateBankRequest;
use App\Models\PackageBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PackageBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = PackageBank::orderByDesc('id')->paginate(10);
        return view('dashboard.layout.bank.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.layout.bank.addBank');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBankRequest $request)
    {
        DB::transaction(function() use($request){
            $validated = $request->validated();


            if($request->hasFile('logo')){
                $logo = $request->file('logo')->store('logo', 'public');
                $validated['logo'] = $logo;
            }

            $book = PackageBank::create($validated);            
        });

        return redirect()->route('admin.bank.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PackageBank $packageBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageBank $bank)
    {
        return view('dashboard.layout.bank.editBank', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBankRequest $request, PackageBank $bank)
    {
        DB::transaction(function() use($request, $bank){
            $validated = $request->validated();


            if($request->hasFile('logo')){
                $logo = $request->file('logo')->store('logo', 'public');
                $validated['logo'] = $logo;
            }

            $bank->update($validated);            
        });

        return redirect()->route('admin.bank.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageBank $bank)
    {
        DB::transaction(function() use($bank){
            $bank->delete();
        });

        return redirect()->route('admin.bank.index');
    }
}
