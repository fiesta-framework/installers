<?php
namespace Composer\Installers;
class PikiaInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'plugins/{$name}/',
        'docs'      => '{$name}/',
    );
}
