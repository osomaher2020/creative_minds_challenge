<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioController extends Controller
{
    public function index()
    {
        $receiverNumber = "+201030008688";
        $message = "We are Creative Minds";

        try {

            $account_sid = config("services.twilio.sid");
            $auth_token = config("services.twilio.auth_token");
            $twilio_number = config("services.twilio.number");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            dd('SMS Sent Successfully.');

        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
