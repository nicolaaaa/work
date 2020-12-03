<?php
namespace App\Utilities;

class FilterBuilder
{
    protected $query;
    protected $filters;
    protected $namespace;

    public function __construct($query, $filters, $namespace)
    {
        $this->query = $query;
        $this->filters = $filters;
        $this->namespace = $namespace;
    }

    public function apply()
    {
        foreach ($this->filters as $name => $value) {
            $normailizedName = ucfirst($name);
            $class = $this->namespace . "\\{$normailizedName}";
            $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln('Filter');

            $out->writeln($name);
            $out->writeln($value);
            $out->writeln('class');

            $out->writeln($class);

            if (! class_exists($class)) {
                $out->writeln('not exist');

                continue;
            }



            if (strlen($value)) {
                (new $class($this->query))->handle($value);
            } else {
                (new $class($this->query))->handle();
            }
        }

        return $this->query;
    }
}
?>
