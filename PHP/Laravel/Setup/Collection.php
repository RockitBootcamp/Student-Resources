<?php

namespace App\Models;

class Collection {

	private $models = [];

	/**
	 * Setters
	 */
	public function add(Model $model) {
		$this->models[$model->getId()] = $model;
	}

	/****************************************
	  Getters
	*****************************************/
	
	/**
	 * Get Model By ID
	 */
	public function get($id) {
	    if (array_key_exists($id, $this->models)) {
	        return $this->models[$id];
	    } else {
	        trigger_error('Model ' . $id . ' not found in collection.', E_USER_ERROR);
	    }
	}

	/**
	 * Return an array of model objects
	 */
	public function getArray() {
		return $this->models;
	}

	/**
	 * Return an array of model arrays
	 */
	public function getArrayDeep() {
		$a = [];
		foreach($this->models as $model) {
			$a[] = $model->getData();
		}
		return $a;
	}

	/**
	 * Magic To String. This allows you to output the controller as if it's a string. Should
	 * be used for debugging purposes only
	 */
	public function __toString() {
	    return empty($this->models) ? 'Collection has no models' : print_r($this->getArrayDeep(), true);
	}


}
