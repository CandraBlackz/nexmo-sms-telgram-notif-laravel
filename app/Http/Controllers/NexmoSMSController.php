<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class NexmoSMSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        try {

            $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
            $client = new \Nexmo\Client($basic);

            $receiverNumber = "+62895395500119";
            $message = "This is testing from ItSolutionStuff.com";

            $message = $client->message()->send([
                'to' => $receiverNumber,
                'from' => 'BukuTamuApp',
                'text' => $message
            ]);

            dd('SMS Sent Successfully.');

        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
