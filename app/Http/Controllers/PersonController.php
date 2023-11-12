<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller {
    function getPerson(Request $request, $name = null) {
        $display = $request->input("display", "profile");
        $limit = $request->input("limit", 10);
        // $all = $request->all();
        // print_r($all);
        // die();
        return response("Hello {$name} - Displaying {$display}, Limit {$limit}", 200);
    }

    function getPersonById(Request $request, $id = null) {
        if ($id == null) {
            return response("Please provide an id", 400);
        } else {
            return response("The Id is {$id}", 200);
        }
    }

    function personAccount(Request $request, $name = null, $accountId = null) {
        return response("Hello {$name}, your account number is {$accountId}", 200);
    }

    function personForm() {
        return view("person");
    }

    function createAPerson(Request $request) {
        $name = $request->input("name");
        $email = $request->input("email");
        $image = $request->file("image");
        // $imageName = $image->getClientOriginalName();
        if ($image) {
            $imageName = time() . "-" . $image->getClientOriginalName();
            $image->move(public_path("images"), $imageName);
        } else {
            $imageName = null;
        }
        return view("newperson", ["name" => $name, "email" => $email, "image" => $imageName]);
        // return view("newperson",compact("name","email"));
        // return response("Person {$name} with email {$email} created",200);
    }
}

//QueryString
