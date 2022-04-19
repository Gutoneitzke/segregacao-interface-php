<?php
  interface Abelha
  {
      public function voar();
  }

  interface AbelhasQuePicam extends Abelha
  {
      public function picar();
  }

  class Jatai implements Abelha
  {
      function __construct()
      {
          echo "Jataí: <br>";
          $this->voar();
      }
      public function voar()
      {
          echo "Voa";
      }
  }

  class Vespa implements AbelhasQuePicam
  {
  	  function __construct()
      {
      	  echo "Vespa: <br>";
          $this->voar();
          $this->picar();
      }
      public function voar()
      {
          echo "Voa <br>";
      }

      public function picar()
      {
          echo "Pica";
      }
  }
  
  $abelha1 = new Vespa();
  echo "<br><br>";
  $abelha2 = new Jatai();
?>
