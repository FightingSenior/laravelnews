<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CrudController extends Controller
{
    public function insertData(){
        $data=Request()->except('_token');
        $tbl=decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at']=date('Y-m-d H:i:s');
        DB::table($tbl)->insert($data);
        session::flash('message','Data Inserted Successfully');
        return redirect()->back();
    }

    public function updateData(){
        $data=Request()->except('_token');
        $tbl=decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at']=date('Y-m-d H:i:s');
        DB::table($tbl)->where(key($data),reset($data))->update($data);
        session::flash('message','Data  Updated Successfully');
        return redirect()->back();
    }
}
