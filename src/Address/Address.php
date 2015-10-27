<?php
namespace Packaged\Rwd\Address;

class Address implements AddressInterface
{
  protected $_lineOne;
  protected $_lineTwo;
  protected $_lineThree;
  protected $_town;
  protected $_county;
  protected $_country;
  protected $_postalCode;

  /**
   * @return mixed
   */
  public function getLineOne()
  {
    return $this->_lineOne;
  }

  /**
   * @param mixed $lineOne
   *
   * @return Address
   */
  public function setLineOne($lineOne)
  {
    $this->_lineOne = $lineOne;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getLineTwo()
  {
    return $this->_lineTwo;
  }

  /**
   * @param mixed $lineTwo
   *
   * @return Address
   */
  public function setLineTwo($lineTwo)
  {
    $this->_lineTwo = $lineTwo;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getLineThree()
  {
    return $this->_lineThree;
  }

  /**
   * @param mixed $lineThree
   *
   * @return Address
   */
  public function setLineThree($lineThree)
  {
    $this->_lineThree = $lineThree;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getTown()
  {
    return $this->_town;
  }

  /**
   * @param mixed $town
   *
   * @return Address
   */
  public function setTown($town)
  {
    $this->_town = $town;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getCounty()
  {
    return $this->_county;
  }

  /**
   * @param mixed $county
   *
   * @return Address
   */
  public function setCounty($county)
  {
    $this->_county = $county;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getCountry()
  {
    return $this->_country;
  }

  /**
   * @param mixed $country
   *
   * @return Address
   */
  public function setCountry($country)
  {
    $this->_country = $country;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getPostalCode()
  {
    return $this->_postalCode;
  }

  /**
   * @param mixed $postalCode
   *
   * @return Address
   */
  public function setPostalCode($postalCode)
  {
    $this->_postalCode = $postalCode;
    return $this;
  }

}
