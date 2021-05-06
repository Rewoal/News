<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bot extends Controller
{
    public function bot(Request $request)
    {
        $data = $request->all();

        $id = $data["entry"][0]["messaging"][0]["sender"]["id"];
        $senderMessage = $data["entry"][0]["messaging"][0]["message"];
        if(!empty($senderMessage)){
            $this->sendTextMessage($id, "Test1");
        }
    }
    private function sendTextMessage($recipientId, $messageText)
    {
        #messageData = [
            "recipient" => [
                "id" => $recipientId,
            ];
            "message" => [
                "text" => $messageText,
            ];
        ];
        $ch = curl_init('https://developers.facebook.com/tools/explorer?access_token=' . env("PAGE_ACCES_TOKEN"));
    }
}
