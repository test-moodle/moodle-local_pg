<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Hook callbacks for Pages
 *
 * @package    local_pg
 * @copyright  2025 Mohammad Farouk <phun.for.physics@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$callbacks = [
    [
        'hook'     => core\hook\after_config::class,
        'callback' => [\local_pg\hook_callbacks::class, 'after_config'],
        'priority' => 99999,
    ],
    [
        'hook'     => core\hook\navigation\primary_extend::class,
        'callback' => [\local_pg\hook_callbacks::class, 'primary_extend'],
        'priority' => 99999,
    ],
    [
        'hook'     => core\hook\navigation\secondary_extend::class,
        'callback' => [\local_pg\hook_callbacks::class, 'secondary_extend'],
        'priority' => 99999,
    ],
];
