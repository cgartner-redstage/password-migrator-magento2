<?php
declare(strict_types=1);
/**
 * File:registration.php
 *
 * @author Maciej Sławik <maciej.slawik@lizardmedia.pl>
 * @copyright Copyright (C) 2018 Lizard Media (http://lizardmedia.pl)
 */

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'LizardMedia_PasswordMigrator',
    __DIR__
);
