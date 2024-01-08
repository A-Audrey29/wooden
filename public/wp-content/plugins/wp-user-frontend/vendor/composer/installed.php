<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'wedevs/wp-user-frontend',
        'dev' => false,
    ),
    'versions' => array(
        'appsero/client' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'type' => 'library',
            'install_path' => __DIR__ . '/../appsero/client',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => '985363ac0bd17d8cfaa45b0e6780ad68ccfe3ca8',
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(
                0 => '2.x-dev',
            ),
            'reference' => '2a9170263fcd9cc4fd0b50917293c21d6c1a5bfe',
            'dev_requirement' => false,
        ),
        'wedevs/wp-user-frontend' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'wedevs/wp-utils' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wedevs/wp-utils',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => 'e5d072e9ed80b8af8fcd3cb0ca7a8a749568fa5f',
            'dev_requirement' => false,
        ),
    ),
);
