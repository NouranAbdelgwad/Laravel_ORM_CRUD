<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Exception;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        return view("index")->with("companies", Company::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("index");
    }

    public function store(Request $request)
    {
        Company::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "address"=>$request->address
        ]);
        return redirect("/")->with("success", "Company has been added Successfully");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("edit")->with("CompanyData", Company::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Company::findOrFail($id)->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "address"=>$request->address
        ]);
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            Company::findOrFail($id)->delete();
            return redirect("/");
        }
        catch(Exception $e){
            return "Failed";
        }
        return "deleted{{$id}}";
    }
    public function archive(){
        return view("archive")->with("trashed", Company::onlyTrashed()->get());
    }
    public function restore($id){
        Company::onlyTrashed()->findOrFail($id)->restore();
        return redirect("archive");
    }
}
