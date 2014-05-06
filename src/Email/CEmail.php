<?php

namespace Jox\Email;

/**
 * A CEmail class to send simple email messages.
 *
 */
class CEmail
{

    /**
     * Check email-address for spam content.
     * 
     * @return string $email of validated email address. Returns FALSE if not valid.
     */
    public function spamcheck($email) {
        // Sanitize e-mail address
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Validate e-mail address
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = FALSE;
        }   
        return $email;  
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
        $from = $this->spamcheck($from);
        $to = $this->spamcheck($to);
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