<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::all();
        return $patients;
    }

    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->type_document_id = $request->type_document_id;
        $patient->document_id = $request->document_id;
        $patient->name = $request->name;
        $patient->surname = $request->surname;
        $patient->sex = $request->sex;

        $patient->save();
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        return $patient;
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($request->id);
        $patient->type_document_id = $request->type_document_id;
        $patient->document_id = $request->document_id;
        $patient->name = $request->name;
        $patient->surname = $request->surname;
        $patient->sex = $request->sex;

        $patient->save();
        
        return $patient;
    }

    public function destroy($id)
    {
        $patient = Patient::destroy($id);
        return $patient;
    }
}
