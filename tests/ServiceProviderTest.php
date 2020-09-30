<?php

namespace Tests;

use KSuzuki2016\LaravelJetstreamLangJa\LaravelJetstreamLangJaServiceProvider ;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class ServiceProviderTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public const PUBLISHE_GROUP = 'jetstream-lang-ja';

    /**
     * @test
     */
    public function testBootRunningInConsole()
    /** @var LaravelJetstreamLangJaServiceProvider|MockInterface $providerMock */
    {
        $appMock = Mockery::mock('Application');
        $appMock->shouldReceive('runningInConsole')
            ->once()
            ->andReturn(true);
        $appMock->shouldReceive('resourcePath')
            ->once()
            ->andReturn('path');
        $providerMock = Mockery::mock(LaravelJetstreamLangJaServiceProvider::class, [$appMock])
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();
        $providerMock->shouldReceive('publishes')
            ->once()
            ->with(Mockery::type('array'), self::PUBLISHE_GROUP);
        $providerMock->boot();
    }

    /**
     * @test
     */
    public function testBootNotRunningInConsole()
        /** @var LaravelJetstreamLangJaServiceProvider|MockInterface $providerMock */
    {
        $appMock = Mockery::mock('Application');
        $appMock->shouldReceive('runningInConsole')
            ->once()
            ->andReturn(false);

        $providerMock = Mockery::mock(LaravelJetstreamLangJaServiceProvider::class, [$appMock])
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();
        $providerMock->shouldNotReceive('publishes');

        $providerMock->boot();
    }
}
