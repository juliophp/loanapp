<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


class PaymentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
      $data = array("url" => "http://68.169.60.38:89/students/loans/".$id, "amount" => 1500,
      "transref" => $id.time(), "terminalId" => "STUDENTLOAN_EFS" );
      $json = json_encode($data);
      $ch = curl_init("https://naira.com/webapi/stanbicpay.php");
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      $response = curl_exec($ch);
      curl_close($ch);
      echo $response;
    }
}
