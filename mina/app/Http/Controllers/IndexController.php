<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index() {
        return view('client.index');
    }

    public function sendMail(Request $request)
    {
        $config = \SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey(
            'api-key', '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');

        $apiInstance = new \SendinBlue\Client\Api\TransactionalEmailsApi(
            new \GuzzleHttp\Client(),
            $config
        );
        $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
        $sendSmtpEmail['subject'] = 'My {{params.subject}}';
        $sendSmtpEmail['htmlContent'] = '<html><body><h1>This is a transactional email </h1></body></html>';
        $sendSmtpEmail['sender'] = array('name' => 'John Doe', 'email' => env('EMAIL_MINALASHES'));
        $sendSmtpEmail['to'] = array(
            array('email' => 'vungoctu.dev@gmail.com', 'name' => 'Jane Doe')
        );
        $sendSmtpEmail['replyTo'] = array('email' => 'vungoctu.dev@gmail.com', 'name' => 'John Doe');
        $sendSmtpEmail['headers'] = array('Some-Custom-Name' => 'unique-id-1234');
        $sendSmtpEmail['params'] = array('parameter' => 'My param value', 'subject' => 'New Subject');

        try {
            $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
        }
        dd('Mail Send Successfully');
    }
}
