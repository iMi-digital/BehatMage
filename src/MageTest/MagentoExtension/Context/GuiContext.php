<?php
namespace MageTest\MagentoExtension\Context;

use Behat\Behat\Context\BehatContext;
use Behat\Gherkin\Node\PyStringNode;

use Behat\Mink\Mink,
Behat\Mink\Session,
Behat\Mink\Driver\Selenium2Driver,
Behat\MinkExtension\Context\MinkContext;

use Selenium\Client as SeleniumClient;

class GuiContext extends MinkContext
{

}