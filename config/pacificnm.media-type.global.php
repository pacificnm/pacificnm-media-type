<?php
return array(
    'module' => array(
        'MediaType' => array(
            'name' => 'MediaType',
            'version' => '1.0.0',
            'install' => array(
                'require' => array(),
                'sql' => 'sql/media-type.sql'
            )
        )
    ),
    'controllers' => array(
        'factories' => array(
            'Pacificnm\MediaType\Controller\ConsoleController' => 'Pacificnm\MediaType\Controller\Factory\ConsoleControllerFactory',
            'Pacificnm\MediaType\Controller\CreateController' => 'Pacificnm\MediaType\Controller\Factory\CreateControllerFactory',
            'Pacificnm\MediaType\Controller\DeleteController' => 'Pacificnm\MediaType\Controller\Factory\DeleteControllerFactory',
            'Pacificnm\MediaType\Controller\IndexController' => 'Pacificnm\MediaType\Controller\Factory\IndexControllerFactory',
            'Pacificnm\MediaType\Controller\RestController' => 'Pacificnm\MediaType\Controller\Factory\RestControllerFactory',
            'Pacificnm\MediaType\Controller\UpdateController' => 'Pacificnm\MediaType\Controller\Factory\UpdateControllerFactory',
            'Pacificnm\MediaType\Controller\ViewController' => 'Pacificnm\MediaType\Controller\Factory\ViewControllerFactory'
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'Pacificnm\MediaType\Service\ServiceInterface' => 'Pacificnm\MediaType\Service\Factory\ServiceFactory',
            'Pacificnm\MediaType\Mapper\MysqlMapperInterface' => 'Pacificnm\MediaType\Mapper\Factory\MysqlMapperFactory',
            'Pacificnm\MediaType\Form\Form' => 'Pacificnm\MediaType\Form\Factory\FormFactory'
        )
    ),
    'router' => array(
        'routes' => array(
            'media-type-create' => array(
                'pageTitle' => 'Media Type',
                'pageSubTitle' => 'New',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'media-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'literal',
                'options' => array(
                    'route' => '/admin/media-type/create',
                    'defaults' => array(
                        'controller' => 'Pacificnm\MediaType\Controller\CreateController',
                        'action' => 'index'
                    )
                )
            ),
            'media-type-delete' => array(
                'pageTitle' => 'Media Type',
                'pageSubTitle' => 'Delete',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'media-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/media-type/delete/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\MediaType\Controller\DeleteController',
                        'action' => 'index'
                    )
                )
            ),
            'media-type-index' => array(
                'pageTitle' => 'Media Type',
                'pageSubTitle' => 'Home',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'media-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'literal',
                'options' => array(
                    'route' => '/admin/media-type',
                    'defaults' => array(
                        'controller' => 'Pacificnm\MediaType\Controller\IndexController',
                        'action' => 'index'
                    )
                )
            ),
            'media-type-rest' => array(
                'pageTitle' => 'Media Type',
                'pageSubTitle' => 'Rest',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'media-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'rest',
                'type' => 'segment',
                'options' => array(
                    'route' => '/api/media-type[/:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\MediaType\Controller\RestController'
                    )
                )
            ),
            'media-type-update' => array(
                'pageTitle' => 'Media Type',
                'pageSubTitle' => 'Edit',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'media-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/media-type/update/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\MediaType\Controller\UpdateController',
                        'action' => 'index'
                    )
                )
            ),
            'media-type-view' => array(
                'pageTitle' => 'Media Type',
                'pageSubTitle' => 'View',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'media-type-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/media-type/view/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\MediaType\Controller\ViewController',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'media-type-console-index' => array(
                    'options' => array(
                        'route' => 'media-type',
                        'defaults' => array(
                            'controller' => 'Pacificnm\MediaType\Controller\ConsoleController',
                            'action' => 'index'
                        )
                    )
                )
            )
        )
    ),
    'view_manager' => array(
        'controller_map' => array(
            'Pacificnm\MediaType' => true
        ),
        'template_map' => array(
            'pacificnm/media-type/create/index' => __DIR__ . '/../view/media-type/create/index.phtml',
            'pacificnm/media-type/delete/index' => __DIR__ . '/../view/media-type/delete/index.phtml',
            'pacificnm/media-type/index/index' => __DIR__ . '/../view/media-type/index/index.phtml',
            'pacificnm/media-type/update/index' => __DIR__ . '/../view/media-type/update/index.phtml',
            'pacificnm/media-type/view/index' => __DIR__ . '/../view/media-type/view/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    'acl' => array(
        'default' => array(
            'guest' => array(),
            'administrator' => array(
                'media-type-create',
                'media-type-delete',
                'media-type-index',
                'media-type-update',
                'media-type-view'
            )
        )
    ),
    'menu' => array(
        'default' => array()
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Admin',
                'route' => 'admin-index',
                'useRouteMatch' => true,
                'pages' => array(
                    array(
                        'label' => 'Media',
                        'route' => 'media-index',
                        'useRouteMatch' => true,
                        'pages' => array(
                            array(
                                'label' => 'Media Type',
                                'route' => 'media-type-index',
                                'useRouteMatch' => true,
                                'pages' => array(
                                    array(
                                        'label' => 'View',
                                        'route' => 'media-type-view',
                                        'useRouteMatch' => true,
                                        'pages' => array(
                                            array(
                                                'label' => 'Edit',
                                                'route' => 'media-type-update',
                                                'useRouteMatch' => true
                                            ),
                                            array(
                                                'label' => 'Delete',
                                                'route' => 'media-type-delete',
                                                'useRouteMatch' => true
                                            )
                                        )
                                    ),
                                    array(
                                        'label' => 'New',
                                        'route' => 'media-type-create',
                                        'useRouteMatch' => true
                                    )
                                )
                            )
                        )
                    )
                )
                
            )
        )
    )
);