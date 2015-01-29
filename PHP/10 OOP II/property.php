<?php 

error_reporting(!E_STRICT);

class Property {
    public $acreage;
    public $for_sale;

    public function __construct($acreage, $for_sale=true) {
        $this->acreage = $acreage;
        $this->for_sale = $for_sale;
    }
}

class ResidentialProperty extends Property {
    public $num_bedrooms;
    public $has_pool;

    public function __construct($num_bedrooms, $has_pool,
                                $acreage=1, $for_sale=true) {
        parent::__construct($acreage, $for_sale);
        $this->num_bedrooms = $num_bedrooms;
        $this->has_pool = $has_pool;
    }
}

class CommercialProperty extends Property {
    public $has_parking;
    public $zoning;

    public function __construct($zoning, $has_parking,
                                $acreage, $for_sale=true) {
        parent::__construct($acreage, $for_sale);
        $this->zoning = $zoning;
        $this->has_parking = $has_parking;
    }    
}
