<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Function to insert new contact in db
     * @method insertPerson
     * @return response
     */
    public function insertPerson(){
        return response('Succesful API', 200)
                    ->header('Content-Type', 'text/plain');
    }
}
