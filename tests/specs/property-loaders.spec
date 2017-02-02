--DESCRIPTION--

Test property loader macros

--GIVEN--

class Fixture
{
    private $name = ucwords("acme fixture");

    private $thing = new \stdClass();

    public function name() {
        return $this->name;
    }

    public function thing() {
        return $this->thing;
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

    private $thing;

    private function loadThingProperty()
    {
        $this->thing = new \stdClass();
    }

    public function name()
    {
        return $this->name;
    }

    public function thing()
    {
        return $this->thing;
    }
}
