<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Http\Requests\StoreGuardianRequest;
use App\Http\Requests\UpdateGuardianRequest;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GuardianController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guardians = Guardian::all();
        $regions = Region::all();

        return view('admin.guardien.guardien', compact('guardians', 'regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        $guardian = Guardian::all();

        return view('admin.guardien.newGuardien',compact('guardian' ,'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGuardianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empData = [
            'name' => $request->name,
            'phone' => $request->phone,
            'region_id' => $request->region,
            'payment_date' => $request->payment_date,
            'site' => $request->site,
        ];

        Guardian::create($empData);

        return Redirect::to('guardian')->with( 'status', 'Guardian has created success 👌😎!!' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        $regions = Region::all();

        return view('admin.guardien.viewGardian', compact('guardian', 'regions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian)
    {
        $regions = Region::all();
        return view('admin.guardien.editGuardian', compact('guardian', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuardianRequest  $request
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guardian = Guardian::find($id);
        $guardian->name = $request->name;
        $guardian->phone = $request->phone;
        $guardian->payment_date = $request->payment_date;
        $guardian->site = $request->site;
        $guardian->region_id = $request->region;

        $guardian->save();

        return Redirect::to('guardian')->with( 'status', 'Updated Successfully👍👍!!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian)
    {
        $guardian->delete();

        return Redirect::to('guardian')->with( 'status', 'Deleted Successfully👍👍!!' );
    }
}
