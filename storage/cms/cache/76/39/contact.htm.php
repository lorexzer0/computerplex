<?php 
class Cms5dfd5ca9d1e73060678547_3359ea52723523ce9d932b2fd1235565Class extends Cms\Classes\PageCode
{
public function onContactMailSend() {
    $name = Input::get('name');
    $email = Input::get('email');
    $subject = Input::get('tárgy');
    $content = Input::get('content');

    $vars = ['name' => $name, 'email' => $email, 'content' => $content, 'subject' => $subject];

    // Mail::pretend(); // REMOVE WHEN EVERYTHING IS SET UP

    Mail::send('computerplex::contact.message', $vars, function($message) use ($name,$subject) {

        $message->to('lorexzer0@gmail.com', 'Adminisztrátor');
        $message->subject($subject);

    });

    return [
        'vars' => $vars
    ];
}
}
