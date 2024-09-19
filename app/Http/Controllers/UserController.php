<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rolemodel;
use App\Models\User;
use Hash;
use Auth;

class UserController extends Controller {

    public function list() {


        $data[ 'getRecord' ] = RoleModel::getRecord();
        return view( 'pannel.user.list',$data );
    }


    public function add() {
        $data[ 'getRole'] = RoleModel::getRecord();
        return view( 'pannel.user.add', $data );
    }

    public function edit($id) {
        $data[ 'getRecord' ] = User::getSingle($id);
        $data[ 'getRole' ] = RoleModel::getRecord();
        return view( 'pannel.user.edit', $data );
    }



    public function insert(Request $request ) {
        request()->validate(   [
            'email' => 'required|email|unique:users',
        ]);

        $user = new User;
        $user->name = trim( $request->name );
        $user->email = trim( $request->email );
        $user->password = Hash::make( $request->password );
        $user->role_id = trim( $request->role_id );
        $user->save();

        return redirect('pannel/user')->with('success','User Added Successfully');
    }

    public function update( $id, Request $request ) {
        $user = User::getSingle( $id );
        $user->name = trim( $request->name );
        if ( !empty( $request->password ) ) {
            $user->password = Hash::make( $request->password );
        }

        $user->role_id = trim( $request->role_id );
        $user->save();

        return redirect( 'pannel/user' )->with( 'success', 'User Successfully Updated' );
    }

public function delete($id)
{
    $user = User::getSingle($id);
    $user->delete();

    return redirect( 'pannel/user' )->with( 'success', 'User Successfully Deleted' );
}

}
