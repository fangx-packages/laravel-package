<?php

declare(strict_types=1);

/**
 * Fangx's Packages
 *
 * @link     https://nfangxu.com
 * @document https://pkg.nfangxu.com
 * @contact  nfangxu@gmail.com
 * @author   nfangxu
 * @license  https://pkg.nfangxu.com/license
 */

namespace Installer;

use Composer\Script\Event;

class Script
{
    public static function install(Event $event)
    {
        $installer = new OptionalPackages($event->getIO(), $event->getComposer());

        $installer->io->write('<info>Setting up optional packages</info>');

        $installer->setUpComposerJson();
        $installer->removeDevDependencies();
        $installer->promptForOptionalPackages();
        $installer->updateRootPackage();
        $installer->removeInstallerFromDefinition();
        $installer->finalizePackage();
    }
}
