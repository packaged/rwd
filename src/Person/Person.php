<?php
namespace Packaged\Rwd\Person;

class Person extends AbstractPerson
{
  private $_rawInput;

  private $_prefix = [];
  private $_firstName;
  private $_middleNames = [];
  private $_lastNameCompound;
  private $_lastName;
  private $_suffix = [];
  private $_profession = [];
  private $_nickname;

  /**
   * @return mixed
   */
  public function getRawInput()
  {
    return $this->_rawInput;
  }

  /**
   * @return mixed
   */
  public function getPrefix()
  {
    return $this->_prefix;
  }

  /**
   * @return mixed
   */
  public function getFirstName()
  {
    return $this->_smartUcWords($this->_firstName);
  }

  /**
   * @param bool $asArray
   *
   * @return array|string
   */
  public function getMiddleNames($asArray = false)
  {
    return $asArray ? $this->_middleNames : $this->_smartUcWords(implode(' ', $this->_middleNames));
  }

  /**
   * @return string
   */
  public function getLastNameCompound()
  {
    return $this->_smartUcWords($this->_lastNameCompound);
  }

  /**
   * @param bool $withCompound
   *
   * @return string
   */
  public function getLastName($withCompound = true)
  {
    $compound = $withCompound ? $this->getLastNameCompound() : '';
    return ($compound ? $compound . ' ' : '') . $this->_smartUcWords($this->_lastName);
  }

  private function _smartUcWords($string)
  {
    if($string === null)
    {
      return '';
    }
    // if whole string is uppercase, lowercase first
    if($string == strtoupper($string))
    {
      $string = strtolower($string);
    }
    return ucwords($string);
  }

  /**
   * @return mixed
   */
  public function getSuffix()
  {
    return $this->_suffix;
  }

  /**
   * @return mixed
   */
  public function getProfession()
  {
    return $this->_profession;
  }

  /**
   * @return mixed
   */
  public function getNickname()
  {
    return $this->_nickname;
  }

  /**
   * @return mixed
   */
  public function getFullName()
  {
    return implode(
      ' ',
      array_filter(
        [
          implode(' ', $this->getPrefix()),
          $this->getFirstName(),
          $this->getMiddleNames(),
          $this->getLastName(),
          implode(' ', $this->getSuffix()),
          implode(' ', $this->getProfession()),
        ]
      )
    );
  }

  public function __construct($name)
  {
    if(filter_var($name, FILTER_VALIDATE_EMAIL))
    {
      [$name,] = explode('@', $name, 2);
      $name = preg_replace('/[^a-zA-Z]/', ' ', $name);
    }

    $this->_rawInput = $name;
    $this->_parse();
  }

  private function _parse()
  {
    $words = $this->_splitWords($this->_rawInput);

    // suffixes
    $words = $this->_doParse($words, 'profession');
    $words = $this->_doParse($words, 'suffix');

    // prefixes
    $words = $this->_doParse($words, 'prefix');

    // remainder is name
    $words = $this->_normalizeName($words);

    // nickname
    $words = $this->_parseNickname($words);

    // name parts
    $this->_parseName($words);
  }

  private function _splitWords($string)
  {
    return array_filter(preg_split('/\s/', $string));
  }

  private function _normalizeName($words)
  {
    // flip if comma
    $full = implode(' ', $words);
    if(($pos = strpos($full, ',')) !== false)
    {
      $full = trim(substr($full, $pos + 1) . ' ' . substr($full, 0, $pos));
      $words = explode(' ', $full);
    }
    return $words;
  }

  private function _parseNickname($words)
  {
    $full = implode(' ', $words);
    if(preg_match('/\s("(.*)"|\((.*)\))\s/', $full, $matches))
    {
      $full = str_replace($matches[0], ' ', $full);
      $this->_nickname = $matches[2] ?: $matches[3];
      return explode(' ', $full);
    }
    return $words;
  }

  private function _parseName($words)
  {
    // if we have more than one sr/jr in suffixes, all but last are likely to be part of the name.
    $found = false;
    $newWords = [];
    foreach(array_reverse(array_keys($this->_suffix)) as $suffixKey)
    {
      $suffix = $this->_suffix[$suffixKey];
      if($suffix == 'Senior' || $suffix == 'Junior')
      {
        // if only one word and we have Sr or Jr suffix, then it's probably a surname
        if($found)
        {
          unset($this->_suffix[$suffixKey]);
          array_unshift($newWords, $suffix);
        }
        else
        {
          $found = true;
        }
      }
    }
    if(count($newWords) > 0)
    {
      $words = array_merge($words, $newWords);
    }

    if(count($words) == 1)
    {
      foreach(array_keys($this->_suffix) as $suffixKey)
      {
        $suffix = $this->_suffix[$suffixKey];
        if($suffix == 'Senior' || $suffix == 'Junior')
        {
          unset($this->_suffix[$suffixKey]);
          array_push($words, $suffix);
          break;
        }
      }
    }

    $i = 0;
    foreach($words as $word)
    {
      if($this->_isCompoundFragment($word))
      {
        $this->_lastNameCompound = $word;
        $this->_lastName = implode(' ', array_slice($words, $i + 1));
        $words = array_slice($words, 0, $i);
        break;
      }
      $i++;
    }

    $this->_firstName = array_shift($words);

    if(count($words) > 0 && empty($this->_lastName))
    {
      $this->_lastName = array_pop($words);
    }

    if(count($words) > 0)
    {
      $this->_middleNames = $words;
    }

    return [];
  }

  private function _doParse($words, $partType)
  {
    $prefix = false;
    switch($partType)
    {
      case 'prefix':
        $wordsMethod = '_getPrefixWord';
        $property = '_prefix';
        $prefix = true;
        break;
      case 'suffix':
        $wordsMethod = '_getNameSuffixWord';
        $property = '_suffix';
        break;
      case 'profession':
        $wordsMethod = '_getProfessionSuffixWord';
        $property = '_profession';
        break;
      default:
        return $words;
    }

    $this->{$property} = [];

    while(true)
    {
      if(count($words) <= 0)
      {
        break;
      }
      $wordsUpdated = false;

      if($prefix)
      {
        $word = reset($words);
      }
      else
      {
        $word = end($words);
      }

      if(($replace = $this->$wordsMethod($word)) !== null)
      {
        if($prefix)
        {
          array_push($this->{$property}, $replace);
          array_shift($words);
        }
        else
        {
          array_unshift($this->{$property}, $replace);
          array_pop($words);
        }
        $wordsUpdated = true;
      }
      else if(strrpos($word, '.') === false)
      {
        break;
      }
      else
      {
        $subWords = explode('.', $word);
        $subCount = count($subWords);
        $i = 0;
        while($i < $subCount)
        {
          if($prefix)
          {
            $subWord = implode('.', array_slice($subWords, $i, 1));
          }
          else
          {
            $subWord = implode('.', array_slice($subWords, $subCount - $i - 1));
          }
          if(($replace = $this->$wordsMethod($subWord)) !== null)
          {
            if($prefix)
            {
              array_push($this->{$property}, $replace);
              // shift word
              array_shift($words);
              // split first part off and unshift the rest
              array_unshift($words, implode('.', array_slice($subWords, $i + 1)));
            }
            else
            {
              array_unshift($this->{$property}, $replace);
              // shift word
              array_pop($words);
              // split last part off and unshift the rest
              array_push($words, implode('.', array_slice($subWords, 0, $subCount - $i - 1)));
            }
            $wordsUpdated = true;
            break;
          }
          $i++;
        }
      }
      if(!$wordsUpdated)
      {
        break;
      }
    }

    return $words;
  }

}
