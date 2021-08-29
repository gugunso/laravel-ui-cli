<?php

namespace Gugunso\LaravelUiCli\Tests\Unit;

use Gugunso\LaravelUiCli\DefaultParameter;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Gugunso\LaravelUiCli\DefaultParameter
 * Gugunso\LaravelUiCli\Tests\Unit\DefaultParameterTest
 */
class DefaultParameterTest extends TestCase
{
    /** @var $testClassName as test target class name */
    protected $testClassName = DefaultParameter::class;

    /**
     * @covers ::rules
     */
    public function test_rules()
    {
        $targetClass = new $this->testClassName(['opt-name' => 'opt-value']);

        //テスト対象メソッドの実行
        \Closure::bind(
            function () use ($targetClass) {
                $actual = $targetClass->rules();
                //assertions
                $this->assertSame([], $actual);
            },
            $this,
            $targetClass
        )->__invoke();
    }
}
