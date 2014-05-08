<?php

namespace Jox\Email;

/**
 * A CEmail class to send simple email messages.
 *
 */
class CEmailTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test 
     *
     * @return void
     *
     */
    public function testCheckAddress() 
    {
        $email = new \Jox\Email\CEmail();

        // Test a valid email address.
        $res = $email->checkAddress('whatever@example.com');
        $exp = 'whatever@example.com';
        $this->assertEquals($res, $exp, "Email address validation failed.");

        // Test for FALSE on an invalid email address.
        $res = $email->checkAddress('whatever@example');
        $this->assertFalse($res, "Invalid email address was not returnded as FALSE.");
    }



    /**
     * Test 
     *
     * @return void
     *
     */
    public function testSendEmail() 
    {
        $email = new \Jox\Email\CEmail();

        // Test with invalid email addresses.
        $res = $email->sendEmail();
        $exp = '! Email address not valid !';
        $this->assertEquals($res, $exp, "Invalid email address didn't stop the sendEmail.");
    }
}