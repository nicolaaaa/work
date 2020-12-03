<?php
namespace App\Utilities\Filters;

use App\Utilities\FilterContract;

class Own implements FilterContract
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $this->query->where('PL1', 'MW');
    }
}
