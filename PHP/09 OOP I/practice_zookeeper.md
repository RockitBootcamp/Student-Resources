# Practice Zookeeper

You are a zookeeper and need to feed the animals. You have two types of food (meat, veggies). There are three types of animals (carnivore, herbivore, and omnivore). You need to feed all the animals and keep track of how much food you have:

- Create an animal class. Each animal created should be considered one of three possible types:
 - carnivore
 - herbivore
 - omnivore

```php
class Animal {
	public $foodType;
	public function __construct($type) {
		$this->foodType = $type;
	}
}
```

Create a Zookeeper class. The Zookeeper class will have member variables which track how many units of meat and veggies it has to give out. Start the Zookeeper with 10 units of meat and 10 units of veggies. It will also have a `feed` method which will take an `Animal` object as it's only argument. Depending on the animal's type, the feed method will deduct from the meat or veggies variables in the following amounts:

- If an animal is a carnivore, it gets 2 pieces of meat.
- If it's an herbivore feed it 2 pieces of veggies. 
- If it's an omnivore, feed it 1 piece of meat and 1 piece of veggies. 

Create a method on Zookeeper called `getFoodStatus()`. This will return how much meat and veggies are left.

```php
class Zookeeper {

	// Initial of food
	private $meat = 10;
	private $veggies = 10;

	// Feed
	public function feed($animal) {
		if ($animal->foodType = 'carnivore') {
			$this->meat -= 2;
		} else if ($animal->foodType = 'herbivore') {
			$this->meat--;
			$this->veggies--;
		} else if ($animal->foodType = 'omnivore') {
			$this->veggies -= 2;
		} else {
			die('Invalid Animal Type');
		}
	}

	// Get Food Status
	public function getFoodStatus() {
		return 'There are ' . $this->meat . ' units of meat and ' . $this->veggies . ' units of veggies left';
	}
}
```

### Implementing the code

Use your code to perform the following tasks:

#### Create a ZooKeeper and one animal of each type

```php
$zookeeper = new Zookeeper;

$lion = new Animal('carnivore');
$cow = new Animal('herbivore');
$pig = new Animal('omnivore');
```

#### Print out how much food the zoo keeper has

```php
echo $zookeeper->getFoodStatus();
```

### Feed an animal that is a carnivore
```php
$zookeeper->feed($lion);
```

On your own:
- Print out how much food the zoo keeper has now
- Feed the animal that is a herbivore
- Print out how much food the zoo keeper has now
- Feed the animal that is a omnivore
- Print out how much food the zoo keeper has now