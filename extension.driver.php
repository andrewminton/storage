<?php

    require_once EXTENSIONS . '/storage/data-sources/datasource.storage.php';

    Class extension_Storage extends Extension {

        private static $provides = array();

        public static function registerProviders() {
            self::$provides = array(
                'data-sources' => array(
                    'StorageDatasource' => StorageDatasource::getName()
                )
            );

            return true;
        }

        public static function providerOf($type = null) {
            self::registerProviders();

            if(is_null($type)) return self::$provides;

            if(!isset(self::$provides[$type])) return array();

            return self::$provides[$type];
        }

    }
