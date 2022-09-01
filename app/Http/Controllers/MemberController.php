<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller{

  function addingData(Request $req){

    $name = $req->name;
    $address = $req->address;

    $result = Member::insert(['name'=>$name, 'address'=>$address]);

    if ($result == true) {
     return 'one data added';
    } else {
     return 'error found !';
    }
}

  function deletingData(Request $req){

    $id = $req->id;

    $result = Member::where('id',$id)->delete();

    if ($result == true) {
     return 'one data deleted';
    } else {
     return 'error found !';
    }
}

  function updatingData(Request $req){

    $id = $req->id;
    $name = $req->name;
    $address = $req->address;

    $result = Member::where('id',$id)->update(['name'=>$name, 'address'=>$address]);

    if ($result == true) {
     return 'one data updated';
    } else {
     return 'error found !';
    }
}


}