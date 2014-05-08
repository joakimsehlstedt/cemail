<?php

namespace Jox\Email;

/**
 * A CEmail class to send simple email messages.
 *
 */
class CEmail
{
    /**
     * Constructor creating a CEmail instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Check email-address for spam content.
     * 
     * @param string|null $address
     * @return string $address of validated email address. Returns FALSE if not valid.
     */
    public function checkAddress($address) {
        $address = filter_var($address, FILTER_SANITIZE_EMAIL);
        if(!filter_var($address, FILTER_VALIDATE_EMAIL)) {
            $address = FALSE;
        }   
        return $address;  
    }

    /**
     * Send simple email message from server.
     *
     * @param string $to the email address to send to.
     * @param string $from the email address in "from" field.
     * @param string $subject the email subject line.
     * @param string $message the email message.
     * 
     * @return string result message.
     */
    public function sendEmail($from = null, $to = null, $subject = null, $message = null) {
        $from = $this->checkAddress($from);
        $to = $this->checkAddress($to);
        $message = wordwrap($message, 70);
        $headers = [
            "MIME-Version: 1.0",
            "Content-type: text/plain; charset=iso-8859-1",
            "From: {$from}",
            "X-Mailer: PHP/".phpversion(),
        ];

        if ($from && $to) {
            $res = mail($to, $subject, $message, implode("\r\n", $headers));
            return $res ? ' Email sent ok.' : ' ! Email NOT sent !';
        } else {
            return '! Email address not valid !';
        }
    }
}