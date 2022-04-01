<?php

namespace App\GraphQL\Type;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;


class BilanCaisseType extends GraphQLType
{
    protected $attributes = [
        'name' => 'BilanCaisse',
        'description' => ''
    ];

    public function fields(): array 
    {
        return
        [
            'id'                    => [ 'type' => Type::id(), 'description' => ''],
            'start_amount'          => [ 'type' => Type::string()],
            'created_at'            => [ 'type' => Type::string(), 'description' => ''],
            'created_at_fr'         => [ 'type' => Type::string(), 'description' => ''],
            'updated_at'            => [ 'type' => Type::string(), 'description' => ''],
            'updated_at_fr'         => [ 'type' => Type::string(), 'description' => ''],
            'deleted_at'            => [ 'type' => Type::string(), 'description' => ''],
            'deleted_at_fr'         => [ 'type' => Type::string(), 'description' => ''],
        ];
    }
}
