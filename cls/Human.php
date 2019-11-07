<?php


namespace cls;


/**
 * Class Human
 * @package cls
 */
class Human
{

  /**
   * @var array
   */
  private $children;

  /**
   * @var int
   */
  private $gehalt;

  /**
   * Human constructor.
   * @param int $gehalt
   */
  public function __construct( int $gehalt )
  {
    $this -> children = [];
    $this -> gehalt = $gehalt;
  }


  /**
   * @param Human $child
   * @return $this
   */
  public function add_child( Human $child ) : self {
    $this -> children[] = $child;
    return $this;
  }

  /**
   * @return array
   */
  public function get_children(){
    return $this -> children;
  }


  /**
   * @return int
   */
  public function get_gehalt() : int {
    return $this -> gehalt;
  }




}

