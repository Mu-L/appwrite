<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class Permissions extends Model
{
    public function __construct()
    {
        $this
            ->addRule('read', [
                'type' => 'string',
                'description' => 'Read permissions.',
                'example' => ['*', 'user:5e5ea5c16897e'],
                'array' => true,
            ])
            ->addRule('write', [
                'type' => 'string',
                'description' => 'Write permissions.',
                'example' => ['*', 'user:5e5ea5c16897e'],
                'array' => true,
            ])
        ;
    }

    /**
     * Get Name
     * 
     * @return string
     */
    public function getName():string
    {
        return 'Permissions';
    }

    /**
     * Get Collection
     * 
     * @return string
     */
    public function getType():string
    {
        return Response::MODEL_PERMISSIONS;
    }
}