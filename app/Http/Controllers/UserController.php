<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Rolemodel;
use App\Models\User;
use Hash;
use Auth;

class UserController extends Controller {

    public function getUserInfo()
    {
        $user = Auth::user();

        if (!$user || !$user->photo) {
            return response()->json(['error' => 'No user found or no photo available'], 404);
        }

        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            'photo' => asset('uploads/photos/' . $user->photo),
        ]);
    }



    public function list() {


        $data[ 'getRecord' ] = User::getRecord();
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
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

// Handle file uploads
$photo = $request->file('photo') ? time() . '_photo.' . $request->photo->extension() : null;
$certificate = $request->file('certificate') ? time() . '_certificate.' . $request->certificate->extension() : null;

if ($photo) {
    $request->photo->move(public_path('uploads/photos'), $photo);
}

if ($certificate) {
    $request->certificate->move(public_path('uploads/certificates'), $certificate);
}


        $user = new User;
        $user->name = trim( $request->name );
        $user->email = trim( $request->email );
        $user->password = Hash::make( $request->password );
        $user->photo = $photo;
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
