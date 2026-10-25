<?php

class Form {
    /**
     * Form attributes.
     */
    private $attributes = [
        'action',
        'class',
        'method'
    ];

    /**
     * Get the attributes array function.
     *
     * @return type array Attributes array.
     */
    public function getAttributes() {
        return $this->attributes;
    }

    /**
     * Get the total of attributes function.
     *
     * @return type integer Total of attributes.
     */
    public function getTotalAttributes() {
        return count($this->attributes);
    }

    /**
     * Create the attributes string function.
     *
     * @param type $attrs Form attributes array.
     * @return type string Parameters in string format.
     */
    public function strAttributes($attrs = []) {
        $strAttributes = '';
        $attributes = $this->getAttributes();
        $total      = $this->getTotalAttributes();
        for ($i = 0; $i < $total; $i++) {
            if (isset($attrs[$attributes[$i]])) {
                $strAttributes .= $attributes[$i] . '="' . $attrs[$attributes[$i]] . '"';
            }
        }
        return $strAttributes;
    }

    /**
     * Open the HTML form tag.
     */
    public function formStart($attrs = []) {
        $strAttributes = $this->strAttributes($attrs);
        return '<form ' . $strAttributes . '>';
    }

    /**
     * Close the HTML form tag.
     */
    public function formEnd() {
        return '</form>';
    }
}
