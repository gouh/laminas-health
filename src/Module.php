<?php

namespace Hangouh\LaminasHealth;

class Module
{
    public function getConfig(): array
    {
        $provider = new ConfigProvider();
        return [
            'service_manager' => $provider(),
        ];
    }
}
