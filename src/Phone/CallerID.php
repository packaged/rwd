<?php
namespace Packaged\Rwd\Phone;

class CallerID
{
  const reserved = [
    '266696687'   => 'Anonymous',
    '7378742883'  => 'Restricted',
    '2562533'     => 'Blocked',
    '8656696'     => 'Unknown',
    '86282452253' => 'Unavailable',
  ];

  protected static function _strip($number)
  {
    return str_replace(['+', ' '], '', $number);
  }

  public static function isReserved($number)
  {
    return isset(self::reserved[self::_strip($number)]);
  }

  public static function toString($number)
  {
    $stripNumber = self::_strip($number);
    return isset(self::reserved[$stripNumber]) ? self::reserved[$stripNumber] : $number;
  }
}
