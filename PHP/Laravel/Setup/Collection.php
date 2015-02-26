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
	 * Get Models as Array
	 */
	public function getArray() {
		return $this->models;
	}

	/**
	 * Magic To String
	 */
	public function __toString() {
	    return empty($this->models) ? 'Collection has no models' : print_r($this->models, TRUE);
	}


}