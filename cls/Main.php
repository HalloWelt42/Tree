<?php

namespace cls;

class Main
{

  public function __construct()
  {

    // Abteilungsleiter
    $a = new Human(10000);

    // Teamleiter
    $b = new Human(5000);
    $c = new Human(5000);

    // Facharbeiter
    $d = new Human(2000);
    $e = new Human(2000);
    $f = new Human(2000);

    // Studenten
    $g = new Human(1000);
    $h = new Human(1000);
    $i = new Human(1000);

    // 1. Hierachieebene
    $d->add_children($g);
    $d->add_children($h);
    $f->add_children($i);

    // 2. Hierachieebene
    $b->add_children($d);
    $b->add_children($e);
    $c->add_children($f);

    // 3. Hierachieebene
    $a->add_children($b);
    $a->add_children($c);

    print_r($this->get_gehaelter($a));

  }

  /**
   * @param Human $human
   * @return int
   */
  public function get_gehaelter(Human $human)
  {
    $sum = $human->get_gehalt();
    /**
     * @var $child Human
     */
    foreach ($human->get_children() as $child) {
      $sum += $this -> get_gehaelter( $child );
    }

    return $sum;
  }


}