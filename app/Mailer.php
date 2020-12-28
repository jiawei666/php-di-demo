<?php
namespace App;


class Mailer
{
    public function mail($recipient, $content)
    {
        return [
            'email' => $recipient,
            'content' => $content,
        ];
    }
}