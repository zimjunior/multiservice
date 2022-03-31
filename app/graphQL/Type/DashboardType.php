<?php

namespace App\GraphQL\Type;

use GraphQL;
use App\Courrier;
use Carbon\Carbon;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class DashboardType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Dashboard',
    ];

    public function fields(): array
    {
      return
      [
          'solde'                                => ['type' => Type::string(), 'description' => ''],
          'amount_account'                       => ['type' => Type::string(), 'description' => ''],
          'om'                                   => ['type' => Type::string(), 'description' => ''],
          'amount_operateur'                     => ['type' => Type::string(), 'description' => ''],

      ];
    }

}