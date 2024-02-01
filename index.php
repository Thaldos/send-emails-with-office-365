<?php

use Thaldos\SendEmailsWithOffice365\EmailSenderOffice365;

require __DIR__ . '/vendor/autoload.php';

$emailSend = new EmailSenderOffice365();
$emailSend->sendEmail();