<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testEmail()
    {
        $result = Email::validate('i@admin.com');
        $this->assertTrue($result);
    }
}
