<?php

namespace Gugunso\LaravelUiCli\Contract;

interface CliCommandInterface
{
    public function handle(): int;
}
