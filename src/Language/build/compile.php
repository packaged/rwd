<?php

//https://meta.wikimedia.org/w/index.php?title=Template:N_en/list&action=edit

$lines = file('./src.txt');
$lineProcess = 0;
$language = $languages = [];
foreach($lines as $line)
{
  $dat = explode('|', $line);
  $content = trim(array_pop($dat));
  if($content == '-')
  {
    if(isset($language[1]) && strlen($language[1]) < 10)
    {
      $safeCode = str_replace('-', '_', $language[1]);
      $language['code'] = $safeCode;
      $language['const'] = 'CODE_' . strtoupper($safeCode);
      $language['class'] = str_replace(' ', '', ucwords(strtolower(str_replace('_', ' ', $safeCode))) . 'Language');
      $languages[$language[1]] = $language;
    }
    $lineProcess = 0;
    $language = [];
  }
  else
  {
    $lineProcess++;
    if($lineProcess == 5)
    {
      $content = substr($content, 5, -2);
    }
    if($lineProcess < 6)
    {
      $language[$lineProcess] = $content;
    }
  }
}

$codeInterface = '<?php
namespace Packaged\Rwd\Language;

interface LanguageCode
{
  const EN = \'en\';
  const DE = \'de\';
  const ES = \'es\';
  const FR = \'fr\';
  const IT = \'it\';
  const PT = \'pt\';
';
foreach($languages as $code => $data)
{
  $codeInterface .= '  const ' . $data['const'] . ' = \'' . $code . '\';' . PHP_EOL;
}
$codeInterface .= '
}' . PHP_EOL;

file_put_contents('../LanguageCode.php', $codeInterface);

foreach($languages as $code => $language)
{
  $fileTemplate = '<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ' . $language['class'] . ' extends AbstractLanguage
{
  public function getEnglishName()
  {
    return \'' . addslashes(str_replace('&nbsp;', ' ', $language[2])) . '\';
  }

  public function getNativeName()
  {
    return \'' . addslashes(str_replace('&nbsp;', ' ', $language[4])) . '\';
  }

  public function getCode()
  {
    return \'' . $code . '\';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_' . strtoupper($language[3]) . ';
  }
}
';
  file_put_contents('../Languages/' . $language['class'] . '.php', $fileTemplate);
}
