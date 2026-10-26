<?php

require_once 'Element.php';

class Form extends Element {
    /**
     * Constructor
     */
    public function __construct() {
        $this->setAttribute('action');
        $this->setAttribute('class');
        $this->setAttribute('method');
    }

    /**
     * Open the HTML form tag function.
     *
     * @return type string Form open tag.
     */
    public function formInit($attrs = []) {
        $strAttributes = $this->strAttributes($attrs);
        return '<form ' . $strAttributes . '>';
    }

    /**
     * Close the HTML form tag function.
     *
     * @return type string Form close tag.
     */
    public function formEnd() {
        return '</form>';
    }
}
