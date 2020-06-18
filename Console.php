<?php

include __DIR__ . '/Colors.php';

/**
 *
 */
class Console extends Colors
{
  public function info($message = '')
  {
    echo $this->getColoredString("[INFO]", "light_blue") .' ' . $message . "\n";
  }

  public function warn($message = '')
  {
    echo $this->getColoredString("[WARNING]", "yellow") .' ' . $message . "\n";
  }

  public function error($message = '')
  {
    echo $this->getColoredString("[ERROR]", "light_red") .' ' . $message . "\n";
  }

  public function success($message = '')
  {
    echo $this->getColoredString("[SUCCESS]", "light_green") .' ' . $message . "\n";
  }

  public function line($message = '')
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
