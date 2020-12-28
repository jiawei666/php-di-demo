<?php
namespace App;

class UserManager
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register($email, $content)
    {
        return $this->mailer->mail($email, $content);
    }
}