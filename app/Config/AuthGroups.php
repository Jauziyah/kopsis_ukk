<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter Shield.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Config;

use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

class AuthGroups extends ShieldAuthGroups
{
    /**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */
    public string $defaultGroup = 'siswa';

    /**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * An associative array of the available groups in the system, where the keys
     * are the group names and the values are arrays of the group info.
     *
     * Whatever value you assign as the key will be used to refer to the group
     * when using functions such as:
     *      $user->addGroup('superadmin');
     *
     * @var array<string, array<string, string>>
     *
     * @see https://codeigniter4.github.io/shield/quick_start_guide/using_authorization/#change-available-groups for more info
     */
    public array $groups = [
        'admin' => [
            'title'       => 'admin',
            'description' => 'Day to day administrators of the site.',
        ],
        'mitra_kopsis' => [
            'title'       => 'mitra_kopsis',
            'description' => 'Mitra.',
        ],
        'siswa' => [
            'title'       => 'siswa',
            'description' => 'General users of the site.',
        ]
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system.
     *
     * If a permission is not listed here it cannot be used.
     */
    public array $permissions = [
        // mitra kopsis
        'request_produk.mitra_kopsis' => 'mitra bisa merequest produk untuk dipajang',
        'edit_produk.mitra_kopsis' => 'mitra bisa merequest edit produk untuk dipajang',

        // admin
        'admin_access.admin' => 'admin bisa akses page admin',

        // siswa
        'siswa_access.admin' => 'siswa bisa akses page siswa',
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     *
     * This defines group-level permissions.
     */
    public array $matrix = [
        'admin' => ['admin*','siswa.access'],
        'mitra_kopsis' => ['mitra_kopsis*', 'siswa.access'],
        'siswa' => ['siswa*'],
        // 'guru' => ['guru*', 'siswa.access']
    ];
}
