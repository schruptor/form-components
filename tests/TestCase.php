<?php

namespace schruptor\FormComponents\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use schruptor\FormComponents\FormComponentsServiceProvider;
use Spatie\Snapshots\MatchesSnapshots;

class TestCase extends Orchestra
{
    use MatchesSnapshots;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FormComponentsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }

    private array $escapeCharacters = [
        "\r",
        "\r\n",
        "\n",
        '    ',
    ];

    protected function getSnapshotDirectory(): string
    {
        return __DIR__.DIRECTORY_SEPARATOR.'__snapshots__';
    }

    public function assertComponentSnapshot(string $class, array $componentParameters = [], array $componentAttributes = [], string $slot = ''): void
    {
        $component = resolve($class, $componentParameters);
        $component->withAttributes($componentAttributes);

        $view = $component->resolveView();
        $view->with(array_merge($component->data(), ['slot' => $slot]));
        $this->assertMatchesSnapshot($view->render());
    }
}
