<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class SMSHelper
{
    public static function sendSMS($userId, $smsProvider)
    {
        // Debugging statement
        // dd($smsProvider);

        // Get the API URL based on the selected provider
        $apiUrl = config("sms.providers.$smsProvider.api_url");

        // Make the HTTP POST request to the API URL
        $response = Http::post($apiUrl, [
            'user_id' => $userId,
            'message' => 'Thank you for submitting your reading interval!'
            // Add other necessary data for the SMS request
        ]);
        Log::debug('SMS API Response', ['status_code' => $response->status(), 'response_body' => $response->body()]);

        return $response->json();
    }
}
