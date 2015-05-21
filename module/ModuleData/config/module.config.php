<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'ModuleData\Controller\Data' => 'ModuleData\Controller\DataController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'data' => array(
                'type' => 'segment',
                'options' => array(
                  'route' => '/data[/][:action][/:id][/:value1][/:value2][/:value3]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        //'id' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'ModuleData\Controller\Data',
                        'action' => 'index',
                    ),
                ),
            ),
            
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
          __DIR__ . '/../view',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'application_entities' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/ModuleData/Entity')
        ),

            'orm_default' => array(
                'drivers' => array(
                    'ModuleData\Entity' => 'application_entities'
                )
            )
        )
    ),
);