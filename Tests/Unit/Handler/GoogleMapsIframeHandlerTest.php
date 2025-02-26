<?php

declare(strict_types=1);

namespace IchHabRecht\SocialGdpr\Tests\Unit\Handler;

use IchHabRecht\SocialGdpr\Handler\GoogleMapsIframeHandler;

class GoogleMapsIframeHandlerTest extends AbstractHandlerTest
{
    /**
     * @test
     */
    public function hasMatchesFindsAllGoogleMapsIframes(): void
    {
        $handler = new GoogleMapsIframeHandler();

        $this->assertTrue($handler->hasMatches($this->content));
        $this->assertCount(1, $handler->getMatches());
    }
}
