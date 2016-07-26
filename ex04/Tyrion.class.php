<?php
  class Tyrion extends Lannister {
    public function sleepWith($arg) {
      $incest = get_class($arg);
      if ($incest == 'Jaime')
        print("Not even if I'm drunk !" . PHP_EOL);
      else if ($incest == 'Sansa')
        print("Let's do this." . PHP_EOL);
      else if ($incest == 'Cersei')
        print("Not even if I'm drunk !" . PHP_EOL);
    }
  }
?>
