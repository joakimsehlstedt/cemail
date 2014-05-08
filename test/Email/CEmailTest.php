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

        $res = $email->checkAddress('whatever@example.com');
        $exp = 'whatever@example.com';
        $this->assertEquals($res, $exp, "Email address validation failed.");
    }



    /**
     * Test 
     *
     * @return void
     *
     */
    public function testSendEmail() 
    {
    }