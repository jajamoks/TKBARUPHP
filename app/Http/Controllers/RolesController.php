<?php
/**
 * Created by PhpStorm.
 * User: GitzJoey
 * Date: 9/5/2016
 * Time: 10:47 PM
 */

namespace App\Http\Controllers;
use App\Role;

class RolesController extends Controller
{
    public function index()
    {
        $role = Role::get();
        return view('roles.index')->with('role', $role);
    }
}