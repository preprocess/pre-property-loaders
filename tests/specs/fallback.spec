--DESCRIPTION--

Test property loader fallback macro

--GIVEN--

class Fixture
{
    private $name = ucwords("acme fixture");

    public function __construct($foo = "bar")
    {
        loaders;

        print $foo;
    }
}

--EXPECT--

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
