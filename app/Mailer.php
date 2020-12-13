<?php
namespace App;


class Mailer
{
    public function mail($recipient, $content)
    {
        var_dump('email', $recipient);
        var_dump('content', $content);
    }
}