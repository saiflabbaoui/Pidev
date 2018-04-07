<?php
/**
 * Created by PhpStorm.
 * User: jamel
 * Date: 31-Mar-18
 * Time: 6:49 AM
 */

namespace UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use UserBundle\Entity\Mail;

class MailController extends Controller
{

    public function newMail(Mail $mail){
            $message = \Swift_Message::newInstance()
                ->setSubject('Accusé de réception')
                ->setFrom('hela.mejri@esprit.tn')
                ->setTo($mail->getEmail());

        $this->get('mailer')->send($message);
    }



}