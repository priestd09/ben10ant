<?php

namespace Protosofia\Ben10ant\Models;

use Illuminate\Database\Eloquent\Model;

class TenantBaseModel extends Model
{
    protected $connection;

    public function __construct(array $attributes = [])
    {
        $this->connection = env('TENANT_DB_CONNECTION', 'tenant');
        parent::__construct($attributes);
    }
}
