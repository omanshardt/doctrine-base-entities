<?php

namespace DoctrineBaseEntities;

return array(
    'service_manager' => array(
        'factories' => array(
            'DoctrineBaseEntities\Service\IntegrityService' => 'DoctrineBaseEntities\Service\Factory\IntegrityServiceFactory'
        ),
        'invokables' => array(
        ),
    ),
);
