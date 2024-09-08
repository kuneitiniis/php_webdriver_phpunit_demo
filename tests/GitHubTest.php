<?php

namespace Tests;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\TestCase;
use Tests\Support\WebDriverAssertions;

class GitHubTest extends TestCase
{
    use WebDriverAssertions;

    protected string $url = 'https://github.com';

    protected RemoteWebDriver $webDriver;

    public function setUp(): void
    {
        $host = 'http://localhost:4444/wd/hub';
        $this->webDriver = RemoteWebDriver::create(
            $host,
            DesiredCapabilities::firefox()
        );
    }

    public function tearDown(): void
    {
        $this->webDriver->quit();
    }

    public function testHome()
    {
        $this->webDriver->get($this->url);
        $this->assertStringContainsString('GitHub', $this->webDriver->getTitle() ?? '');
    }

    public function testNoAudioAtHome()
    {
        $this->webDriver->get($this->url);
        $this->assertElementsNotFound(WebDriverBy::cssSelector('audio'));
    }
}
