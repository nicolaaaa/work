<?php
namespace App\Utilities\Filters;

use App\Utilities\FilterContract;

class Id implements FilterContract
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $this->query->where('id', $value);
    }
}
