<?php
/**
 * Runner file for the Hexlet PHP project.
 * This file contains the logic for running the application.
 *
 * PHP Version 8.3.12
 *
 * @category Application
 * @package  HexletPhp
 * @author   Ruslan Lakazov <lakazov77@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/rusik09/hexlet-git.git
 */


namespace Hexlet\Php\Runner;

/**
 * Executes the core logic of the application.
 *
 * @return void
 */
function run()
{
    $collection = collect(['taylor', 'abigail', 'ivan'])->map(
        function ($name) {
            return strtoupper($name);
        }
    );

    return $collection;
}
