<?php

namespace Tests\Support;

use Facebook\WebDriver\WebDriverBy;

trait WebDriverAssertions
{
    protected function assertElementsNotFound(WebDriverBy $by): void
    {
        $elements = $this->webDriver->findElements($by);
        if (!empty($elements)) {
            $this->fail("Unexpectedly element was found");
        }
        $this->assertTrue(true);
    }
}
