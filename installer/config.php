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

return [
    'packages' => [
        'illuminate/support' => [
            'version' => '^7.0|^8.0',
        ],
    ],
    'require-dev' => [
    ],
    'questions' => [
        'framework' => [
            'question' => 'Do you want to use illuminate/support component ?',
            'default' => '1',
            'required' => false,
            'force' => true,
            'custom-package' => true,
            'options' => [
                1 => [
                    'name' => 'yes',
                    'packages' => [
                        'illuminate/support',
                    ],
                ],
            ],
        ],
    ],
];
