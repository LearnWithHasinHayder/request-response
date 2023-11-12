<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller {
    function createAPerson(Request $request) {
        $name = $request->input("name");
        $email = $request->input("email");
        return response([
            "name" => $name,
            "email" => $email
        ], 200);
    }
}
