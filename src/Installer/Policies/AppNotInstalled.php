<?php

namespace App\Installer\Policies;

class AppNotInstalled extends BasePolicy
{
    public function allows($param = null)
    {
        if (is_dir($this->config->os('install_dir') . DIRECTORY_SEPARATOR . 'app')) {
            $this->throwError('UNIT3D-Community-Edition already installed ... Exiting installer');
        }
    }
}