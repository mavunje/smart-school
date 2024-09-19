<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rolemodel;
use App\Models\PermissionModel;
use App\Models\PermissionRoleModel;
use Auth;

class RoleController extends Controller {
    // LIST METHOD

    public function list () {
        //IF YOU HIDE A GIVEN MENU NOT TO BE ACCESSIBLE EVEN FOR LINK URL

        $permissionRole = PermissionRoleModel::getPermission( 'Role', Auth::user()->role_id );



        if ( empty( $permissionRole ) ) {

            abort( 404 );
        }



        $data[ 'permissionAdd' ] = PermissionRoleModel::getPermission( 'Add role', Auth::user()->role_id );
        $data[ 'permissionEdit' ] = PermissionRoleModel::getPermission( 'Edit role', Auth::user()->role_id );
        $data[ 'permissionDelete' ] = PermissionRoleModel::getPermission( 'Delete role', Auth::user()->role_id );



        $data[ 'getRecord' ] = Rolemodel::getRecord();
        return view( 'pannel.role.list', $data );
    }
    //  ADD METHOD

    public function add () {

        $permissionRole = PermissionRoleModel::getPermission( 'Add role', Auth::user()->role_id );

        if ( empty( $permissionRole ) ) {

            abort( 404 );
        }

        $getPermission = PermissionModel::getRecord();

        $data[ 'getPermission' ] = $getPermission;

        return view( 'pannel.role.add', $data );
    }
    //    INSERT METHOD

    public function insert ( Request $request ) {

        $permissionRole = PermissionRoleModel::getPermission( 'Add role', Auth::user()->role_id );

        if ( empty( $permissionRole ) ) {

            abort( 404 );
        }

        //dd( $request->all() );
        $save = new Rolemodel;
        $save->name = $request->name;
        $save->save();

        PermissionRoleModel::InserUpdateRecord( $request->permission_id, $save->id );

        return redirect( 'pannel/role' )->with( 'success', 'Role Added successfully' );
    }

    // EDIT METHOD

    public function edit ( $id ) {

        $permissionRole = PermissionRoleModel::getPermission( 'Edit role', Auth::user()->role_id );

        if ( empty( $permissionRole ) ) {

            abort( 404 );
        }

        $data[ 'getRecord' ] = Rolemodel::getSingle( $id );
        $data[ 'getPermission' ] = PermissionModel::getRecord();
        $data[ 'getRolePermission' ] =  PermissionRoleModel::getRolePermission( $id );
        return view( 'pannel.role.edit', $data );
    }
    //   UPDATE METHOD

    public function update( $id, Request $request ) {


        $permissionRole = PermissionRoleModel::getPermission( 'Edit role', Auth::user()->role_id );

        if ( empty( $permissionRole ) ) {

            abort( 404 );
        }

        $save = Rolemodel::getSingle( $id ) ;
        $save->name = $request->name;
        $save->save();

        PermissionRoleModel::InserUpdateRecord( $request->permission_id, $save->id );
        return redirect( 'pannel/role' )->with( 'success', 'Role updated successfully' );
    }

    // DELETE METHOD

    public function delete( $id ) {

        $permissionRole = PermissionRoleModel::getPermission( 'Delete role', Auth::user()->role_id );

        if (empty($permissionRole )) {

            abort( 404 );
        }


        $save = Rolemodel::getSingle( $id ) ;
        $save->delete();

        return redirect( 'pannel/role' )->with( 'success', 'Role Deleted Successfully' );
    }

}
