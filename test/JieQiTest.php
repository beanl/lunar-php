<?php

use com\nlf\calendar\Solar;
use com\nlf\calendar\Lunar;
use PHPUnit\Framework\TestCase;

class JieQiTest extends TestCase
{
  public function test()
  {
    $solar = Solar::fromYmd(2021, 12, 21);
    $lunar = $solar->getLunar();
    $this->assertEquals('冬至', $lunar->getJieQi());
  }

  public function test7()
  {
    $lunar = Lunar::fromYmd(2012, 9, 1);
    $jieQi = $lunar->getJieQiTable();
    $this->assertEquals('2012-09-07 13:29:00', $jieQi['白露']->toYmdHms());
  }

  public function test8()
  {
    $lunar = Lunar::fromYmd(2050, 12, 1);
    $jieQiTable = $lunar->getJieQiTable();
    $this->assertEquals('2050-12-07 06:41:00', $jieQiTable['DA_XUE']->toYmdHms());
  }

}
