<?php
namespace App\Models;

use DB;
use Exception;

/*
Model provides a base class for database entity objects. A subclass must
specify the table name and column names, like this:
    protected static $table = 'customer';
    protected static $fields = ['first_name', 'last_name', 'email'];

Model assumes that the primary key is called 'id', but this can be overridden with:
    protected static $primary_key = 'customer_id';

These static methods are available for getting records from the database:
- Model::get($id) - get a record by its primary key
- Model::getAll() - get all records in the table

These instance methods/properties are available:
- __construct($id=NULL) - if $id is provided it is the same as Model::get($id).
                        if not, an empty Model is returned
- property 'id' is available for getting but not setting                        
- all properties defined in the static $fields array are available for 
  getting and setting
- save() is available, but the insert() and/or update() methods must be
  overriden to do something useful for save() to work. If they get called
  without being overriden an Exception will be thrown.

See the bundled Customer.php and CustomerController.php for an example
 */

class Model {
    // these MUST be set in the subclass
    protected static $table = '';
    protected static $fields = [];

    // this can be set in the subclass is the PK is other than 'id'
    protected static $primary_key = 'id';

    private $id = 0;
    protected $field_data = [];

    /*
     * Instance Methods
     */
    public function __construct($id=NULL) {
        if($id) {
            $select = 'select * from ' . static::$table .
                ' where '. static::$primary_key . ' = :id';
            $result = DB::selectOne($select, [':id'=>$id]);

            $this->populateFromRow($result);
        }
    }

    public function save() {
        if($this->id > 0) {
            $this->update();
        } else {
            $this->id = $this->insert();
        }
    }

    /*
     * insert() and update() should be overridden for save() to work
     */
    protected function insert() {
        throw new Exception("Client code must implement insert()...");
    }

    protected function update() {
        throw new Exception("Client code must implement update()...");
    }

    /*
     * "Magic" getters and setters
     */
    public function __get($name) {
        if($name == 'id') {
            return $this->id;
        } elseif(in_array($name, static::$fields)) {
            return $this->field_data[$name];    
        }
        throw new Exception('Undefined property: ' . $name);
    }

    public function __set($name, $value) {
        if(in_array($name, static::$fields)) {
            $this->field_data[$name] = $value;    
        } elseif($name == 'id') {
            throw new Exception('Field "id" cannot be set');
        } else {
            throw new Exception('Undefined property: ' . $name);
        }
    }

    /*
     * static methods for getting record(s) from the database
     */
    public static function get($id) {
        return new static($id);
    }

    public static function getAll() {
        $select = 'select * from ' . static::$table;
        $rows = DB::select($select);
        $results = [];
        foreach($rows as $row) {
            $model = new static();
            $model->populateFromRow($row);
            $results[] = $model;
        }
        return $results;
    }

    /*
     * private utility methods
     */
    private function populateFromRow($row) {
        $this->id = $row->{static::$primary_key};
        foreach(static::$fields as $f) {
            $this->field_data[$f] = $row->{$f};
        }
    }

}