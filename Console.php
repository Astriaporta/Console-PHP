<?php

include 'Colors.php';

/**
 *
 */
class Console
{
  private $colors;

  public function __construct()
  {
    $this->colors =  new Colors();
  }

  public function info($message = '')
  {
    echo $this->colors->getColoredString("[INFO]", "white") .' ' . $message . "\n";
  }

  public function warn($message = '')
  {
    echo $this->colors->getColoredString("[WARNING]", "yellow") .' ' . $message . "\n";
  }

  public function error($message = '')
  {
    echo $this->colors->getColoredString("[ERROR]", "red") .' ' . $message . "\n";
  }

  public function line($message = '')
  {
    echo $message;
  }

  public function lineln($message = '')
  {
    echo $message. "\n";
  }

  public function exec($value='', $showOutput = false)
  {
    $output = shell_exec($value);

    if ($showOutput) {
      $this->lineln($output);
    }
  }
}
