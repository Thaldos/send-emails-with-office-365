<?php

namespace Thaldos\SendEmailsWithOffice365;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class EmailSenderOffice365
{
    const USERNAME = 'username';
    const PASSWORD = 'password';

    public function sendEmail()
    {
        // Configuration SMTP for Office 365 :
        $transport = Transport::fromDsn('smtp://' . self::USERNAME . ':' . self::PASSWORD . '@smtp.office365.com:587');

        // Create the email :
        $email = (new Email())
            ->from('from@example.com')
            ->to('to@example.com')
            ->subject('Sujet de l\'email')
            ->text('Contenu texte de l\'email.')
            ->html('<p>Contenu HTML de l\'email.</p>');

        // Send the email :
        $mailer = new Mailer($transport);
        $mailer->send($email);
    }
}

