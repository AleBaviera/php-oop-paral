<?php
header('Content-type: application/json');
  class Paral {

    public $base;
    public $alt;
    public $prof;


    public function __construct($base, $alt, $prof) {

        $this -> base = $base;
        $this -> alt = $alt;
        $this -> prof = $prof;

    }

    public function getArea() {

      $area = 2 * ($this -> base * $this -> alt + $this -> base * $this -> prof + $this -> alt * $this -> prof);
      return $area;
    }
    public function getVol() {

      $vol = $this -> base * $this -> alt * $this -> prof;
      return $vol;
    }
  };

  $b1 = $_GET['base1'];
  $h1 = $_GET['alt1'];
  $p1 = $_GET['prof1'];


  $b2 = $_GET['base2'];
  $h2 = $_GET['alt2'];
  $p2 = $_GET['prof2'];

  $b3 = $_GET['base3'];
  $h3 = $_GET['alt3'];
  $p3 = $_GET['prof3'];

  $parals = [
    new Paral($b1, $h1, $p1),
    new Paral($b2, $h2, $p2),
    new Paral($b3, $h3, $p3),
  ];


  $res = [];


    $sumArea = 0;
    $sumVol = 0;
    foreach ($parals as $paral) {

    $area = $paral -> getArea();
    $volume = $paral -> getVol();
    $sumArea += $area;
    $sumVol+= $volume;

    $res[]= $paral;
    $res[]= $area;
    $res[]= $volume;

    }

    $res[]=$sumArea;
    $res[]=$sumVol;





  echo json_encode($res);
?>
