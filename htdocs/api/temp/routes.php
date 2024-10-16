<?php $o = array();

// ** THIS IS AN AUTO GENERATED FILE. DO NOT EDIT MANUALLY ** 

//==================== v1 ====================

$o['v1'] = array();

//==== v1 * ====

$o['v1']['*'] = array (
    'explorer' => 
    array (
        'GET' => 
        array (
            'url' => 'explorer/*',
            'className' => 'Luracast\\Restler\\Explorer',
            'path' => 'explorer',
            'methodName' => 'get',
            'arguments' => 
            array (
            ),
            'defaults' => 
            array (
            ),
            'metadata' => 
            array (
                'description' => 'Serve static files for exploring',
                'longDescription' => 'Serves explorer html, css, and js files',
                'url' => 'GET *',
                'package' => 'Luracast\\Restler',
                'access' => 'hybrid',
                'version' => '3.0.0rc6',
                'scope' => 
                array (
                    '*' => 'Luracast\\Restler\\',
                    'stdClass' => 'stdClass',
                ),
                'resourcePath' => 'explorer',
                'classDescription' => 'Class Explorer',
                'param' => 
                array (
                ),
                'return' => 
                array (
                    'type' => 'array',
                ),
            ),
            'accessLevel' => 1,
        ),
    ),
);

//==== v1 explorer/swagger ====

$o['v1']['explorer/swagger'] = array (
    'GET' => 
    array (
        'url' => 'explorer/swagger',
        'className' => 'Luracast\\Restler\\Explorer',
        'path' => 'explorer',
        'methodName' => 'swagger',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => '',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'stdClass',
                'description' => '',
                'children' => 
                array (
                ),
            ),
            'package' => 'Luracast\\Restler',
            'access' => 'hybrid',
            'version' => '3.0.0rc6',
            'scope' => 
            array (
                '*' => 'Luracast\\Restler\\',
                'stdClass' => 'stdClass',
            ),
            'resourcePath' => 'explorer',
            'classDescription' => 'Class Explorer',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 1,
    ),
);

//==== v1 agendaevents/{n0} ====

$o['v1']['agendaevents/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'agendaevents/{id}',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a Agenda Events object',
            'longDescription' => 'Return an array with Agenda Events information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Agenda Events',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'agendaevents/{id}',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update Agenda Event general fields',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of Agenda Event to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'Object',
                    1 => 'false',
                ),
                'description' => 'Object with cleaned properties',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'agendaevents/{id}',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete Agenda Event',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Agenda Event ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 agendaevents ====

$o['v1']['agendaevents'] = array (
    'GET' => 
    array (
        'url' => 'agendaevents',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
            'properties' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.id',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Agenda Events',
            'longDescription' => 'Get a list of Agenda Events',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.id',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field (owners of event). Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'%dol%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of Agenda Events objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'agendaevents',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create Agenda Event object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of Agenda Event',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 agendaevents/index ====

$o['v1']['agendaevents/index'] = array (
    'GET' => 
    array (
        'url' => 'agendaevents',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
            'properties' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.id',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Agenda Events',
            'longDescription' => 'Get a list of Agenda Events',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.id',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field (owners of event). Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'%dol%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of Agenda Events objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0} ====

$o['v1']['contacts/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'includecount' => 1,
            'includeroles' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a contact object',
            'longDescription' => 'Return an array with contact information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includecount',
                    'description' => 'Count and return also number of elements the contact is used as a link for',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includecount',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'includeroles',
                    'description' => 'Includes roles of the contact',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includeroles',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'object',
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'Object',
                    1 => 'false',
                ),
                'description' => 'Updated object, false when issue toupdate',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Contact ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'integer',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/email/{s0} ====

$o['v1']['contacts/email/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'contacts/email/{email}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'getByEmail',
        'arguments' => 
        array (
            'email' => 0,
            'includecount' => 1,
            'includeroles' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a contact object by Email',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'email',
                    'description' => 'Email of contact',
                    'properties' => 
                    array (
                        'type' => 'email',
                        'from' => 'path',
                    ),
                    'label' => 'Email',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includecount',
                    'description' => 'Count and return also number of elements the contact is used as a link for',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includecount',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'includeroles',
                    'description' => 'Includes roles of the contact',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includeroles',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'url' => 'GET email/{email}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Insufficient rights',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User or group not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts ====

$o['v1']['contacts'] = array (
    'GET' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'category' => 5,
            'sqlfilters' => 6,
            'includecount' => 7,
            'includeroles' => 8,
            'properties' => 9,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => 0,
            6 => '',
            7 => 0,
            8 => 0,
            9 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List contacts',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter contacts of (example \'1\' or \'1,2,3\')',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'int',
                    'name' => 'includecount',
                    'description' => 'Count and return also number of elements the contact is used as a link for',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includecount',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'int',
                    'name' => 'includeroles',
                    'description' => 'Includes roles of the contact',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includeroles',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                9 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Contact[]',
                'description' => 'Array of contact objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create contact object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of contact',
            ),
            'suppress' => 'PhanPluginUnknownArrayMethodParamType Luracast limitation',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/index ====

$o['v1']['contacts/index'] = array (
    'GET' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'category' => 5,
            'sqlfilters' => 6,
            'includecount' => 7,
            'includeroles' => 8,
            'properties' => 9,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => 0,
            6 => '',
            7 => 0,
            8 => 0,
            9 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List contacts',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter contacts of (example \'1\' or \'1,2,3\')',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'int',
                    'name' => 'includecount',
                    'description' => 'Count and return also number of elements the contact is used as a link for',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includecount',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'int',
                    'name' => 'includeroles',
                    'description' => 'Includes roles of the contact',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includeroles',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                9 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Contact[]',
                'description' => 'Array of contact objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0}/createUser ====

$o['v1']['contacts/{n0}/createUser'] = array (
    'POST' => 
    array (
        'url' => 'contacts/{id}/createUser',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'createUser',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create an user account object from contact (external user)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of user',
            ),
            'url' => 'POST {id}/createUser',
            'suppress' => 'PhanPluginUnknownArrayMethodParamType Luracast limitation',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0}/categories ====

$o['v1']['contacts/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'contacts/{id}/categories',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get categories for a contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0}/categories/{n1} ====

$o['v1']['contacts/{n0}/categories/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'contacts/{id}/categories/{category_id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'addCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a category to a contact',
            'longDescription' => '',
            'url' => 'PUT {id}/categories/{category_id}',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Insufficient rights',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Category or contact not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'contacts/{id}/categories/{category_id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'deleteCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Remove the link between a category and a contact',
            'longDescription' => '',
            'url' => 'DELETE {id}/categories/{category_id}',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => '401 Insufficient rights',
                    'exception' => NULL,
                ),
                1 => 
                array (
                    'code' => 500,
                    'message' => '404 Category or contact not found',
                    'exception' => NULL,
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents/download ====

$o['v1']['documents/download'] = array (
    'GET' => 
    array (
        'url' => 'documents/download',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'index',
        'arguments' => 
        array (
            'modulepart' => 0,
            'original_file' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Download a document.',
            'longDescription' => ' Note that, this API is similar to using the wrapper link "documents.php" to download a file (used for internal HTML links of documents into application), but with no need to have a session cookie (the token is used instead).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'modulepart',
                    'description' => 'Name of module or area concerned by file download (\'facture\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Modulepart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'original_file',
                    'description' => 'Relative path with filename, relative to modulepart (for example: IN201701-999/IN201701-999.pdf)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Original File',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of documents',
            ),
            'url' => 'GET /download',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for parameter modulepart or original_file',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'File not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents/download/index ====

$o['v1']['documents/download/index'] = array (
    'GET' => 
    array (
        'url' => 'documents/download',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'index',
        'arguments' => 
        array (
            'modulepart' => 0,
            'original_file' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Download a document.',
            'longDescription' => ' Note that, this API is similar to using the wrapper link "documents.php" to download a file (used for internal HTML links of documents into application), but with no need to have a session cookie (the token is used instead).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'modulepart',
                    'description' => 'Name of module or area concerned by file download (\'facture\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Modulepart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'original_file',
                    'description' => 'Relative path with filename, relative to modulepart (for example: IN201701-999/IN201701-999.pdf)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Original File',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of documents',
            ),
            'url' => 'GET /download',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for parameter modulepart or original_file',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'File not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents/builddoc ====

$o['v1']['documents/builddoc'] = array (
    'PUT' => 
    array (
        'url' => 'documents/builddoc',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'builddoc',
        'arguments' => 
        array (
            'modulepart' => 0,
            'original_file' => 1,
            'doctemplate' => 2,
            'langcode' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
            2 => '',
            3 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Build a document.',
            'longDescription' => ' Test sample 1: { "modulepart": "invoice", "original_file": "FA1701-001/FA1701-001.pdf", "doctemplate": "crabe", "langcode": "fr_FR" }. Supported modules: invoice, order, proposal, contract, shipment',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'modulepart',
                    'description' => 'Name of module or area concerned by file download (\'thirdparty\', \'member\', \'proposal\', \'supplier_proposal\', \'order\', \'supplier_order\', \'invoice\', \'supplier_invoice\', \'shipment\', \'project\', ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Modulepart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'original_file',
                    'description' => 'Relative path with filename, relative to modulepart (for example: IN201701-999/IN201701-999.pdf).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Original File',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'doctemplate',
                    'description' => 'Set here the doc template to use for document generation (If not set, use the default template).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Doctemplate',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'langcode',
                    'description' => 'Language code like \'en_US\', \'fr_FR\', \'es_ES\', ... (If not set, use the default language).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Langcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of documents',
            ),
            'url' => 'PUT /builddoc',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for parameter modulepart or original_file',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Invoice, Order, Proposal, Contract or Shipment not found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'Error generating document',
                    'exception' => 'RestException',
                ),
                4 => 
                array (
                    'code' => '501',
                    'message' => 'File not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents ====

$o['v1']['documents'] = array (
    'GET' => 
    array (
        'url' => 'documents',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'getDocumentsListByElement',
        'arguments' => 
        array (
            'modulepart' => 0,
            'id' => 1,
            'ref' => 2,
            'sortfield' => 3,
            'sortorder' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => '',
            3 => '',
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Return the list of documents of a dedicated element (from its ID or Ref)',
            'longDescription' => 'Supported modules: thirdparty, user, member, proposal, order, supplier_order, shipment, invoice, supplier_invoice, product, event, expensereport, knowledgemanagement, category, contract',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'modulepart',
                    'description' => 'Name of module or area concerned (\'thirdparty\', \'member\', \'proposal\', \'order\', \'invoice\', \'supplier_invoice\', \'shipment\', \'project\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Modulepart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of element',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Id',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of element',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ref',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort criteria (\'\',\'fullname\',\'relativename\',\'name\',\'date\',\'size\')',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order (\'asc\' or \'desc\')',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of documents with path',
            ),
            'url' => 'GET /',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for parameter modulepart, id or ref',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Thirdparty, User, Member, Order, Invoice or Proposal not found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'Error while fetching object',
                    'exception' => 'RestException',
                ),
                4 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieve ecm list',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'documents',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'modulepart' => 0,
            'original_file' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a document.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'modulepart',
                    'description' => 'Name of module or area concerned by file download (\'product\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Modulepart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'original_file',
                    'description' => 'Relative path with filename, relative to modulepart (for example: PRODUCT-REF-999/IMAGE-999.jpg)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Original File',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of documents',
            ),
            'url' => 'DELETE /',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for parameter modulepart',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for parameter original_file',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'File not found',
                    'exception' => 'RestException',
                ),
                4 => 
                array (
                    'code' => '500',
                    'message' => 'Error on file operation',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 documents/upload ====

$o['v1']['documents/upload'] = array (
    'POST' => 
    array (
        'url' => 'documents/upload',
        'className' => 'Documents',
        'path' => 'documents',
        'methodName' => 'post',
        'arguments' => 
        array (
            'filename' => 0,
            'modulepart' => 1,
            'ref' => 2,
            'subdir' => 3,
            'filecontent' => 4,
            'fileencoding' => 5,
            'overwriteifexists' => 6,
            'createdirifnotexists' => 7,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => '',
            4 => '',
            5 => '',
            6 => 0,
            7 => 1,
        ),
        'metadata' => 
        array (
            'description' => 'Upload a document.',
            'longDescription' => ' Test sample for invoice: { "filename": "mynewfile.txt", "modulepart": "invoice", "ref": "FA1701-001", "subdir": "", "filecontent": "content text", "fileencoding": "", "overwriteifexists": "0" }. Test sample for supplier invoice: { "filename": "mynewfile.txt", "modulepart": "supplier_invoice", "ref": "FA1701-001", "subdir": "", "filecontent": "content text", "fileencoding": "", "overwriteifexists": "0" }. Test sample for medias file: { "filename": "mynewfile.txt", "modulepart": "medias", "ref": "", "subdir": "image/mywebsite", "filecontent": "Y29udGVudCB0ZXh0Cg==", "fileencoding": "base64", "overwriteifexists": "0" }. Supported modules: invoice, order, supplier_order, task/project_task, product/service, expensereport, fichinter, member, propale, agenda, contact',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'filename',
                    'description' => 'Name of file to create (\'FA1705-0123.txt\')',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Filename',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'modulepart',
                    'description' => 'Name of module or area concerned by file upload (\'product\', \'service\', \'invoice\', \'proposal\', \'project\', \'project_task\', \'supplier_invoice\', \'expensereport\', \'member\', ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Modulepart',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Reference of object (This will define subdir automatically and store submitted file into it)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Ref',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'subdir',
                    'description' => 'Subdirectory (Only if ref not provided)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Subdir',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'filecontent',
                    'description' => 'File content (string with file content. An empty file will be created if this parameter is not provided)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Filecontent',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'fileencoding',
                    'description' => 'File encoding (\'\'=no encoding, \'base64\'=Base 64)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Fileencoding',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'int',
                    'name' => 'overwriteifexists',
                    'description' => 'Overwrite file if exists (1 by default)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Overwriteifexists',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'int',
                    'name' => 'createdirifnotexists',
                    'description' => 'Create subdirectories if the doesn\'t exists (1 by default)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Createdirifnotexists',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'string',
                'description' => '',
            ),
            'url' => 'POST /upload',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Object not found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'Error on file operationw',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'Documents' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'documents',
            'classDescription' => 'API class for receive files',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0} ====

$o['v1']['invoices/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'contact_list' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 1,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a invoice object',
            'longDescription' => 'Return an array with invoice information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'contact_list',
                    'description' => '0:Return array contains all properties, 1:Return array contains just id, -1: Do not return contacts/adddesses',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Contact List',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'Object',
                    1 => 'false',
                ),
                'description' => 'Object with cleaned properties',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/ref/{s0} ====

$o['v1']['invoices/ref/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'invoices/ref/{ref}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'getByRef',
        'arguments' => 
        array (
            'ref' => 0,
            'contact_list' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 1,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an invoice object by ref',
            'longDescription' => 'Return an array with invoice information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of object',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'contact_list',
                    'description' => '0: Returned array of contacts/addresses contains all properties, 1: Return array contains just id, -1: Do not return contacts/adddesses',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Contact List',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET ref/{ref}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/ref_ext/{s0} ====

$o['v1']['invoices/ref_ext/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'invoices/ref_ext/{ref_ext}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'getByRefExt',
        'arguments' => 
        array (
            'ref_ext' => 0,
            'contact_list' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 1,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an invoice object by ref_ext',
            'longDescription' => 'Return an array with invoice information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_ext',
                    'description' => 'External reference of object',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref Ext',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'contact_list',
                    'description' => '0: Returned array of contacts/addresses contains all properties, 1: Return array contains just id, -1: Do not return contacts/adddesses',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Contact List',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET ref_ext/{ref_ext}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices ====

$o['v1']['invoices'] = array (
    'GET' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
            'properties' => 7,
            'pagination_data' => 8,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
            7 => '',
            8 => false,
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of (example \'1\' or \'1,2,3\')',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'bool',
                    'name' => 'pagination_data',
                    'description' => 'If this parameter is set to true the response will include pagination data. Default value is false. Page starts from 0',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Pagination Data',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'Not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create invoice object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of invoice',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/index ====

$o['v1']['invoices/index'] = array (
    'GET' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
            'properties' => 7,
            'pagination_data' => 8,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
            7 => '',
            8 => false,
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of (example \'1\' or \'1,2,3\')',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'bool',
                    'name' => 'pagination_data',
                    'description' => 'If this parameter is set to true the response will include pagination data. Default value is false. Page starts from 0',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Pagination Data',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'Not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/createfromorder/{n0} ====

$o['v1']['invoices/createfromorder/{n0}'] = array (
    'POST' => 
    array (
        'url' => 'invoices/createfromorder/{orderid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'createInvoiceFromOrder',
        'arguments' => 
        array (
            'orderid' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create an invoice using an existing order.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'orderid',
                    'description' => 'Id of the order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Orderid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'POST /createfromorder/{orderid}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/createfromcontract/{n0} ====

$o['v1']['invoices/createfromcontract/{n0}'] = array (
    'POST' => 
    array (
        'url' => 'invoices/createfromcontract/{contractid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'createInvoiceFromContract',
        'arguments' => 
        array (
            'contractid' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create an invoice using a contract.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'contractid',
                    'description' => 'Id of the contract',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Contractid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'POST /createfromcontract/{contractid}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/lines ====

$o['v1']['invoices/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'invoices/{id}/lines',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get lines of an invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of lines',
            ),
            'url' => 'GET {id}/lines',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'invoices/{id}/lines',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to a given invoice',
            'longDescription' => 'Example of POST query : { "desc": "Desc", "subprice": "1.00000000", "qty": "1", "tva_tx": "20.000", "localtax1_tx": "0.000", "localtax2_tx": "0.000", "fk_product": "1", "remise_percent": "0", "date_start": "", "date_end": "", "fk_code_ventilation": 0, "info_bits": "0", "fk_remise_except": null, "product_type": "1", "rang": "-1", "special_code": "0", "fk_parent_line": null, "fk_fournprice": null, "pa_ht": "0.00000000", "label": "", "array_options": [], "situation_percent": "100", "fk_prev_id": null, "fk_unit": null }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'InvoiceLine data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/lines/{n1} ====

$o['v1']['invoices/{n0}/lines/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'invoices/{id}/lines/{lineid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'putLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a line to a given invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'InvoiceLine data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Invoice not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'invoices/{id}/lines/{lineid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'deleteLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Deletes a line of a given invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of the line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'DELETE {id}/lines/{lineid}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/contact/{n1}/{s2} ====

$o['v1']['invoices/{n0}/contact/{n1}/{s2}'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/contact/{contactid}/{type}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'postContact',
        'arguments' => 
        array (
            'id' => 0,
            'contactid' => 1,
            'type' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a contact type of given invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'contactid',
                    'description' => 'Id of contact to add',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Contactid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of the contact (BILLING, SHIPPING, CUSTOMER)',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Type',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'POST {id}/contact/{contactid}/{type}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'invoices/{id}/contact/{contactid}/{type}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'deleteContact',
        'arguments' => 
        array (
            'id' => 0,
            'contactid' => 1,
            'type' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a contact type of given invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'contactid',
                    'description' => 'Row key of the contact in the array contact_ids.',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Contactid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of the contact (BILLING, SHIPPING, CUSTOMER).',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Type',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'DELETE {id}/contact/{contactid}/{type}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/contacts ====

$o['v1']['invoices/{n0}/contacts'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/contacts',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'addContact',
        'arguments' => 
        array (
            'id' => 0,
            'fk_socpeople' => 1,
            'type_contact' => 2,
            'source' => 3,
            'notrigger' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Adds a contact to an invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'fk_socpeople',
                    'description' => 'Id of thirdparty contact (if source = \'external\') or id of user (if source = \'internal\') to link',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Fk Socpeople',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'type_contact',
                    'description' => 'Type of contact (code). Must a code found into table llx_c_type_contact. For example: BILLING',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Type Contact',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'source',
                    'description' => 'external=Contact extern (llx_socpeople), internal=Contact intern (llx_user)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Source',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => 'Disable all triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/contacts',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/settodraft ====

$o['v1']['invoices/{n0}/settodraft'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/settodraft',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'settodraft',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => -1,
        ),
        'metadata' => 
        array (
            'description' => 'Sets an invoice as draft',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => -1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'POST {id}/settodraft',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/validate ====

$o['v1']['invoices/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/validate',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'force_number' => 1,
            'idwarehouse' => 2,
            'notrigger' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an invoice',
            'longDescription' => 'If you get a bad value for param notrigger check that ou provide this in body { "idwarehouse": 0, "notrigger": 0 }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'force_number',
                    'description' => 'force ref invoice',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Force Number',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'Object',
                    1 => 'false',
                ),
                'description' => 'Object with cleaned properties',
            ),
            'url' => 'POST {id}/validate',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/settopaid ====

$o['v1']['invoices/{n0}/settopaid'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/settopaid',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'settopaid',
        'arguments' => 
        array (
            'id' => 0,
            'close_code' => 1,
            'close_note' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
            2 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Sets an invoice as paid',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'close_code',
                    'description' => 'Code filled if we classify to \'Paid completely\' when payment is not complete (for escompte for example)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Close Code',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'close_note',
                    'description' => 'Comment defined if we classify to \'Paid\' when payment is not complete (for escompte for example)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Close Note',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'POST {id}/settopaid',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/settounpaid ====

$o['v1']['invoices/{n0}/settounpaid'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/settounpaid',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'settounpaid',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Sets an invoice as unpaid',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'POST {id}/settounpaid',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/discount ====

$o['v1']['invoices/{n0}/discount'] = array (
    'GET' => 
    array (
        'url' => 'invoices/{id}/discount',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'getDiscount',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get discount from invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET {id}/discount',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/markAsCreditAvailable ====

$o['v1']['invoices/{n0}/markAsCreditAvailable'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/markAsCreditAvailable',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'markAsCreditAvailable',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create a discount (credit available) for a credit note or a deposit.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'POST {id}/markAsCreditAvailable',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '304',
                    'message' => 'Not Modified',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/usediscount/{n1} ====

$o['v1']['invoices/{n0}/usediscount/{n1}'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/usediscount/{discountid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'useDiscount',
        'arguments' => 
        array (
            'id' => 0,
            'discountid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a discount line into an invoice (as an invoice line) using an existing absolute discount',
            'longDescription' => 'Note that this consume the discount.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'discountid',
                    'description' => 'Id of discount',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Discountid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'POST {id}/usediscount/{discountid}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/usecreditnote/{n1} ====

$o['v1']['invoices/{n0}/usecreditnote/{n1}'] = array (
    'POST' => 
    array (
        'url' => 'invoices/{id}/usecreditnote/{discountid}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'useCreditNote',
        'arguments' => 
        array (
            'id' => 0,
            'discountid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add an available credit note discount to payments of an existing invoice.',
            'longDescription' => ' Note that this consume the credit note.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'discountid',
                    'description' => 'Id of a discount coming from a credit note',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Discountid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'POST {id}/usecreditnote/{discountid}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0}/payments ====

$o['v1']['invoices/{n0}/payments'] = array (
    'GET' => 
    array (
        'url' => 'invoices/{id}/payments',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'getPayments',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get list of payments of a given invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'GET {id}/payments',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'invoices/{id}/payments',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'addPayment',
        'arguments' => 
        array (
            'id' => 0,
            'datepaye' => 1,
            'paymentid' => 2,
            'closepaidinvoices' => 3,
            'accountid' => 4,
            'num_payment' => 5,
            'comment' => 6,
            'chqemetteur' => 7,
            'chqbank' => 8,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => '',
            6 => '',
            7 => '',
            8 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add payment line to a specific invoice with the remain to pay as amount.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'datepaye',
                    'description' => 'Payment date',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Datepaye',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'paymentid',
                    'description' => 'Payment mode Id',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                    ),
                    'label' => 'Paymentid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'closepaidinvoices',
                    'description' => 'Close paid invoices',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'choice' => 
                        array (
                            0 => 'yes',
                            1 => 'no',
                        ),
                    ),
                    'label' => 'Closepaidinvoices',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'accountid',
                    'description' => 'Account Id',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                    ),
                    'label' => 'Accountid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'num_payment',
                    'description' => 'Payment number (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Num Payment',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'comment',
                    'description' => 'Note private (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Comment',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'chqemetteur',
                    'description' => 'Payment issuer (mandatory if paymentcode = \'CHQ\')',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Chqemetteur',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'string',
                    'name' => 'chqbank',
                    'description' => 'Issuer bank name (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Chqbank',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/payments',
            'return' => 
            array (
                'type' => 'int',
                'description' => 'Payment ID',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/paymentsdistributed ====

$o['v1']['invoices/paymentsdistributed'] = array (
    'POST' => 
    array (
        'url' => 'invoices/paymentsdistributed',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'addPaymentDistributed',
        'arguments' => 
        array (
            'arrayofamounts' => 0,
            'datepaye' => 1,
            'paymentid' => 2,
            'closepaidinvoices' => 3,
            'accountid' => 4,
            'num_payment' => 5,
            'comment' => 6,
            'chqemetteur' => 7,
            'chqbank' => 8,
            'ref_ext' => 9,
            'accepthigherpayment' => 10,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => '',
            6 => '',
            7 => '',
            8 => '',
            9 => '',
            10 => false,
        ),
        'metadata' => 
        array (
            'description' => 'Add a payment to pay partially or completely one or several invoices.',
            'longDescription' => 'Warning: Take care that all invoices are owned by the same customer. Example of value for parameter arrayofamounts: {"1": {"amount": "99.99", "multicurrency_amount": ""}, "2": {"amount": "", "multicurrency_amount": "10"}}',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'arrayofamounts',
                    'description' => 'Array with id of invoices with amount to pay for each invoice',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Arrayofamounts',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'datepaye',
                    'description' => 'Payment date',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Datepaye',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'paymentid',
                    'description' => 'Payment mode Id',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                    ),
                    'label' => 'Paymentid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'closepaidinvoices',
                    'description' => 'Close paid invoices',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'choice' => 
                        array (
                            0 => 'yes',
                            1 => 'no',
                        ),
                    ),
                    'label' => 'Closepaidinvoices',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'accountid',
                    'description' => 'Account Id',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                    ),
                    'label' => 'Accountid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'num_payment',
                    'description' => 'Payment number (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Num Payment',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'comment',
                    'description' => 'Note private (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Comment',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'chqemetteur',
                    'description' => 'Payment issuer (mandatory if paiementcode = \'CHQ\')',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Chqemetteur',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'string',
                    'name' => 'chqbank',
                    'description' => 'Issuer bank name (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Chqbank',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                9 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_ext',
                    'description' => 'External reference (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Ref Ext',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                10 => 
                array (
                    'type' => 'bool',
                    'name' => 'accepthigherpayment',
                    'description' => 'Accept higher payments that it remains to be paid (optional)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Accepthigherpayment',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST /paymentsdistributed',
            'return' => 
            array (
                'type' => 'int',
                'description' => 'Payment ID',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/payments/{n0} ====

$o['v1']['invoices/payments/{n0}'] = array (
    'PUT' => 
    array (
        'url' => 'invoices/payments/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'putPayment',
        'arguments' => 
        array (
            'id' => 0,
            'num_payment' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Update a payment',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of payment',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'num_payment',
                    'description' => 'Payment number',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Num Payment',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT payments/{id}',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad parameters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Not allowed',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/templates/{n0} ====

$o['v1']['invoices/templates/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'invoices/templates/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'getTemplateInvoice',
        'arguments' => 
        array (
            'id' => 0,
            'contact_list' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 1,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a template invoice object',
            'longDescription' => 'Return an array with invoice information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of template invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'contact_list',
                    'description' => '0:Return array contains all properties, 1:Return array contains just id, -1: Do not return contacts/adddesses',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Contact List',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET templates/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 login ====

$o['v1']['login'] = array (
    'GET' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'loginUnsecured',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. WARNING: You should NEVER use this API, like you should never use the similar API that uses the POST method. This will expose your password. To use the APIs, you should instead set an API token to the user you want to allow to use API (This API token called DOLAPIKEY can be found/set on the user page) and use this token as credential for any API call. From the API explorer, you can enter directly the "DOLAPIKEY" into the field at the top right of the page to get access to any allowed APIs.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'query',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). \'\' means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Entity',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET /',
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
    'POST' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. WARNING: You should NEVER use this API, like you should never use the similar API that uses the POST method. This will expose your password. To use the APIs, you should instead set an API token to the user you want to allow to use API (This API token called DOLAPIKEY can be found/set on the user page) and use this token as credential for any API call. From the API explorer, you can enter directly the "DOLAPIKEY" into the field at the top right of the page to get access to any allowed APIs.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). \'\' means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Entity',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST /',
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 login/index ====

$o['v1']['login/index'] = array (
    'POST' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. WARNING: You should NEVER use this API, like you should never use the similar API that uses the POST method. This will expose your password. To use the APIs, you should instead set an API token to the user you want to allow to use API (This API token called DOLAPIKEY can be found/set on the user page) and use this token as credential for any API call. From the API explorer, you can enter directly the "DOLAPIKEY" into the field at the top right of the page to get access to any allowed APIs.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). \'\' means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Entity',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST /',
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 products/{n0} ====

$o['v1']['products/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'includestockdata' => 1,
            'includesubproducts' => 2,
            'includeparentid' => 3,
            'includetrans' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => false,
            3 => false,
            4 => false,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a product object by id',
            'longDescription' => 'Return an array with product information.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includestockdata',
                    'description' => 'Load also information about stock (slower)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includestockdata',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'bool',
                    'name' => 'includesubproducts',
                    'description' => 'Load information about subproducts',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includesubproducts',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'bool',
                    'name' => 'includeparentid',
                    'description' => 'Load also ID of parent product (if product is a variant of a parent product)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includeparentid',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'bool',
                    'name' => 'includetrans',
                    'description' => 'Load also the translations of product label and description',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includetrans',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'products/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update product.',
            'longDescription' => 'Price will be updated by this API only if option is set on "One price per product" or if PRODUIT_MULTIPRICES is set (1 price per segment) See other APIs for other price modes.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of product to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Updated object',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'products/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Product ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/ref/{s0} ====

$o['v1']['products/ref/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'products/ref/{ref}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getByRef',
        'arguments' => 
        array (
            'ref' => 0,
            'includestockdata' => 1,
            'includesubproducts' => 2,
            'includeparentid' => 3,
            'includetrans' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => false,
            3 => false,
            4 => false,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a product object by ref',
            'longDescription' => 'Return an array with product information.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of element',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includestockdata',
                    'description' => 'Load also information about stock (slower)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includestockdata',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'bool',
                    'name' => 'includesubproducts',
                    'description' => 'Load information about subproducts',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includesubproducts',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'bool',
                    'name' => 'includeparentid',
                    'description' => 'Load also ID of parent product (if product is a variant of a parent product)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includeparentid',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'bool',
                    'name' => 'includetrans',
                    'description' => 'Load also the translations of product label and description',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includetrans',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'url' => 'GET ref/{ref}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/ref_ext/{s0} ====

$o['v1']['products/ref_ext/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'products/ref_ext/{ref_ext}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getByRefExt',
        'arguments' => 
        array (
            'ref_ext' => 0,
            'includestockdata' => 1,
            'includesubproducts' => 2,
            'includeparentid' => 3,
            'includetrans' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => false,
            3 => false,
            4 => false,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a product object by ref_ext',
            'longDescription' => 'Return an array with product information.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_ext',
                    'description' => 'Ref_ext of element',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref Ext',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includestockdata',
                    'description' => 'Load also information about stock (slower)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includestockdata',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'bool',
                    'name' => 'includesubproducts',
                    'description' => 'Load information about subproducts',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includesubproducts',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'bool',
                    'name' => 'includeparentid',
                    'description' => 'Load also ID of parent product (if product is a variant of a parent product)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includeparentid',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'bool',
                    'name' => 'includetrans',
                    'description' => 'Load also the translations of product label and description',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includetrans',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'url' => 'GET ref_ext/{ref_ext}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/barcode/{s0} ====

$o['v1']['products/barcode/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'products/barcode/{barcode}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getByBarcode',
        'arguments' => 
        array (
            'barcode' => 0,
            'includestockdata' => 1,
            'includesubproducts' => 2,
            'includeparentid' => 3,
            'includetrans' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => false,
            3 => false,
            4 => false,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a product object by barcode',
            'longDescription' => 'Return an array with product information.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'barcode',
                    'description' => 'Barcode of element',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Barcode',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includestockdata',
                    'description' => 'Load also information about stock (slower)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includestockdata',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'bool',
                    'name' => 'includesubproducts',
                    'description' => 'Load information about subproducts',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includesubproducts',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'bool',
                    'name' => 'includeparentid',
                    'description' => 'Load also ID of parent product (if product is a variant of a parent product)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includeparentid',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'bool',
                    'name' => 'includetrans',
                    'description' => 'Load also the translations of product label and description',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includetrans',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'url' => 'GET barcode/{barcode}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products ====

$o['v1']['products'] = array (
    'GET' => 
    array (
        'url' => 'products',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'category' => 5,
            'sqlfilters' => 6,
            'ids_only' => 7,
            'variant_filter' => 8,
            'pagination_data' => 9,
            'includestockdata' => 10,
            'properties' => 11,
        ),
        'defaults' => 
        array (
            0 => 't.ref',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => '',
            7 => false,
            8 => 0,
            9 => false,
            10 => 0,
            11 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List products',
            'longDescription' => 'Get a list of products',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.ref',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Use this param to filter list (0 for all, 1 for only product, 2 for only service)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.tobuy:=:0) and (t.tosell:=:1)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'bool',
                    'name' => 'ids_only',
                    'description' => 'Return only IDs of product instead of all properties (faster, above all if list is long)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ids Only',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'int',
                    'name' => 'variant_filter',
                    'description' => 'Use this param to filter list (0 = all, 1=products without variants, 2=parent of variants, 3=variants only)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Variant Filter',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                9 => 
                array (
                    'type' => 'bool',
                    'name' => 'pagination_data',
                    'description' => 'If this parameter is set to true the response will include pagination data. Default value is false. Page starts from 0',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Pagination Data',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                10 => 
                array (
                    'type' => 'int',
                    'name' => 'includestockdata',
                    'description' => 'Load also information about stock (slower)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includestockdata',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                11 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of product objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'products',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create product object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of product',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/index ====

$o['v1']['products/index'] = array (
    'GET' => 
    array (
        'url' => 'products',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'category' => 5,
            'sqlfilters' => 6,
            'ids_only' => 7,
            'variant_filter' => 8,
            'pagination_data' => 9,
            'includestockdata' => 10,
            'properties' => 11,
        ),
        'defaults' => 
        array (
            0 => 't.ref',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => '',
            7 => false,
            8 => 0,
            9 => false,
            10 => 0,
            11 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List products',
            'longDescription' => 'Get a list of products',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.ref',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Use this param to filter list (0 for all, 1 for only product, 2 for only service)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.tobuy:=:0) and (t.tosell:=:1)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'bool',
                    'name' => 'ids_only',
                    'description' => 'Return only IDs of product instead of all properties (faster, above all if list is long)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ids Only',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'int',
                    'name' => 'variant_filter',
                    'description' => 'Use this param to filter list (0 = all, 1=products without variants, 2=parent of variants, 3=variants only)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Variant Filter',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                9 => 
                array (
                    'type' => 'bool',
                    'name' => 'pagination_data',
                    'description' => 'If this parameter is set to true the response will include pagination data. Default value is false. Page starts from 0',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Pagination Data',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                10 => 
                array (
                    'type' => 'int',
                    'name' => 'includestockdata',
                    'description' => 'Load also information about stock (slower)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includestockdata',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                11 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of product objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/subproducts ====

$o['v1']['products/{n0}/subproducts'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/subproducts',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getSubproducts',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of subproducts of the product.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of parent product/service',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET {id}/subproducts',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/subproducts/add ====

$o['v1']['products/{n0}/subproducts/add'] = array (
    'POST' => 
    array (
        'url' => 'products/{id}/subproducts/add',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'addSubproducts',
        'arguments' => 
        array (
            'id' => 0,
            'subproduct_id' => 1,
            'qty' => 2,
            'incdec' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => 1,
        ),
        'metadata' => 
        array (
            'description' => 'Add subproduct.',
            'longDescription' => ' Link a product/service to a parent product/service',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of parent product/service',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'subproduct_id',
                    'description' => 'Id of child product/service',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Subproduct Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'float',
                    'name' => 'qty',
                    'description' => 'Quantity',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Qty',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'incdec',
                    'description' => '1=Increase/decrease stock of child when parent stock increase/decrease',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Incdec',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST {id}/subproducts/add',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/subproducts/remove/{n1} ====

$o['v1']['products/{n0}/subproducts/remove/{n1}'] = array (
    'DELETE' => 
    array (
        'url' => 'products/{id}/subproducts/remove/{subproduct_id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'delSubproducts',
        'arguments' => 
        array (
            'id' => 0,
            'subproduct_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Remove subproduct.',
            'longDescription' => 'Unlink a product/service from a parent product/service',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of parent product/service',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'subproduct_id',
                    'description' => 'Id of child product/service',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Subproduct Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'DELETE {id}/subproducts/remove/{subproduct_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/categories ====

$o['v1']['products/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/categories',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get categories for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/selling_multiprices/per_segment ====

$o['v1']['products/{n0}/selling_multiprices/per_segment'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/selling_multiprices/per_segment',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getCustomerPricesPerSegment',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get prices per segment for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/selling_multiprices/per_segment',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/selling_multiprices/per_customer ====

$o['v1']['products/{n0}/selling_multiprices/per_customer'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/selling_multiprices/per_customer',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getCustomerPricesPerCustomer',
        'arguments' => 
        array (
            'id' => 0,
            'thirdparty_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get prices per customer for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_id',
                    'description' => 'Thirdparty id to filter orders of (example \'1\')',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Id',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/selling_multiprices/per_customer',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/selling_multiprices/per_quantity ====

$o['v1']['products/{n0}/selling_multiprices/per_quantity'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/selling_multiprices/per_quantity',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getCustomerPricesPerQuantity',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get prices per quantity for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/selling_multiprices/per_quantity',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/purchase_prices ====

$o['v1']['products/{n0}/purchase_prices'] = array (
    'POST' => 
    array (
        'url' => 'products/{id}/purchase_prices',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'addPurchasePrice',
        'arguments' => 
        array (
            'id' => 0,
            'qty' => 1,
            'buyprice' => 2,
            'price_base_type' => 3,
            'fourn_id' => 4,
            'availability' => 5,
            'ref_fourn' => 6,
            'tva_tx' => 7,
            'charges' => 8,
            'remise_percent' => 9,
            'remise' => 10,
            'newnpr' => 11,
            'delivery_time_days' => 12,
            'supplier_reputation' => 13,
            'localtaxes_array' => 14,
            'newdefaultvatcode' => 15,
            'multicurrency_buyprice' => 16,
            'multicurrency_price_base_type' => 17,
            'multicurrency_tx' => 18,
            'multicurrency_code' => 19,
            'desc_fourn' => 20,
            'barcode' => 21,
            'fk_barcode_type' => 22,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => NULL,
            6 => NULL,
            7 => NULL,
            8 => 0,
            9 => 0,
            10 => 0,
            11 => 0,
            12 => 0,
            13 => '',
            14 => 
            array (
            ),
            15 => '',
            16 => 0,
            17 => 'HT',
            18 => 1,
            19 => '',
            20 => '',
            21 => '',
            22 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add/Update purchase prices for a product.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'float',
                    'name' => 'qty',
                    'description' => 'Min quantity for which price is valid',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Qty',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'float',
                    'name' => 'buyprice',
                    'description' => 'Purchase price for the quantity min',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Buyprice',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'price_base_type',
                    'description' => 'HT or TTC',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Price Base Type',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'fourn_id',
                    'description' => 'Supplier ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Fourn Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'availability',
                    'description' => 'Product availability',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Availability',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_fourn',
                    'description' => 'Supplier ref',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Ref Fourn',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'float',
                    'name' => 'tva_tx',
                    'description' => 'New VAT Rate (For example 8.5. Should not be a string)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Tva Tx',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 
                    array (
                        0 => 'string',
                        1 => 'float',
                    ),
                    'name' => 'charges',
                    'description' => 'costs affering to product',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Charges',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                9 => 
                array (
                    'type' => 'float',
                    'name' => 'remise_percent',
                    'description' => 'Discount regarding qty (percent)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Remise Percent',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                10 => 
                array (
                    'type' => 'float',
                    'name' => 'remise',
                    'description' => 'Discount regarding qty (amount)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Remise',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                11 => 
                array (
                    'type' => 'int',
                    'name' => 'newnpr',
                    'description' => 'Set NPR or not',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Newnpr',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                12 => 
                array (
                    'type' => 'int',
                    'name' => 'delivery_time_days',
                    'description' => 'Delay in days for delivery (max). May be \'\' if not defined.',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Delivery Time Days',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                13 => 
                array (
                    'type' => 'string',
                    'name' => 'supplier_reputation',
                    'description' => 'Reputation with this product to the defined supplier (empty, FAVORITE, DONOTORDER)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Supplier Reputation',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                14 => 
                array (
                    'type' => 'array',
                    'name' => 'localtaxes_array',
                    'description' => 'Array with localtaxes info array(\'0\'=>type1,\'1\'=>rate1,\'2\'=>type2,\'3\'=>rate2) (loaded by getLocalTaxesFromRate(vatrate, 0, ...) function).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Localtaxes Array',
                    'default' => 
                    array (
                    ),
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                15 => 
                array (
                    'type' => 'string',
                    'name' => 'newdefaultvatcode',
                    'description' => 'Default vat code',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Newdefaultvatcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                16 => 
                array (
                    'type' => 'float',
                    'name' => 'multicurrency_buyprice',
                    'description' => 'Purchase price for the quantity min in currency',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Multicurrency Buyprice',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                17 => 
                array (
                    'type' => 'string',
                    'name' => 'multicurrency_price_base_type',
                    'description' => 'HT or TTC in currency',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Multicurrency Price Base Type',
                    'default' => 'HT',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                18 => 
                array (
                    'type' => 'float',
                    'name' => 'multicurrency_tx',
                    'description' => 'Rate currency',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Multicurrency Tx',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                19 => 
                array (
                    'type' => 'string',
                    'name' => 'multicurrency_code',
                    'description' => 'Currency code',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Multicurrency Code',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                20 => 
                array (
                    'type' => 'string',
                    'name' => 'desc_fourn',
                    'description' => 'Custom description for product_fourn_price',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Desc Fourn',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                21 => 
                array (
                    'type' => 'string',
                    'name' => 'barcode',
                    'description' => 'Barcode',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Barcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                22 => 
                array (
                    'type' => 'int',
                    'name' => 'fk_barcode_type',
                    'description' => 'Barcode type',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Fk Barcode Type',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST {id}/purchase_prices',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'GET' => 
    array (
        'url' => 'products/{id}/purchase_prices',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getPurchasePrices',
        'arguments' => 
        array (
            'id' => 0,
            'ref' => 1,
            'ref_ext' => 2,
            'barcode' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
            2 => '',
            3 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get purchase prices for a product',
            'longDescription' => 'Return an array with product information. TODO implement getting a product by ref or by $ref_ext',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of element',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ref',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_ext',
                    'description' => 'Ref ext of element',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ref Ext',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'barcode',
                    'description' => 'Barcode of element',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Barcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'url' => 'GET {id}/purchase_prices',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/purchase_prices/{n1} ====

$o['v1']['products/{n0}/purchase_prices/{n1}'] = array (
    'DELETE' => 
    array (
        'url' => 'products/{id}/purchase_prices/{priceid}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'deletePurchasePrice',
        'arguments' => 
        array (
            'id' => 0,
            'priceid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete purchase price for a product',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Product ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'priceid',
                    'description' => 'purchase price ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Priceid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE {id}/purchase_prices/{priceid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/purchase_prices ====

$o['v1']['products/purchase_prices'] = array (
    'GET' => 
    array (
        'url' => 'products/purchase_prices',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getSupplierProducts',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'category' => 5,
            'supplier' => 6,
            'sqlfilters' => 7,
        ),
        'defaults' => 
        array (
            0 => 't.ref',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => 0,
            7 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get a list of all purchase prices of products',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.ref',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Use this param to filter list (0 for all, 1 for only product, 2 for only service)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category of product',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'int',
                    'name' => 'supplier',
                    'description' => 'Use this param to filter list by supplier',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Supplier',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.tobuy:=:0) and (t.tosell:=:1)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of product objects',
            ),
            'url' => 'GET purchase_prices',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/attributes ====

$o['v1']['products/attributes'] = array (
    'GET' => 
    array (
        'url' => 'products/attributes',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getAttributes',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
            'properties' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.ref',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get attributes.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.ref',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:color)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '503',
                    'message' => 'Service Unavailable',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET attributes',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'products/attributes',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'addAttributes',
        'arguments' => 
        array (
            'ref' => 0,
            'label' => 1,
            'ref_ext' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add attributes.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Reference of Attribute',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'label',
                    'description' => 'Label of Attribute',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Label',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_ext',
                    'description' => 'Reference of Attribute',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Ref Ext',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST attributes',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/attributes/{n0} ====

$o['v1']['products/attributes/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'products/attributes/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getAttributeById',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get attribute by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET attributes/{id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'products/attributes/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'putAttributes',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update attributes by id.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'PUT attributes/{id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'products/attributes/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'deleteAttributes',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete attributes by id.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'Result of deletion',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'DELETE attributes/{id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/attributes/ref/{s0} ====

$o['v1']['products/attributes/ref/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'products/attributes/ref/{ref}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getAttributesByRef',
        'arguments' => 
        array (
            'ref' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get attributes by ref.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Reference of Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET attributes/ref/{ref}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/attributes/ref_ext/{s0} ====

$o['v1']['products/attributes/ref_ext/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'products/attributes/ref_ext/{ref_ext}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getAttributesByRefExt',
        'arguments' => 
        array (
            'ref_ext' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get attributes by ref_ext.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_ext',
                    'description' => 'External reference of Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref Ext',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET attributes/ref_ext/{ref_ext}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/attributes/values/{n0} ====

$o['v1']['products/attributes/values/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'products/attributes/values/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getAttributeValueById',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get attribute value by id.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute value',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET attributes/values/{id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'products/attributes/values/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'putAttributeValue',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update attribute value.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'PUT attributes/values/{id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'products/attributes/values/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'deleteAttributeValueById',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete attribute value by id.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute value',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'DELETE attributes/values/{id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/attributes/{n0}/values/ref/{s1} ====

$o['v1']['products/attributes/{n0}/values/ref/{s1}'] = array (
    'GET' => 
    array (
        'url' => 'products/attributes/{id}/values/ref/{ref}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getAttributeValueByRef',
        'arguments' => 
        array (
            'id' => 0,
            'ref' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get attribute value by ref.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute value',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of Attribute value',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET attributes/{id}/values/ref/{ref}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'products/attributes/{id}/values/ref/{ref}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'deleteAttributeValueByRef',
        'arguments' => 
        array (
            'id' => 0,
            'ref' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete attribute value by ref.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of Attribute value',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'DELETE attributes/{id}/values/ref/{ref}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/attributes/{n0}/values ====

$o['v1']['products/attributes/{n0}/values'] = array (
    'GET' => 
    array (
        'url' => 'products/attributes/{id}/values',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getAttributeValues',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get all values for an attribute id.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of an Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET attributes/{id}/values',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'products/attributes/{id}/values',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'addAttributeValue',
        'arguments' => 
        array (
            'id' => 0,
            'ref' => 1,
            'value' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add attribute value.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Reference of Attribute value',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'value',
                    'description' => 'Value of Attribute value',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Value',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST attributes/{id}/values',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/attributes/ref/{s0}/values ====

$o['v1']['products/attributes/ref/{s0}/values'] = array (
    'GET' => 
    array (
        'url' => 'products/attributes/ref/{ref}/values',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getAttributeValuesByRef',
        'arguments' => 
        array (
            'ref' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get all values for an attribute ref.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of an Attribute',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET attributes/ref/{ref}/values',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/variants ====

$o['v1']['products/{n0}/variants'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/variants',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getVariants',
        'arguments' => 
        array (
            'id' => 0,
            'includestock' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get product variants.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includestock',
                    'description' => 'Default value 0. If parameter is set to 1 the response will contain stock data of each variant',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includestock',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET {id}/variants',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'products/{id}/variants',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'addVariant',
        'arguments' => 
        array (
            'id' => 0,
            'weight_impact' => 1,
            'price_impact' => 2,
            'price_impact_is_percent' => 3,
            'features' => 4,
            'reference' => 5,
            'ref_ext' => 6,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add variant.',
            'longDescription' => ' "features" is a list of attributes pairs id_attribute=>id_value. Example: array(id_color=>id_Blue, id_size=>id_small, id_option=>id_val_a, ...)',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'float',
                    'name' => 'weight_impact',
                    'description' => 'Weight impact of variant',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Weight Impact',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'float',
                    'name' => 'price_impact',
                    'description' => 'Price impact of variant',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Price Impact',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'bool',
                    'name' => 'price_impact_is_percent',
                    'description' => 'Price impact in percent (true or false)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Price Impact Is Percent',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'array',
                    'name' => 'features',
                    'description' => 'List of attributes pairs id_attribute->id_value. Example: array(id_color=>id_Blue, id_size=>id_small, id_option=>id_val_a, ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Features',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'reference',
                    'description' => 'Customized reference of variant',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Reference',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_ext',
                    'description' => 'External reference of variant',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Ref Ext',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST {id}/variants',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/ref/{s0}/variants ====

$o['v1']['products/ref/{s0}/variants'] = array (
    'GET' => 
    array (
        'url' => 'products/ref/{ref}/variants',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getVariantsByProdRef',
        'arguments' => 
        array (
            'ref' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get product variants by Product ref.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of Product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET ref/{ref}/variants',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'products/ref/{ref}/variants',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'addVariantByProductRef',
        'arguments' => 
        array (
            'ref' => 0,
            'weight_impact' => 1,
            'price_impact' => 2,
            'price_impact_is_percent' => 3,
            'features' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add variant by product ref.',
            'longDescription' => ' "features" is a list of attributes pairs id_attribute=>id_value. Example: array(id_color=>id_Blue, id_size=>id_small, id_option=>id_val_a, ...)',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of Product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Ref',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'float',
                    'name' => 'weight_impact',
                    'description' => 'Weight impact of variant',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Weight Impact',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'float',
                    'name' => 'price_impact',
                    'description' => 'Price impact of variant',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Price Impact',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'bool',
                    'name' => 'price_impact_is_percent',
                    'description' => 'Price impact in percent (true or false)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Price Impact Is Percent',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'array',
                    'name' => 'features',
                    'description' => 'List of attributes pairs id_attribute->id_value. Example: array(id_color=>id_Blue, id_size=>id_small, id_option=>id_val_a, ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Features',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST ref/{ref}/variants',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/variants/{n0} ====

$o['v1']['products/variants/{n0}'] = array (
    'PUT' => 
    array (
        'url' => 'products/variants/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'putVariant',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Put product variants.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Variant',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'PUT variants/{id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'products/variants/{id}',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'deleteVariant',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete product variants.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Variant',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'Result of deletion',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'DELETE variants/{id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 products/{n0}/stock ====

$o['v1']['products/{n0}/stock'] = array (
    'GET' => 
    array (
        'url' => 'products/{id}/stock',
        'className' => 'Products',
        'path' => 'products',
        'methodName' => 'getStock',
        'arguments' => 
        array (
            'id' => 0,
            'selected_warehouse_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get stock data for the product id given.',
            'longDescription' => 'Optionally with $selected_warehouse_id parameter user can get stock of specific warehouse',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Product',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'selected_warehouse_id',
                    'description' => 'ID of warehouse',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Selected Warehouse Id',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET {id}/stock',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'products',
            'classDescription' => 'API class for products',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/actiontriggers ====

$o['v1']['setup/actiontriggers'] = array (
    'GET' => 
    array (
        'url' => 'setup/actiontriggers',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfActionTriggers',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'elementtype' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of Action Triggers.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'elementtype',
                    'description' => 'Type of element (\'adherent\', \'commande\', \'thirdparty\', \'facture\', \'propal\', \'product\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Elementtype',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the type must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'SO-%\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of extra fields',
            ),
            'url' => 'GET actiontriggers',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of action triggers',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/ordering_methods ====

$o['v1']['setup/dictionary/ordering_methods'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/ordering_methods',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getOrderingMethods',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of ordering methods.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment type is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter with. Syntax example "(t.code:=:\'OrderByWWW\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/ordering_methods',
            'return' => 
            array (
                'type' => 'array',
                'description' => '[List of ordering methods]',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving list of ordering methods',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/ordering_origins ====

$o['v1']['setup/dictionary/ordering_origins'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/ordering_origins',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getOrderingOrigins',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of ordering origins.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment type is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter with. Syntax example "(t.code:=:\'OrderByWWW\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '[List of ordering reasons]',
            ),
            'url' => 'GET dictionary/ordering_origins',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving list of ordering origins',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/payment_types ====

$o['v1']['setup/dictionary/payment_types'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/payment_types',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getPaymentTypes',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of payments types.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment type is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter with. Syntax example "(t.code:=:\'CHQ\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/payment_types',
            'return' => 
            array (
                'type' => 'array',
                'description' => '[List of payment types]',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving list of payment types',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/regions ====

$o['v1']['setup/dictionary/regions'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/regions',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfRegions',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'country' => 4,
            'filter' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code_region',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of regions.',
            'longDescription' => ' The returned list is sorted by region ID.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code_region',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'country',
                    'description' => 'To filter on country',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Country',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'filter',
                    'description' => 'To filter the regions by name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Filter',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of regions',
            ),
            'url' => 'GET dictionary/regions',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving list of regions',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/regions/{n0} ====

$o['v1']['setup/dictionary/regions/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/regions/{id}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getRegionByID',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get region by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of region',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET dictionary/regions/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'Region not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving region',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/regions/byCode/{s0} ====

$o['v1']['setup/dictionary/regions/byCode/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/regions/byCode/{code}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getRegionByCode',
        'arguments' => 
        array (
            'code' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get region by Code.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'code',
                    'description' => 'Code of region',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Code',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET dictionary/regions/byCode/{code}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'Region not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving region',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/states ====

$o['v1']['setup/dictionary/states'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/states',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfStates',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'country' => 4,
            'filter' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code_departement',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of states/provinces.',
            'longDescription' => ' The names of the states will be translated to the given language if the $lang parameter is provided. The value of $lang must be a language code supported by Dolibarr, for example \'en_US\' or \'fr_FR\'. The returned list is sorted by state ID.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code_departement',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'country',
                    'description' => 'To filter on country',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Country',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'filter',
                    'description' => 'To filter the states by name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Filter',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of states',
            ),
            'url' => 'GET dictionary/states',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving list of states',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/states/{n0} ====

$o['v1']['setup/dictionary/states/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/states/{id}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getStateByID',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get state by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of state',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET dictionary/states/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'State not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving state',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/states/byCode/{s0} ====

$o['v1']['setup/dictionary/states/byCode/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/states/byCode/{code}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getStateByCode',
        'arguments' => 
        array (
            'code' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get state by Code.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'code',
                    'description' => 'Code of state',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Code',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET dictionary/states/byCode/{code}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'State not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving state',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/countries ====

$o['v1']['setup/dictionary/countries'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/countries',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfCountries',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'filter' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of countries.',
            'longDescription' => ' The names of the countries will be translated to the given language if the $lang parameter is provided. The value of $lang must be a language code supported by Dolibarr, for example \'en_US\' or \'fr_FR\'. The returned list is sorted by country ID.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'filter',
                    'description' => 'To filter the countries by name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Filter',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the countries must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of countries',
            ),
            'url' => 'GET dictionary/countries',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving list of countries',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/countries/{n0} ====

$o['v1']['setup/dictionary/countries/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/countries/{id}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getCountryByID',
        'arguments' => 
        array (
            'id' => 0,
            'lang' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get country by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of country',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the name of the country must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET dictionary/countries/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'Country not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving country',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/countries/byCode/{s0} ====

$o['v1']['setup/dictionary/countries/byCode/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/countries/byCode/{code}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getCountryByCode',
        'arguments' => 
        array (
            'code' => 0,
            'lang' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get country by Code.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'code',
                    'description' => 'Code of country (2 characters)',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Code',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the name of the country must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET dictionary/countries/byCode/{code}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'Country not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving country',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/countries/byISO/{s0} ====

$o['v1']['setup/dictionary/countries/byISO/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/countries/byISO/{iso}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getCountryByISO',
        'arguments' => 
        array (
            'iso' => 0,
            'lang' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get country by Iso.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'iso',
                    'description' => 'ISO of country (3 characters)',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Iso',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the name of the country must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET dictionary/countries/byISO/{iso}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'Country not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error retrieving country',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/availability ====

$o['v1']['setup/dictionary/availability'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/availability',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getAvailability',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of delivery times.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Delivery times is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter with.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/availability',
            'return' => 
            array (
                'type' => 'array',
                'description' => '[List of availability]',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of availabilities',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/event_types ====

$o['v1']['setup/dictionary/event_types'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/event_types',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfEventTypes',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'type' => 4,
            'module' => 5,
            'active' => 6,
            'sqlfilters' => 7,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => 1,
            7 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of events types.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'To filter on type of event',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Type',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'module',
                    'description' => 'To filter on module events',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Module',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Event\'s type is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of events types',
            ),
            'url' => 'GET dictionary/event_types',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of events types',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/expensereport_types ====

$o['v1']['setup/dictionary/expensereport_types'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/expensereport_types',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfExpenseReportsTypes',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'module' => 4,
            'active' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => 1,
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of Expense Report types.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'module',
                    'description' => 'To filter on module',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Module',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Event\'s type is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of expense report types',
            ),
            'url' => 'GET dictionary/expensereport_types',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of expense report types',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/contact_types ====

$o['v1']['setup/dictionary/contact_types'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/contact_types',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfContactTypes',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'type' => 4,
            'module' => 5,
            'active' => 6,
            'lang' => 7,
            'sqlfilters' => 8,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => 1,
            7 => '',
            8 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of contacts types.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'To filter on type of contact',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Type',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'module',
                    'description' => 'To filter on module contacts',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Module',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Contact\'s type is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the civility must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of Contacts types',
            ),
            'url' => 'GET dictionary/contact_types',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of contacts types',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/civilities ====

$o['v1']['setup/dictionary/civilities'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/civilities',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfCivilities',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'module' => 4,
            'active' => 5,
            'lang' => 6,
            'sqlfilters' => 7,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => 1,
            6 => '',
            7 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of civilities.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'module',
                    'description' => 'To filter on module events',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Module',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Civility is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the civility must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of civility types',
            ),
            'url' => 'GET dictionary/civilities',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of civilities',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/currencies ====

$o['v1']['setup/dictionary/currencies'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/currencies',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfCurrencies',
        'arguments' => 
        array (
            'multicurrency' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
            'active' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 0,
            1 => 'code_iso',
            2 => 'ASC',
            3 => 100,
            4 => 0,
            5 => 1,
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of currencies.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'multicurrency',
                    'description' => 'Multicurrency rates (0: no multicurrency, 1: last rate, 2: all rates)',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '2',
                        'from' => 'query',
                    ),
                    'label' => 'Multicurrency',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code_iso',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment term is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of currencies',
            ),
            'url' => 'GET dictionary/currencies',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of currencies',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/extrafields ====

$o['v1']['setup/extrafields'] = array (
    'GET' => 
    array (
        'url' => 'setup/extrafields',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfExtrafields',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'elementtype' => 2,
            'sqlfilters' => 3,
        ),
        'defaults' => 
        array (
            0 => 't.pos',
            1 => 'ASC',
            2 => '',
            3 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of extra fields.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.pos',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'elementtype',
                    'description' => 'Type of element (\'adherent\', \'commande\', \'thirdparty\', \'facture\', \'propal\', \'product\', ...)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Elementtype',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'SO-%\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of extra fields',
            ),
            'url' => 'GET extrafields',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of extra fields',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/extrafields/{s1}/{s0} ====

$o['v1']['setup/extrafields/{s1}/{s0}'] = array (
    'DELETE' => 
    array (
        'url' => 'setup/extrafields/{elementtype}/{attrname}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'deleteExtrafieldsFromNames',
        'arguments' => 
        array (
            'attrname' => 0,
            'elementtype' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete extrafield',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'attrname',
                    'description' => 'extrafield attrname',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Attrname',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'elementtype',
                    'description' => 'extrafield elementtype',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Elementtype',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'DELETE extrafields/{elementtype}/{attrname}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
    'GET' => 
    array (
        'url' => 'setup/extrafields/{elementtype}/{attrname}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getExtrafields',
        'arguments' => 
        array (
            'attrname' => 0,
            'elementtype' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => '',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'attrname',
                    'description' => 'extrafield attrname',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Attrname',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'elementtype',
                    'description' => 'extrafield elementtype',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Elementtype',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of extra fields',
            ),
            'url' => 'GET extrafields/{elementtype}/{attrname}',
            'suppress' => 'PhanPluginUnknownArrayMethodParamType Luracast limitation',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'setup/extrafields/{elementtype}/{attrname}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'postExtrafields',
        'arguments' => 
        array (
            'attrname' => 0,
            'elementtype' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create Extrafield object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'attrname',
                    'description' => 'extrafield attrname',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Attrname',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'elementtype',
                    'description' => 'extrafield elementtype',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Elementtype',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of extrafield',
            ),
            'url' => 'POST extrafields/{elementtype}/{attrname}',
            'suppress' => 'PhanPluginUnknownArrayMethodParamType Luracast limitation',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'setup/extrafields/{elementtype}/{attrname}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'updateExtrafields',
        'arguments' => 
        array (
            'attrname' => 0,
            'elementtype' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update Extrafield object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'attrname',
                    'description' => 'extrafield attrname',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Attrname',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'elementtype',
                    'description' => 'extrafield elementtype',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Elementtype',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of extrafield',
            ),
            'url' => 'PUT extrafields/{elementtype}/{attrname}',
            'suppress' => 'PhanPluginUnknownArrayMethodParamType Luracast limitation',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/towns ====

$o['v1']['setup/dictionary/towns'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/towns',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfTowns',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'zipcode' => 4,
            'town' => 5,
            'active' => 6,
            'sqlfilters' => 7,
        ),
        'defaults' => 
        array (
            0 => 'zip,town',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => 1,
            7 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of towns.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'zip,town',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'zipcode',
                    'description' => 'To filter on zipcode',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Zipcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'town',
                    'description' => 'To filter on city name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Town',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Town is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of towns',
            ),
            'url' => 'GET dictionary/towns',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of towns',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/payment_terms ====

$o['v1']['setup/dictionary/payment_terms'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/payment_terms',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getPaymentTerms',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'sortorder',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of payments terms.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'sortorder',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment term is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter. Syntax example "(t.code:=:\'CHQ\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/payment_terms',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of payment terms',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Access denied',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of payments terms',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/shipping_methods ====

$o['v1']['setup/dictionary/shipping_methods'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/shipping_methods',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getShippingModes',
        'arguments' => 
        array (
            'limit' => 0,
            'page' => 1,
            'active' => 2,
            'lang' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 100,
            1 => 0,
            2 => 1,
            3 => '',
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of shipping methods.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'min' => '0',
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Shipping methodsm is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the method must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'SQL criteria to filter. Syntax example "(t.code:=:\'CHQ\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET dictionary/shipping_methods',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of shipping methods',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of shipping modes',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/units ====

$o['v1']['setup/dictionary/units'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/units',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfMeasuringUnits',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of measuring units.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Measuring unit is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of measuring unit',
            ),
            'url' => 'GET dictionary/units',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of measuring units',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/legal_form ====

$o['v1']['setup/dictionary/legal_form'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/legal_form',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfLegalForm',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'country' => 4,
            'active' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => 1,
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of legal form of business.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'country',
                    'description' => 'To filter on country',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Country',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Lega form is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of legal form',
            ),
            'url' => 'GET dictionary/legal_form',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of legal form',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/staff ====

$o['v1']['setup/dictionary/staff'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/staff',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfStaff',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'id',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of staff.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'id',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Staff is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of staff',
            ),
            'url' => 'GET dictionary/staff',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of staff',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/socialnetworks ====

$o['v1']['setup/dictionary/socialnetworks'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/socialnetworks',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfsocialNetworks',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 'rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of social networks.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Social network is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of social networks',
            ),
            'url' => 'GET dictionary/socialnetworks',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of social networks',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/ticket_categories ====

$o['v1']['setup/dictionary/ticket_categories'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/ticket_categories',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getTicketsCategories',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of tickets categories.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment term is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the category must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of ticket categories',
            ),
            'url' => 'GET dictionary/ticket_categories',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of tickets categories',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/ticket_severities ====

$o['v1']['setup/dictionary/ticket_severities'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/ticket_severities',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getTicketsSeverities',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of tickets severity.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment term is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the severity must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of ticket severities',
            ),
            'url' => 'GET dictionary/ticket_severities',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of tickets severities',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/ticket_types ====

$o['v1']['setup/dictionary/ticket_types'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/ticket_types',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getTicketsTypes',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of tickets types.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment term is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the type must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of ticket types',
            ),
            'url' => 'GET dictionary/ticket_types',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad value for sqlfilters',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of tickets types',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/dictionary/incoterms ====

$o['v1']['setup/dictionary/incoterms'] = array (
    'GET' => 
    array (
        'url' => 'setup/dictionary/incoterms',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getListOfIncoterms',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'active' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 1,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of incoterms.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'active',
                    'description' => 'Payment term is active or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Active',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the type must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of incoterm types',
            ),
            'url' => 'GET dictionary/incoterms',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of incoterms types',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/company ====

$o['v1']['setup/company'] = array (
    'GET' => 
    array (
        'url' => 'setup/company',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getCompany',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of company',
            'longDescription' => '',
            'url' => 'GET /company',
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Mysoc object',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/establishments ====

$o['v1']['setup/establishments'] = array (
    'GET' => 
    array (
        'url' => 'setup/establishments',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getEstablishments',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of establishments.',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of establishments',
            ),
            'url' => 'GET /establishments',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving list of establishments',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/establishments/{n0} ====

$o['v1']['setup/establishments/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/establishments/{id}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getEtablishmentByID',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get establishment by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of establishment',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'GET establishments/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '404',
                    'message' => 'Establishment not found',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '503',
                    'message' => 'Error when retrieving establishment',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/conf/{s0} ====

$o['v1']['setup/conf/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'setup/conf/{constantname}',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getConf',
        'arguments' => 
        array (
            'constantname' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get value of a setup variables',
            'longDescription' => 'Note that conf variables that stores security key or password hashes can\'t be loaded with API.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'constantname',
                    'description' => 'Name of conf variable to get',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Constantname',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'string',
                'description' => 'Data without useless information',
            ),
            'url' => 'GET conf/{constantname}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Error Bad or unknown value for constantname',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/checkintegrity ====

$o['v1']['setup/checkintegrity'] = array (
    'GET' => 
    array (
        'url' => 'setup/checkintegrity',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getCheckIntegrity',
        'arguments' => 
        array (
            'target' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Do a test of integrity for files and setup.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'target',
                    'description' => 'Can be \'local\' or \'default\' or Url of the signatures file to use for the test. Must be reachable by the tested Dolibarr.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Target',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Result of file and setup integrity check',
            ),
            'url' => 'GET checkintegrity',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Signature file not found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Technical error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 setup/modules ====

$o['v1']['setup/modules'] = array (
    'GET' => 
    array (
        'url' => 'setup/modules',
        'className' => 'Setup',
        'path' => 'setup',
        'methodName' => 'getModules',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get list of enabled modules',
            'longDescription' => '',
            'url' => 'GET /modules',
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Forbidden',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'setup',
            'classDescription' => 'API class for dictionaries',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 status ====

$o['v1']['status'] = array (
    'GET' => 
    array (
        'url' => 'status',
        'className' => 'Status',
        'path' => 'status',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get status (Dolibarr version)',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'status',
            'classDescription' => 'API that gives the status of the Dolibarr instance.',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 status/index ====

$o['v1']['status/index'] = array (
    'GET' => 
    array (
        'url' => 'status',
        'className' => 'Status',
        'path' => 'status',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get status (Dolibarr version)',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'status',
            'classDescription' => 'API that gives the status of the Dolibarr instance.',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 stockmovements ====

$o['v1']['stockmovements'] = array (
    'GET' => 
    array (
        'url' => 'stockmovements',
        'className' => 'Stockmovements',
        'path' => 'stockmovements',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
            'properties' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get a list of stock movement',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.product_id:=:1) and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of warehouse objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'stockmovements',
            'classDescription' => 'API class for stock movements',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'stockmovements',
        'className' => 'Stockmovements',
        'path' => 'stockmovements',
        'methodName' => 'post',
        'arguments' => 
        array (
            'product_id' => 0,
            'warehouse_id' => 1,
            'qty' => 2,
            'type' => 3,
            'lot' => 4,
            'movementcode' => 5,
            'movementlabel' => 6,
            'price' => 7,
            'datem' => 8,
            'dlc' => 9,
            'dluo' => 10,
            'origin_type' => 11,
            'origin_id' => 12,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => 2,
            4 => '',
            5 => '',
            6 => '',
            7 => '',
            8 => '',
            9 => '',
            10 => '',
            11 => '',
            12 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Create stock movement object.',
            'longDescription' => 'You can use the following message to test this RES API: { "product_id": 1, "warehouse_id": 1, "qty": 1, "lot": "", "movementcode": "INV123", "movementlabel": "Inventory 123", "price": 0 } $price Can be set to update AWP (Average Weighted Price) when you make a stock increase $dlc Eat-by date. Will be used if lot does not exists yet and will be created. $dluo Sell-by date. Will be used if lot does not exists yet and will be created.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'product_id',
                    'description' => 'Id product id',
                    'properties' => 
                    array (
                        'min' => '1',
                        'from' => 'body',
                        'required' => true,
                    ),
                    'label' => 'Product Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'warehouse_id',
                    'description' => 'Id warehouse',
                    'properties' => 
                    array (
                        'min' => '1',
                        'from' => 'body',
                        'required' => true,
                    ),
                    'label' => 'Warehouse Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'float',
                    'name' => 'qty',
                    'description' => 'Qty to add (Use negative value for a stock decrease)',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'required' => true,
                    ),
                    'label' => 'Qty',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'type',
                    'description' => 'Optionally specify the type of movement. 0=input (stock increase by a stock transfer), 1=output (stock decrease by a stock transfer), 2=output (stock decrease), 3=input (stock increase).',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'int',
                    ),
                    'label' => 'Type',
                    'default' => 2,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'lot',
                    'description' => 'Lot',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Lot',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'movementcode',
                    'description' => 'Movement code',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Movementcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'movementlabel',
                    'description' => 'Movement label',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Movementlabel',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'price',
                    'description' => 'To update AWP (Average Weighted Price) when you make a stock increase (qty must be higher then 0).',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Price',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'string',
                    'name' => 'datem',
                    'description' => 'Date of movement',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'date',
                    ),
                    'label' => 'Datem',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                9 => 
                array (
                    'type' => 'string',
                    'name' => 'dlc',
                    'description' => 'Eat-by date.',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'date',
                    ),
                    'label' => 'Dlc',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                10 => 
                array (
                    'type' => 'string',
                    'name' => 'dluo',
                    'description' => 'Sell-by date.',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'date',
                    ),
                    'label' => 'Dluo',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                11 => 
                array (
                    'type' => 'string',
                    'name' => 'origin_type',
                    'description' => 'Origin type (Element of source object, like \'project\', \'inventory\', ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Origin Type',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                12 => 
                array (
                    'type' => 'int',
                    'name' => 'origin_id',
                    'description' => 'Origin id (Id of source object)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Origin Id',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of stock movement',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'stockmovements',
            'classDescription' => 'API class for stock movements',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 stockmovements/index ====

$o['v1']['stockmovements/index'] = array (
    'GET' => 
    array (
        'url' => 'stockmovements',
        'className' => 'Stockmovements',
        'path' => 'stockmovements',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
            'properties' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get a list of stock movement',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.product_id:=:1) and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of warehouse objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'stockmovements',
            'classDescription' => 'API class for stock movements',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0} ====

$o['v1']['thirdparties/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a thirdparty object',
            'longDescription' => 'Return an array with thirdparty information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of third party to load',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'Object',
                    1 => 'false',
                ),
                'description' => 'Updated object',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Thirdparty ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/email/{s0} ====

$o['v1']['thirdparties/email/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/email/{email}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getByEmail',
        'arguments' => 
        array (
            'email' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a thirdparty object by email.',
            'longDescription' => ' Return an array with thirdparty information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'email',
                    'description' => 'Email of third party to load',
                    'properties' => 
                    array (
                        'type' => 'email',
                        'from' => 'path',
                    ),
                    'label' => 'Email',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Cleaned Societe object',
            ),
            'url' => 'GET email/{email}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/barcode/{s0} ====

$o['v1']['thirdparties/barcode/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/barcode/{barcode}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getByBarcode',
        'arguments' => 
        array (
            'barcode' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a thirdparty object by barcode.',
            'longDescription' => ' Return an array with thirdparty information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'barcode',
                    'description' => 'Barcode of third party to load',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Barcode',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Cleaned Societe object',
            ),
            'url' => 'GET barcode/{barcode}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties ====

$o['v1']['thirdparties'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'category' => 5,
            'sqlfilters' => 6,
            'properties' => 7,
            'pagination_data' => 8,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => '',
            7 => '',
            8 => false,
        ),
        'metadata' => 
        array (
            'description' => 'List thirdparties',
            'longDescription' => 'Get a list of thirdparties',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Set to 1 to show only customers Set to 2 to show only prospects Set to 3 to show only those are not customer neither prospect Set to 4 to show only suppliers',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "((t.nom:like:\'TheCompany%\') or (t.name_alias:like:\'TheCompany%\')) and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'bool',
                    'name' => 'pagination_data',
                    'description' => 'If this parameter is set to true the response will include pagination data. Default value is false. Page starts from 0*',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Pagination Data',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of thirdparty objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create thirdparty object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of thirdparty',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/index ====

$o['v1']['thirdparties/index'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'category' => 5,
            'sqlfilters' => 6,
            'properties' => 7,
            'pagination_data' => 8,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => '',
            7 => '',
            8 => false,
        ),
        'metadata' => 
        array (
            'description' => 'List thirdparties',
            'longDescription' => 'Get a list of thirdparties',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Set to 1 to show only customers Set to 2 to show only prospects Set to 3 to show only those are not customer neither prospect Set to 4 to show only suppliers',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "((t.nom:like:\'TheCompany%\') or (t.name_alias:like:\'TheCompany%\')) and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'bool',
                    'name' => 'pagination_data',
                    'description' => 'If this parameter is set to true the response will include pagination data. Default value is false. Page starts from 0*',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Pagination Data',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of thirdparty objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/merge/{n1} ====

$o['v1']['thirdparties/{n0}/merge/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}/merge/{idtodelete}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'merge',
        'arguments' => 
        array (
            'id' => 0,
            'idtodelete' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Merge a third party into another one.',
            'longDescription' => ' Merge content (properties, notes) and objects (like invoices, events, orders, proposals, ...) of a thirdparty into a target third party, then delete the merged third party. If a property has a defined value both in third party to delete and third party to keep, the value into the third party to delete will be ignored, the value of target thirdparty will remain, except for notes (content is concatenated).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty to keep (the target third party)',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idtodelete',
                    'description' => 'ID of thirdparty to remove (the thirdparty to delete), once data has been merged into the target third party.',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Idtodelete',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Return the resulted third party.',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'PUT {id}/merge/{idtodelete}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/setpricelevel/{n1} ====

$o['v1']['thirdparties/{n0}/setpricelevel/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}/setpricelevel/{priceLevel}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'setThirdpartyPriceLevel',
        'arguments' => 
        array (
            'id' => 0,
            'priceLevel' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Set new price level for the given thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'priceLevel',
                    'description' => 'Price level to apply to thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Price Level',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Thirdparty data without useless information',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'url' => 'PUT {id}/setpricelevel/{priceLevel}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Price level out of bounds',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Access not allowed for your login',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Thirdparty not found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'Error fetching/setting price level',
                    'exception' => 'RestException',
                ),
                4 => 
                array (
                    'code' => '501',
                    'message' => 'Request needs modules "Thirdparties" and "Products" and setting Multiprices activated',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/representative/{n1} ====

$o['v1']['thirdparties/{n0}/representative/{n1}'] = array (
    'POST' => 
    array (
        'url' => 'thirdparties/{id}/representative/{representative_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'addRepresentative',
        'arguments' => 
        array (
            'id' => 0,
            'representative_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a customer representative to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'representative_id',
                    'description' => 'Id of representative',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Representative Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'Return integer <=0 if KO, >0 if OK',
            ),
            'url' => 'POST {id}/representative/{representative_id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Access not allowed for your login',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User or Thirdparty not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/representative/{representative_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteRepresentative',
        'arguments' => 
        array (
            'id' => 0,
            'representative_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a customer representative to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'representative_id',
                    'description' => 'Id of representative',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Representative Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'Return integer <=0 if KO, >0 if OK',
            ),
            'url' => 'DELETE {id}/representative/{representative_id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Access not allowed for your login',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User or Thirdparty not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/categories ====

$o['v1']['thirdparties/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/categories',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get customer categories for a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'void',
                ),
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/categories/{n1} ====

$o['v1']['thirdparties/{n0}/categories/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}/categories/{category_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'addCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a customer category to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'Object',
                    1 => 'void',
                ),
                'description' => '',
            ),
            'url' => 'PUT {id}/categories/{category_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/categories/{category_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Remove the link between a customer category and the thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'Object',
                    1 => 'void',
                ),
                'description' => '',
            ),
            'url' => 'DELETE {id}/categories/{category_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/supplier_categories ====

$o['v1']['thirdparties/{n0}/supplier_categories'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/supplier_categories',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getSupplierCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get supplier categories for a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/supplier_categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/supplier_categories/{n1} ====

$o['v1']['thirdparties/{n0}/supplier_categories/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}/supplier_categories/{category_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'addSupplierCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a supplier category to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'PUT {id}/supplier_categories/{category_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/supplier_categories/{category_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteSupplierCategory',
        'arguments' => 
        array (
            'id' => 0,
            'category_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Remove the link between a category and the thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'category_id',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Category Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'DELETE {id}/supplier_categories/{category_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/outstandingproposals ====

$o['v1']['thirdparties/{n0}/outstandingproposals'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/outstandingproposals',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getOutStandingProposals',
        'arguments' => 
        array (
            'id' => 0,
            'mode' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 'customer',
        ),
        'metadata' => 
        array (
            'description' => 'Get outstanding proposals of thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => '\'customer\' or \'supplier\'',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 'customer',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/outstandingproposals',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of outstandings proposals of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/outstandingorders ====

$o['v1']['thirdparties/{n0}/outstandingorders'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/outstandingorders',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getOutStandingOrder',
        'arguments' => 
        array (
            'id' => 0,
            'mode' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 'customer',
        ),
        'metadata' => 
        array (
            'description' => 'Get outstanding orders of thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => '\'customer\' or \'supplier\'',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 'customer',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/outstandingorders',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of outstandings orders of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/outstandinginvoices ====

$o['v1']['thirdparties/{n0}/outstandinginvoices'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/outstandinginvoices',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getOutStandingInvoices',
        'arguments' => 
        array (
            'id' => 0,
            'mode' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 'customer',
        ),
        'metadata' => 
        array (
            'description' => 'Get outstanding invoices of thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => '\'customer\' or \'supplier\'',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 'customer',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/outstandinginvoices',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of outstandings invoices of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/representatives ====

$o['v1']['thirdparties/{n0}/representatives'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/representatives',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getSalesRepresentatives',
        'arguments' => 
        array (
            'id' => 0,
            'mode' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get representatives of thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => '0=Array with properties, 1=Array of id.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/representatives',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of representatives of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/fixedamountdiscounts ====

$o['v1']['thirdparties/{n0}/fixedamountdiscounts'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/fixedamountdiscounts',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getFixedAmountDiscounts',
        'arguments' => 
        array (
            'id' => 0,
            'filter' => 1,
            'sortfield' => 2,
            'sortorder' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 'none',
            2 => 'f.type',
            3 => 'ASC',
        ),
        'metadata' => 
        array (
            'description' => 'Get fixed amount discount of a thirdparty (all sources: deposit, credit note, commercial offers...)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of the thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'filter',
                    'description' => 'Filter exceptional discount. "none" will return every discount, "available" returns unapplied discounts, "used" returns applied discounts',
                    'properties' => 
                    array (
                        'choice' => 
                        array (
                            0 => 'none',
                            1 => 'available',
                            2 => 'used',
                        ),
                        'from' => 'query',
                    ),
                    'label' => 'Filter',
                    'default' => 'none',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'f.type',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/fixedamountdiscounts',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of fixed discount of thirdparty',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '503',
                    'message' => 'Service Unavailable',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/getinvoicesqualifiedforreplacement ====

$o['v1']['thirdparties/{n0}/getinvoicesqualifiedforreplacement'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/getinvoicesqualifiedforreplacement',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getInvoicesQualifiedForReplacement',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Return list of invoices qualified to be replaced by another invoice.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/getinvoicesqualifiedforreplacement',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/getinvoicesqualifiedforcreditnote ====

$o['v1']['thirdparties/{n0}/getinvoicesqualifiedforcreditnote'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/getinvoicesqualifiedforcreditnote',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getInvoicesQualifiedForCreditNote',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Return list of invoices qualified to be corrected by a credit note.',
            'longDescription' => 'Invoices matching the following rules are returned (validated + payment on process) or classified (paid completely or paid partially) + not already replaced + not already a credit note',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/getinvoicesqualifiedforcreditnote',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad Request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '405',
                    'message' => 'Method Not Allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/notifications ====

$o['v1']['thirdparties/{n0}/notifications'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/notifications',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getCompanyNotification',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get CompanyNotification objects for thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'GET {id}/notifications',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'thirdparties/{id}/notifications',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'createCompanyNotification',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create CompanyNotification object for thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Notification of thirdparty',
            ),
            'url' => 'POST {id}/notifications',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/notificationsbycode/{s1} ====

$o['v1']['thirdparties/{n0}/notificationsbycode/{s1}'] = array (
    'POST' => 
    array (
        'url' => 'thirdparties/{id}/notificationsbycode/{code}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'createCompanyNotificationByCode',
        'arguments' => 
        array (
            'id' => 0,
            'code' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create CompanyNotification object for thirdparty using action trigger code',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'code',
                    'description' => 'Action Trigger code',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Code',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Notification of thirdparty',
            ),
            'phan-return' => 'Notify',
            'url' => 'POST {id}/notificationsbycode/{code}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/notifications/{n1} ====

$o['v1']['thirdparties/{n0}/notifications/{n1}'] = array (
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/notifications/{notification_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteCompanyNotification',
        'arguments' => 
        array (
            'id' => 0,
            'notification_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a CompanyNotification attached to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notification_id',
                    'description' => 'ID of CompanyNotification',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Notification Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '-1 if error 1 if correct deletion',
            ),
            'url' => 'DELETE {id}/notifications/{notification_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}/notifications/{notification_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'updateCompanyNotification',
        'arguments' => 
        array (
            'id' => 0,
            'notification_id' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update CompanyNotification object for thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notification_id',
                    'description' => 'ID of CompanyNotification',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Notification Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Notification of thirdparty',
            ),
            'url' => 'PUT {id}/notifications/{notification_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/bankaccounts ====

$o['v1']['thirdparties/{n0}/bankaccounts'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/bankaccounts',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getCompanyBankAccount',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get CompanyBankAccount objects for thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'GET {id}/bankaccounts',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'thirdparties/{id}/bankaccounts',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'createCompanyBankAccount',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create CompanyBankAccount object for thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'BankAccount of thirdparty',
            ),
            'url' => 'POST {id}/bankaccounts',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/bankaccounts/{n1} ====

$o['v1']['thirdparties/{n0}/bankaccounts/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}/bankaccounts/{bankaccount_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'updateCompanyBankAccount',
        'arguments' => 
        array (
            'id' => 0,
            'bankaccount_id' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update CompanyBankAccount object for thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'bankaccount_id',
                    'description' => 'ID of CompanyBankAccount',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Bankaccount Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'BankAccount of thirdparty',
            ),
            'url' => 'PUT {id}/bankaccounts/{bankaccount_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/bankaccounts/{bankaccount_id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteCompanyBankAccount',
        'arguments' => 
        array (
            'id' => 0,
            'bankaccount_id' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a bank account attached to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'bankaccount_id',
                    'description' => 'ID of CompanyBankAccount',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Bankaccount Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '-1 if error 1 if correct deletion',
            ),
            'url' => 'DELETE {id}/bankaccounts/{bankaccount_id}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/generateBankAccountDocument/{n1}/{s2} ====

$o['v1']['thirdparties/{n0}/generateBankAccountDocument/{n1}/{s2}'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/generateBankAccountDocument/{companybankid}/{model}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'generateBankAccountDocument',
        'arguments' => 
        array (
            'id' => 0,
            'companybankid' => 1,
            'model' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => 'sepamandate',
        ),
        'metadata' => 
        array (
            'description' => 'Generate a Document from a bank account record (like SEPA mandate)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Thirdparty id',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'companybankid',
                    'description' => 'Companybank id',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Companybankid',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'model',
                    'description' => 'Model of document to generate',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Model',
                    'default' => 'sepamandate',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'GET {id}/generateBankAccountDocument/{companybankid}/{model}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/accounts ====

$o['v1']['thirdparties/{n0}/accounts'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/accounts',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getSocieteAccounts',
        'arguments' => 
        array (
            'id' => 0,
            'site' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get a specific account attached to a thirdparty (by specifying the site key)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'site',
                    'description' => 'Site key',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Site',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized: User does not have permission to read thirdparties',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found: Specified thirdparty ID does not belongs to an existing thirdparty',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET {id}/accounts/',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'thirdparties/{id}/accounts',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'createSocieteAccount',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create and attach a new account to an existing thirdparty',
            'longDescription' => 'Possible fields for request_data (request body) are specified in <code>llx_societe_account</code> table.<br> See <a href="https://wiki.dolibarr.org/index.php/Table_llx_societe_account">Table llx_societe_account</a> wiki page for more information<br><br> <u>Example body payload :</u> <pre>{"key_account": "cus_DAVkLSs1LYyYI", "site": "stripe"}</pre>',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized: User does not have permission to read thirdparties',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '409',
                    'message' => 'Conflict: An Account already exists for this company and site.',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => 500,
                    'message' => 'Unprocessable Entity: You must pass the site attribute in your request data !',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error: Error creating SocieteAccount account',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'POST {id}/accounts',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/accounts',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteSocieteAccounts',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete all accounts attached to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'void',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized: User does not have permission to delete thirdparties accounts',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found: Specified thirdparty ID does not belongs to an existing thirdparty',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error: Error deleting SocieteAccount entity',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'DELETE {id}/accounts',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/accounts/{s1} ====

$o['v1']['thirdparties/{n0}/accounts/{s1}'] = array (
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}/accounts/{site}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'putSocieteAccount',
        'arguments' => 
        array (
            'id' => 0,
            'site' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create and attach a new (or replace an existing) specific site account to a thirdparty',
            'longDescription' => 'You <strong>MUST</strong> pass all values to keep (otherwise, they will be deleted) !<br> If you just need to update specific fields prefer <code>PATCH /thirdparties/{id}/accounts/{site}</code> endpoint.<br><br> When a <strong>SocieteAccount</strong> entity does not exist for the <code>id</code> and <code>site</code> supplied, a new one will be created. In that case <code>fk_soc</code> and <code>site</code> members form request body payload will be ignored and <code>id</code> and <code>site</code> query strings parameters will be used instead.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'site',
                    'description' => 'Site key',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Site',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized: User does not have permission to read thirdparties',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => 500,
                    'message' => 'Unprocessable Entity: You must pass the site attribute in your request data !',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error: Error updating SocieteAccount entity',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'PUT {id}/accounts/{site}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'PATCH' => 
    array (
        'url' => 'thirdparties/{id}/accounts/{site}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'patchSocieteAccount',
        'arguments' => 
        array (
            'id' => 0,
            'site' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update specified values of a specific account attached to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'site',
                    'description' => 'Site key',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Site',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized: User does not have permission to read thirdparties',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found: Specified thirdparty ID does not belongs to an existing thirdparty',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '409',
                    'message' => 'Conflict: Another SocieteAccount entity already exists for this thirdparty with this site key.',
                    'exception' => 'RestException',
                ),
                3 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error: Error updating SocieteAccount entity',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'PATCH {id}/accounts/{site}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/accounts/{n1} ====

$o['v1']['thirdparties/{n0}/accounts/{n1}'] = array (
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}/accounts/{site}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'deleteSocieteAccount',
        'arguments' => 
        array (
            'id' => 0,
            'site' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a specific site account attached to a thirdparty (by account id)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'site',
                    'description' => 'Site key',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Site',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'void',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized: User does not have permission to delete thirdparties accounts',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found: Specified thirdparty ID does not belongs to an existing thirdparty',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error: Error deleting SocieteAccount entity',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'DELETE {id}/accounts/{site}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users ====

$o['v1']['users'] = array (
    'GET' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'category' => 5,
            'sqlfilters' => 6,
            'properties' => 7,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '0',
            5 => 0,
            6 => '',
            7 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Users',
            'longDescription' => 'Get a list of Users',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => '0',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of User objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create user account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'New user data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Not allowed',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/index ====

$o['v1']['users/index'] = array (
    'GET' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'category' => 5,
            'sqlfilters' => 6,
            'properties' => 7,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '0',
            5 => 0,
            6 => '',
            7 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Users',
            'longDescription' => 'Get a list of Users',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => '0',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of User objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/{n0} ====

$o['v1']['users/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'includepermissions' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an user object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of user',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includepermissions',
                    'description' => 'Set this to 1 to have the array of permissions loaded (not done by default for performance purpose)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includepermissions',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Insufficient rights',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User or group not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update user account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of account to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Updated object',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Not allowed',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete account/user',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Account ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Not allowed',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/login/{s0} ====

$o['v1']['users/login/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'users/login/{login}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'getByLogin',
        'arguments' => 
        array (
            'login' => 0,
            'includepermissions' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an user object by login',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'Login of user',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includepermissions',
                    'description' => 'Set this to 1 to have the array of permissions loaded (not done by default for performance purpose)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includepermissions',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'url' => 'GET login/{login}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Insufficient rights',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'User or group not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/email/{s0} ====

$o['v1']['users/email/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'users/email/{email}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'getByEmail',
        'arguments' => 
        array (
            'email' => 0,
            'includepermissions' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an user object by Email',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'email',
                    'description' => 'Email of user',
                    'properties' => 
                    array (
                        'type' => 'email',
                        'from' => 'path',
                    ),
                    'label' => 'Email',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includepermissions',
                    'description' => 'Set this to 1 to have the array of permissions loaded (not done by default for performance purpose)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includepermissions',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'url' => 'GET email/{email}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '400',
                    'message' => 'Bad request',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '401',
                    'message' => 'Insufficient rights',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '404',
                    'message' => 'User or group not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/info ====

$o['v1']['users/info'] = array (
    'GET' => 
    array (
        'url' => 'users/info',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'getInfo',
        'arguments' => 
        array (
            'includepermissions' => 0,
        ),
        'defaults' => 
        array (
            0 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get more properties of a user',
            'longDescription' => '',
            'url' => 'GET /info',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'includepermissions',
                    'description' => 'Set this to 1 to have the array of permissions loaded (not done by default for performance purpose)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includepermissions',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Insufficient rights',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User or group not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/{n0}/groups ====

$o['v1']['users/{n0}/groups'] = array (
    'GET' => 
    array (
        'url' => 'users/{id}/groups',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'getGroups',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'List the groups of a user',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of user',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of group objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Not allowed',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not found',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET {id}/groups',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/{n0}/setGroup/{n1} ====

$o['v1']['users/{n0}/setGroup/{n1}'] = array (
    'GET' => 
    array (
        'url' => 'users/{id}/setGroup/{group}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'setGroup',
        'arguments' => 
        array (
            'id' => 0,
            'group' => 1,
            'entity' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => 1,
        ),
        'metadata' => 
        array (
            'description' => 'Add a user into a group',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'User ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'group',
                    'description' => 'Group ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Group',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'entity',
                    'description' => 'Entity ID (valid only for superadmin in multicompany transverse mode)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Entity',
                    'default' => 1,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '1 if success',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Not allowed',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User not found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'System error',
                    'exception' => 'RestException',
                ),
            ),
            'url' => 'GET {id}/setGroup/{group}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/groups ====

$o['v1']['users/groups'] = array (
    'GET' => 
    array (
        'url' => 'users/groups',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'listGroups',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'group_ids' => 4,
            'sqlfilters' => 5,
            'properties' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '0',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Groups',
            'longDescription' => 'Return an array with a list of Groups',
            'url' => 'GET /groups',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'group_ids',
                    'description' => 'Groups ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'Group Ids',
                    'default' => '0',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of User objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Not allowed',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User not found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '503',
                    'message' => 'Error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/groups/{n0} ====

$o['v1']['users/groups/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'users/groups/{group}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'infoGroups',
        'arguments' => 
        array (
            'group' => 0,
            'load_members' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an group object',
            'longDescription' => 'Return an array with group information',
            'url' => 'GET /groups/{group}',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'group',
                    'description' => 'ID of group',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Group',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'load_members',
                    'description' => 'Load members list or not',
                    'properties' => 
                    array (
                        'min' => '0',
                        'max' => '1',
                        'from' => 'query',
                    ),
                    'label' => 'Load Members',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'object',
                'description' => 'object of User objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '403',
                    'message' => 'Not allowed',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'User not found',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 warehouses/{n0} ====

$o['v1']['warehouses/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'warehouses/{id}',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a warehouse object',
            'longDescription' => 'Return an array with warehouse information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of warehouse',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'warehouses/{id}',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update warehouse',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of warehouse to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Updated object',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'warehouses/{id}',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete warehouse',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 warehouses ====

$o['v1']['warehouses'] = array (
    'GET' => 
    array (
        'url' => 'warehouses',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'category' => 4,
            'sqlfilters' => 5,
            'properties' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List warehouses',
            'longDescription' => 'Get a list of warehouses',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'WH-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of warehouse objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'warehouses',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create warehouse object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of warehouse',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 warehouses/index ====

$o['v1']['warehouses/index'] = array (
    'GET' => 
    array (
        'url' => 'warehouses',
        'className' => 'Warehouses',
        'path' => 'warehouses',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'category' => 4,
            'sqlfilters' => 5,
            'properties' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => 0,
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List warehouses',
            'longDescription' => 'Get a list of warehouses',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Use this param to filter list by category',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'WH-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of warehouse objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'warehouses',
            'classDescription' => 'API class for warehouses',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 webhook/{n0} ====

$o['v1']['webhook/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'webhook/{id}',
        'className' => 'Webhook',
        'path' => 'webhook',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a taregt object',
            'longDescription' => 'Return an array with target information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of target to load',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'Luracast\\Restler\\Data\\Obj',
                'description' => 'Object with cleaned properties',
                'children' => 
                array (
                    'stringEncoderFunction' => 
                    array (
                        'name' => 'stringEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'String Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'numberEncoderFunction' => 
                    array (
                        'name' => 'numberEncoderFunction',
                        'type' => 
                        array (
                            0 => 'bool',
                            1 => 'string',
                            2 => 'callable',
                        ),
                        'label' => 'Number Encoder Function',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'fix' => 
                    array (
                        'name' => 'fix',
                        'type' => 'array',
                        'description' => 'key value pairs for fixing value types using functions. For example \'id\'=>\'intval\' will make sure all values of the id properties will be converted to integers intval function \'password\'=> null will remove all the password entries',
                        'label' => 'Fix',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'separatorChar' => 
                    array (
                        'name' => 'separatorChar',
                        'type' => 'string',
                        'description' => 'character that is used to identify sub objects For example when Object::$separatorChar = \'.\'; array(\'my.object\'=>true) will result in array( \'my\'=>array(\'object\'=>true) );',
                        'label' => 'Separator Char',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeEmpty' => 
                    array (
                        'name' => 'removeEmpty',
                        'type' => 'bool',
                        'description' => 'set it to true when empty arrays, blank strings, null values to be automatically removed from response',
                        'label' => 'Remove Empty',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                    'removeNull' => 
                    array (
                        'name' => 'removeNull',
                        'type' => 'bool',
                        'description' => 'set it to true to remove all null values from the result',
                        'label' => 'Remove Null',
                        'properties' => 
                        array (
                            'required' => true,
                        ),
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'webhook',
            'classDescription' => 'API class for webhooks',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'webhook/{id}',
        'className' => 'Webhook',
        'path' => 'webhook',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update target',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of target to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'Object',
                    1 => 'false',
                ),
                'description' => 'Updated object',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => '401',
                    'message' => 'Unauthorized',
                    'exception' => 'RestException',
                ),
                1 => 
                array (
                    'code' => '404',
                    'message' => 'Not Found',
                    'exception' => 'RestException',
                ),
                2 => 
                array (
                    'code' => '500',
                    'message' => 'Internal Server Error',
                    'exception' => 'RestException',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'webhook',
            'classDescription' => 'API class for webhooks',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'webhook/{id}',
        'className' => 'Webhook',
        'path' => 'webhook',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete target',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Target ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'webhook',
            'classDescription' => 'API class for webhooks',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 webhook ====

$o['v1']['webhook'] = array (
    'GET' => 
    array (
        'url' => 'webhook',
        'className' => 'Webhook',
        'path' => 'webhook',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
            'properties' => 5,
            'pagination_data' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => false,
        ),
        'metadata' => 
        array (
            'description' => 'List taregts',
            'longDescription' => 'Get a list of taregts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "((t.nom:like:\'TheCompany%\') or (t.name_alias:like:\'TheCompany%\')) and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'bool',
                    'name' => 'pagination_data',
                    'description' => 'If this parameter is set to true the response will include pagination data. Default value is false. Page starts from 0*',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Pagination Data',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of target objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'webhook',
            'classDescription' => 'API class for webhooks',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'webhook',
        'className' => 'Webhook',
        'path' => 'webhook',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create target object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of target',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'webhook',
            'classDescription' => 'API class for webhooks',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 webhook/index ====

$o['v1']['webhook/index'] = array (
    'GET' => 
    array (
        'url' => 'webhook',
        'className' => 'Webhook',
        'path' => 'webhook',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
            'properties' => 5,
            'pagination_data' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => false,
        ),
        'metadata' => 
        array (
            'description' => 'List taregts',
            'longDescription' => 'Get a list of taregts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "((t.nom:like:\'TheCompany%\') or (t.name_alias:like:\'TheCompany%\')) and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'properties',
                    'description' => 'Restrict the data returned to these properties. Ignored if empty. Comma separated list of properties names',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Properties',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'bool',
                    'name' => 'pagination_data',
                    'description' => 'If this parameter is set to true the response will include pagination data. Default value is false. Page starts from 0*',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Pagination Data',
                    'default' => false,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of target objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'webhook',
            'classDescription' => 'API class for webhooks',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 webhook/triggers ====

$o['v1']['webhook/triggers'] = array (
    'GET' => 
    array (
        'url' => 'webhook/triggers',
        'className' => 'Webhook',
        'path' => 'webhook',
        'methodName' => 'listOfTriggers',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of all available triggers',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'GET triggers',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'webhook',
            'classDescription' => 'API class for webhooks',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==================== apiVersionMap ====================

$o['apiVersionMap'] = array();

//==== apiVersionMap Luracast\Restler\Explorer ====

$o['apiVersionMap']['Luracast\Restler\Explorer'] = array (
    1 => 'Luracast\\Restler\\Explorer',
);

//==== apiVersionMap DolibarrApiAccess ====

$o['apiVersionMap']['DolibarrApiAccess'] = array (
    1 => 'DolibarrApiAccess',
);

//==== apiVersionMap Agendaevents ====

$o['apiVersionMap']['Agendaevents'] = array (
    1 => 'Agendaevents',
);

//==== apiVersionMap Contacts ====

$o['apiVersionMap']['Contacts'] = array (
    1 => 'Contacts',
);

//==== apiVersionMap Documents ====

$o['apiVersionMap']['Documents'] = array (
    1 => 'Documents',
);

//==== apiVersionMap Invoices ====

$o['apiVersionMap']['Invoices'] = array (
    1 => 'Invoices',
);

//==== apiVersionMap Login ====

$o['apiVersionMap']['Login'] = array (
    1 => 'Login',
);

//==== apiVersionMap Products ====

$o['apiVersionMap']['Products'] = array (
    1 => 'Products',
);

//==== apiVersionMap Setup ====

$o['apiVersionMap']['Setup'] = array (
    1 => 'Setup',
);

//==== apiVersionMap Status ====

$o['apiVersionMap']['Status'] = array (
    1 => 'Status',
);

//==== apiVersionMap Stockmovements ====

$o['apiVersionMap']['Stockmovements'] = array (
    1 => 'Stockmovements',
);

//==== apiVersionMap Thirdparties ====

$o['apiVersionMap']['Thirdparties'] = array (
    1 => 'Thirdparties',
);

//==== apiVersionMap Users ====

$o['apiVersionMap']['Users'] = array (
    1 => 'Users',
);

//==== apiVersionMap Warehouses ====

$o['apiVersionMap']['Warehouses'] = array (
    1 => 'Warehouses',
);

//==== apiVersionMap Webhook ====

$o['apiVersionMap']['Webhook'] = array (
    1 => 'Webhook',
);
return $o;