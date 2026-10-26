<?php

class Element {
    /**
     * Element attributes.
     */
    private $attributes = [];

    /**
     * Set an Element attribute function.
     *
     * @param type $attr Element attribute.
     * @return type void.
     */
    public function setAttribute($attr = '') {
        if (strlen($attr)) {
            $this->attributes[] = $attr;
        }
    }

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
     * @param type $attrs Attributes array.
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
}
