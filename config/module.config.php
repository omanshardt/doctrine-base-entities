<?php

namespace Omanshardt\DBE;

return array(
    'service_manager' => array(
        'factories' => array(
            'Omanshardt\DBE\Service\IntegrityService' => 'Omanshardt\DBE\Service\Factory\IntegrityServiceFactory'
        ),
        'invokables' => array(
        ),
    ),
);
