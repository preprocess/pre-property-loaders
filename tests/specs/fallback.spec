class Fixture
{
    private $name = ucwords("acme fixture");

    public function __construct($foo = "bar")
    {
        loaders;

        print $foo;
    }
}

~~~

class Fixture
{
    use \Pre\PropertyLoaders\PropertyLoadersTrait;

    private $name;

    private function loadNameProperty()
    {
        $this->name = ucwords("acme fixture");
    }

    public function __construct($foo = "bar")
    {
        $this->loadProperties();

        print $foo;
    }
}
