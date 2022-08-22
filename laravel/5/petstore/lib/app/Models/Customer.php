<?php
/**
 * Customer
 */
namespace app\Models;

/**
 * Customer
 */
class Customer {

    /** @var int $id */
    public $id = 0;

    /** @var string $username */
    public $username = "";

    /** @var \app\Models\Address[] $address */
    public $address = [];

}
