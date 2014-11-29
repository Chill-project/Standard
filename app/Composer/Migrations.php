<?php

/*
 * Chill is a software for social workers
 * Copyright (C) 2014 Julien Fastré <julien.fastre@champs-libres.coop>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Chill\Composer;

use Composer\Script\PackageEvent;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Copy migrations files into expected dir
 *
 * @author Julien Fastré <julien.fastre@champs-libres.coop>
 */
class Migrations
{
    
    public static function synchronizeMigrations(PackageEvent $event)
    {
        $fs = new FileSystem();
        $package = $event->getOperation()->getPackage();
        $appMigrationDir = getcwd().'/app/DoctrineMigrations';
        $migrationsDir = $package->getTargetDir().'/Resources/migrations';
        if (file_exists($migrationsDir) && is_dir($migrationsDir)) {
            $migrationsFiles = scandir($migrationsDir);
            foreach ($migrationsFiles as $file) {
                echo "copying $file \n";
                $fs->copy($migrationsDir.'/'.$file, $appMigrationsDir.'/'.$file);
                
            }
        } else {
            echo "$migrationsDir does not exists \n";
        }
        
    }
}
