<?php
namespace Packaged\Tests\Rwd\Language;

use Packaged\Rwd\Language\LanguageHelper;
use Packaged\Rwd\Language\Languages\EnLanguage;
use PHPUnit\Framework\TestCase;

class LanguageTest extends TestCase
{
  public function testUsdCurrencyValue()
  {
    $enActual = new EnLanguage();
    $enHelper = LanguageHelper::getLanguage('eN');
    $this->assertEquals($enActual->getEnglishName(), $enHelper->getEnglishName());
    $this->assertEquals($enActual->getNativeName(), $enHelper->getNativeName());
    $this->assertEquals($enActual->getCode(), $enHelper->getCode());
    $this->assertEquals($enActual->getDirection(), $enHelper->getDirection());

    print_r(LanguageHelper::commonLanguages());
  }
}
