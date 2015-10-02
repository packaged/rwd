<?php
$template = '<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class {{iso2}}Country implements CountryInterface
{
  public function getName()
  {
    return \'{{name}}\';
  }

  public function getIso2()
  {
    return \'{{iso2}}\';
  }

  public function getIso3()
  {
    return \'{{iso3}}\';
  }

  public function getWmo()
  {
    return \'{{wmo}}\';
  }

  public function getNumericCode()
  {
    return {{code}};
  }

  public function getDialPrefix()
  {
    return {{dial}};
  }

  public function getCurrencyCode()
  {
    return \'{{currency}}\';
  }
}
';

$countries = json_decode(file_get_contents('country.json'));
$iso2 = 'ISO3166-1-Alpha-2';
$iso3 = 'ISO3166-1-Alpha-3';
$isoCode = 'ISO3166-1-numeric';

foreach($countries as $country)
{

  $file = str_replace(
    [
      '{{name}}',
      '{{iso2}}',
      '{{iso3}}',
      '{{wmo}}',
      '{{code}}',
      '{{dial}}',
      '{{currency}}',
    ],
    [
      addslashes($country->name),
      $country->$iso2,
      $country->$iso3,
      $country->WMO,
      (int)$country->$isoCode,
      (int)$country->Dial,
      $country->currency_alphabetic_code,
    ],
    $template
  );

  file_put_contents('../' . $country->$iso2 . 'Country.php', $file);
}
