<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('client.index');
    }

    public function blog() {
        $post = Post::with('user')->orderBy('id', 'desc')->first();
        $posts = Post::with('user')->orderBy('id', 'desc')->limit(3)->get();
        $comments = [];
        if (isset($post)) {
            $comments = Comment::with('user')->orderBy('id', 'desc')->where('post_id', $post->id)->get();
        }
        return view('client.blog', compact('post', 'posts', 'comments'));
    }

    public function blogDetail(int $id) {
        $post = Post::with('user')->where('id', $id)->first();
        $posts = Post::with('user')->orderBy('id', 'desc')->limit(3)->get();
        $comments = Comment::with('user')->orderBy('id', 'desc')->where('post_id', $id)->get();
        return view('client.blog', compact('post', 'posts', 'comments'));
    }

    public function cmt(Request $request) {
        $cmt = new Comment();
        $cmt->fill($request->all());
        $cmt->save();
        return response()->json(['message' => 'Comment successfully', 'status' => 200]);
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
        $sendSmtpEmail['subject'] = 'User Subscribe';
        $sendSmtpEmail['htmlContent'] = '<html><body><h1>This is a name: ' . $request->name . ' </h1>
                                        <h1>This is a email: ' . $request->email . ' </h1></body></html>';
        $sendSmtpEmail['sender'] = array('name' => 'Hiep Phan', 'email' => env('EMAIL_MINALASHES'));
        $sendSmtpEmail['to'] = array(
            array('email' => env('EMAIL_MINALASHES'), 'name' => 'Hiep Phan')
        );
        $sendSmtpEmail['replyTo'] = array('email' => $request->email, 'name' => $request->name);
        $sendSmtpEmail['headers'] = array('Some-Custom-Name' => 'unique-id-1234');
        $sendSmtpEmail['params'] = array('parameter' => 'My param value', 'subject' => 'New Subject');

        try {
            $apiInstance->sendTransacEmail($sendSmtpEmail);
            return back()->with('success', 'Subscribe successfully');
        } catch (Exception $e) {
            echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function sendMess(Request $request)
    {
        $config = \SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey(
            'api-key', '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');

        $apiInstance = new \SendinBlue\Client\Api\TransactionalEmailsApi(
            new \GuzzleHttp\Client(),
            $config
        );
        $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
        $sendSmtpEmail['subject'] = 'User Send Messages';
        $sendSmtpEmail['htmlContent'] = '<html><body><h1>This is a full-name: ' . $request->fullname . ' </h1>
                                        <h1>This is a email: ' . $request->email . ' </h1>
                                        <h2>This is a messages: ' . $request->message . ' </h2>
                                        </body></html>';
        $sendSmtpEmail['sender'] = array('name' => 'Hiep Phan', 'email' => env('EMAIL_MINALASHES'));
        $sendSmtpEmail['to'] = array(
                    array('email' => env('EMAIL_MINALASHES'), 'name' => 'Hiep Phan')
                );
        $sendSmtpEmail['replyTo'] = array('email' => $request->email, 'name' => $request->fullname);
        $sendSmtpEmail['headers'] = array('Some-Custom-Name' => 'unique-id-1234');
        $sendSmtpEmail['params'] = array('parameter' => 'My param value', 'subject' => 'New Subject');

        try {
            $apiInstance->sendTransacEmail($sendSmtpEmail);
            return back()->with('success', 'Send messages successfully');
        } catch (Exception $e) {
            echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
        }
    }
}
