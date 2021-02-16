<?php

/**
 * Stock class to keep information about a particular stock.
 */

class Stock {
    /**
     * @var string
     */
    public $symbol; # stock market ticker symbol

    /**
     * @var string
     */
    public $name;

    /**
     * stock object constructor
     *
     * @param string $symbol the stock ticker symbol
     * @param string $name the nameof the stock
     * @access public
     */
    public function __construct($name, $ticker) {
        $this->symbol = $ticker;
        $this->name = $name;
        echo "Created stock\n";
    }

}

?>
