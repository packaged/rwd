<?php
namespace Packaged\Tests\Rwd\Person;

use Packaged\Rwd\Person\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @dataProvider data
   *
   * @param string $name
   * @param array  $tests
   */
  public function testPerson($name, $tests)
  {
    $person = new Person($name);
    if(isset($tests['prefix']))
    {
      $this->assertEquals($tests['prefix'], $person->getPrefix());
    }
    if(isset($tests['firstName']))
    {
      $this->assertEquals($tests['firstName'], $person->getFirstName());
    }
    if(isset($tests['middleNames']))
    {
      $this->assertEquals($tests['middleNames'], $person->getMiddleNames());
    }
    if(isset($tests['lastNameCompound']))
    {
      $this->assertEquals($tests['lastNameCompound'], $person->getLastNameCompound());
    }
    if(isset($tests['lastName']))
    {
      $this->assertEquals($tests['lastName'], $person->getLastName());
    }
    if(isset($tests['suffix']))
    {
      $this->assertEquals($tests['suffix'], $person->getSuffix());
    }
    if(isset($tests['profession']))
    {
      $this->assertEquals($tests['profession'], $person->getProfession());
    }
    if(isset($tests['nickname']))
    {
      $this->assertEquals($tests['nickname'], $person->getNickname());
    }
    if(isset($tests['fullName']))
    {
      $this->assertEquals($tests['fullName'], $person->getFullName());
    }
  }

  public function data()
  {
    return [
      [
        'Brian Senior',
        [
          'firstName' => 'Brian',
          'lastName'  => 'Senior',
          'fullName'  => 'Brian Senior',
        ],
      ],
      [
        'Brian Senior jr',
        [
          'firstName' => 'Brian',
          'lastName'  => 'Senior',
          'fullName'  => 'Brian Senior Junior',
        ],
      ],
      [
        'Brian Senior jr Sr',
        [
          'firstName'   => 'Brian',
          'middleNames' => 'Senior',
          'lastName'    => 'Junior',
          'fullName'    => 'Brian Senior Junior Senior',
        ],
      ],
      [
        'edward lodewijk van halen',
        [
          'firstName'        => 'Edward',
          'middleNames'      => 'Lodewijk',
          'lastNameCompound' => 'Van',
          'lastName'         => 'Van Halen',
        ],
      ],
      [
        'prof.kay, tom (Blacksmith) sr iii phd.bsc.m.b',
        [
          'prefix'     => ['Prof.'],
          'nickname'   => 'Blacksmith',
          'firstName'  => 'Tom',
          'lastName'   => 'Kay',
          'suffix'     => ['Senior', 'III'],
          'profession' => ['PhD', 'BSc', 'MB'],
        ],
      ],
      [
        'prof. kay, tom (Blacksmith) sr iii phd. bsc. m.b.',
        [
          'prefix'     => ['Prof.'],
          'nickname'   => 'Blacksmith',
          'firstName'  => 'Tom',
          'lastName'   => 'Kay',
          'suffix'     => ['Senior', 'III'],
          'profession' => ['PhD', 'BSc', 'MB'],
        ],
      ],
      [
        'brooke a j bryan',
        [
          'firstName'   => 'Brooke',
          'lastName'    => 'Bryan',
          'middleNames' => 'A J',
          'fullName'    => 'Brooke A J Bryan',
        ],
      ],
      [
        'BROOKE A J BRYAN',
        [
          'firstName'   => 'Brooke',
          'lastName'    => 'Bryan',
          'middleNames' => 'A J',
          'fullName'    => 'Brooke A J Bryan',
        ],
      ],
      [
        'joebloggs@yahoo.com',
        [
          'firstName'   => 'Joebloggs',
          'lastName'    => '',
          'middleNames' => '',
          'fullName'    => 'Joebloggs',
        ],
      ],
      [
        'joe.bloggs@yahoo.com',
        [
          'firstName'   => 'Joe',
          'lastName'    => 'Bloggs',
          'middleNames' => '',
          'fullName'    => 'Joe Bloggs',
        ],
      ],
      [
        'Tomd.a. Kay',
        [
          'firstName'   => 'Tomd.a.',
          'lastName'    => 'Kay',
          'middleNames' => '',
          'fullName'    => 'Tomd.a. Kay',
        ],
      ],
      [
        'Tomd. Kay',
        [
          'firstName'   => 'Tomd.',
          'lastName'    => 'Kay',
          'middleNames' => '',
          'fullName'    => 'Tomd. Kay',
        ],
      ],
    ];
  }
}
