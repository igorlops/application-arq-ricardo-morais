<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReceptiveContact;

class ContactLandingPageController extends Controller
{
    public function __construct(protected ReceptiveContact $receptiveContact)
    {
        //
    }

    public function store(Request $request)
    {
        $response = $this->receptiveContact->contact($request);
        
        return response()->json([
            'message' => $response['message'],
            'status' => $response['status']
        ], $response['code']);
    }
}
