<?php

  trait Tax {

    // 消費税を返す
    public function getTax(){
      return 10;
    }
  }

  trait ForeignTax{
    public function getTax(){
      return 20;
    }
  }

  class Item {
    use Tax, ForeignTax {
      Tax::getTax insteadof ForeignTax;
      ForeignTax::getTax as getForeignTax;
    }
    private $price;
  }

  class Service{
    use Tax;
    private $service_price;
  }

  $item = new Item();
  echo $item->getForeignTax() . "\n";

  $service = new Service();
  echo $service->getTax() . "\n";