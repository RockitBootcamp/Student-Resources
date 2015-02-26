<?php
namespace App\Models;

use DB;

class Customer extends Model {
    protected static $table = 'customer';
    protected static $primary_key = 'id';
    protected static $fields = [
        'first_name',
        'last_name',
        'email',
        'phone'
    ];

    /*
     * possible implementations of insert() and update()
     */
    protected function insert() {
        $sql = "insert into customer (first_name, last_name, email, phone)
            values(:fname, :lname, :email, :phone)";
        DB::insert($sql, [
            ':fname' => $this->first_name,
            ':lname' => $this->last_name,
            ':email' => $this->email,
            ':phone' => $this->phone
        ]);
        return DB::getPdo()->lastInsertId();
    }

    protected function update() {
        $sql = 'update customer set first_name = :fname,
            last_name = :lname, email = :email, phone = :phone
            where ' . static::$primary_key . ' = :id';
        DB::update($sql, [
            ':fname' => $this->first_name,
            ':lname' => $this->last_name,
            ':email' => $this->email,
            ':phone' => $this->phone,
            ':id' => $this->id
        ]);
    }


    /*
     * alternate implementations of insert() and update()
     * using query builder
     */
    protected function insert2() {
        return DB::table(static::$table)
            ->insertGetId([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone   
        ]);
    }
    protected function update2() {
        DB::table(static::$table)
            ->where(static::$primary_key, $this->id)
            ->update([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'phone' => $this->phone,                
            ]);
    }


    /*
     * generic implementations of insert() and update()
     * using query builder
     */
    protected function insert3() {
        return DB::table(static::$table)
            ->insertGetId($this->field_data);
    }

    protected function update3() {
        DB::table(static::$table)
            ->where(static::$primary_key, $this->id)
            ->update($this->field_data);
    }
}