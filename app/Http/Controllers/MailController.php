<?php

namespace App\Http\Controllers;

use Mail;

class MailController extends Controller
{
    public function basic_email()
    {
        $data = array('name' => 'Abraham Kivosh');

        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('abrahamkivosh@tbxhost.co.uk', 'Abraham Kivosh')->subject('Laravel Basic Testing Mail');
            $message->from('abrahamkivosh@gmail.com', 'Abraham Kivosh');
        });
        echo 'Basic Email Sent. Check your inbox.';
    }

    public function html_email()
    {
        $data = array('name' => 'Abraham Kivondo');
        Mail::send('mail', $data, function ($message) {
            $message->to('abrahamkivosh@tbxhost.co.uk', 'mnoma')->subject('Coding is the best thing');
            $message->from('abraham.kivondo@students.jkuat.ac.ke', 'abraham.kivondo');
        });
        echo 'HTML Email Sent. Check your inbox.';
    }

    public function attachment_email()
    {
        $data = array('name' => 'Abraham kivondo');
        Mail::send('mail', $data, function ($message) {
            $message->to('abrahamkivosh@gmail.com', 'Code mafia')->subject('Laravel Testing Mail with Attachment');
            $message->attach('C:\Users\yesterday\Desktop\no-image-available.png');
            // $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('informationtechnologyjkuat@gmail.com', 'Information Technology');
        });
        echo 'Email Sent with attachment. Check your inbox.';
    }
}
