<?php

namespace App\Models;
use DB;
use App\Library\Sql;

abstract class Model {
    
    /**
     * Settings
     */

    // Set these in your model
    protected static $table = '';
    protected static $key = 'id';

    // Leave alone, and don't set these in your model
    protected $data;
    protected $id;
    

    /****************************************
      Basic Model
    *****************************************/

    /**
     * Constructor
     */
    public function __construct($id = NULL) {   
        if (is_numeric($id)) {
            $this->data = $this->setDataFromDB($id);
            $this->id = $id;
        }
    }

   /**
    * Get Model from Database
    */
    private function setDataFromDB($id) {

        $sql = '
            SELECT *
            FROM `' . static::$table . '`
            WHERE `' . static::$key . '` = :id
            LIMIT 1
            ';

        $results = DB::selectOne($sql, ['id' => $id]);
        return (array)$results;

    }

    /**
     * Does the model exist?
     */
    public function exists() {
        return !empty($this->data);
    }


    /****************************************
      Active Record
    *****************************************/

    /**
     * Magic Set
     */
    public function __set($name, $value) {
        if ($name != static::$key) {
            $this->data[$name] = $value;
        } else {
            trigger_error('Cannot set ' . static::$key . ' on ' . static::$table, E_USER_ERROR);
        }
    }

    /**
     * Set Property
     */
    public function setData($id, $data) {
        $this->id = $id;
        $this->data = $data;
    }

    /**
     * Save (Insert or Update)
     */
    public function save() {
        if ($this->id > 0) {
            return $this->update($this->data);
        } else {
            return $this->insert($this->data);
        }
    }

    /**
     * Insert
     */
    public function insert($data, $ignore = []) {

        // Set the local model's data
        $this->data = $data;

        // Insert and set the local model's ID
        $this->id = Sql::insert(static::$table, $data, $ignore);

        // Return the newly created ID
        return $this->id;

    }

    /**
     * Update
     */
    public function update($data) {

        // Merge new data with old data
        $this->data = array_merge($this->data, $data);

        // Add the key to the data for the purposes of parameter
        // binding for the WHERE clause
        $data[static::$key] = $this->id;

        // Update
        Sql::update(static::$table, $data, Sql::where([static::$key => $this->id]));
        return $this->id;

    }

    /****************************************
      Getters
    *****************************************/
    
    /**
     * Magic Get: Get a property by doing - $model->property
     */
    public function __get($name) {
        if ($this->exists() && array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            trigger_error('Undefined ' . static::$table . ' property: ' . $name, E_USER_ERROR);
        }
    }

    /**
     * Get the Model's ID
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get all of the model data
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Magic To String
     */
    public function __toString() {
        return !$this->exists() ? 'Model has no data' : print_r($this->data, TRUE);
    }


    /****************************************
      Collection
    *****************************************/

    /**
     * Collect All
     */
    public static function all($where_clause = []) {

        // Create an SQL "WHERE" clause
        $sql_where = Sql::where($where_clause);

        // SQL
        $sql = "
            SELECT * FROM " . static::$table . $sql_where;

        // Get Results
        $results = DB::select($sql, $where_clause);

        // Return a collection
        return self::makeCollection($results);
        
    }

    /**
     * Collection Factory
     */
    protected static function makeCollection($results) {

        // Make Collection
        $collection = new Collection();
        foreach($results as $row) {

            // Create new Model
            $model = new static();
            $model->setData($row->{static::$key}, (array)$row);
           
            // Add Model to Collection
            $collection->add($model);

        }

        return $collection;

    }

}