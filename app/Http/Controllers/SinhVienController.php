<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
class SinhVienController extends Controller
{

    public function index()
    {
    	return SinhVien::all();
    }

    public function store(Request $request)
    {
        $sv = new SinhVien();
        $sv->name = $request->name;
        $sv->email = $request->email;
        $sv->phone = $request->phone;
        $sv->save();
        
        return SinhVien::all();

    }

    public function show(Request $request, $id)
    {
        return SinhVien::find($id);
        
    }

    public function update(Request $request, $id)
    {
        $sv = SinhVien::find($id);
        $sv->name = $request->name;
        $sv->email = $request->email;
        $sv->phone = $request->phone;
        $sv->save();
        return SinhVien::all();
    }

    public function destroy($id)
    {
        $sv = SinhVien::findOrFail($id);
        $sv->delete();
        return SinhVien::all();
    }

}
