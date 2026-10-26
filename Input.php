<?php

class Input {
    /**
     * Input id.
     */
    private $id;

    /**
     * Input label.
     */
    private $label;

    /**
     * Input label class.
     */
    private $labelClass;

    /**
     * Input container class.
     */
    private $containerClass;

    /**
     * Input attributes.
     */
    private $attributes = [
        'id',
        'class',
        'name',
        'placeholder',
        'required',
        'type',
        'value'
    ];

    /**
     * Set the input id function.
     *
     * @param type $id Input id.
     * @return type void.
     */
    public function setId($id = '') {
        $this->id = $id;
    }

    /**
     * Get the input id function.
     *
     * @return type string Input id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set the input label function.
     *
     * @param type $label Input label.
     * @return type void.
     */
    public function setLabel($label = '') {
        $this->label = $label;
    }

    /**
     * Get the input label function.
     *
     * @return type string Input label.
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * Set the input label class function.
     *
     * @param type $labelClass Input label class.
     * @return type string Input label class.
     */
    public function setLabelClass($labelClass = '') {
        $this->labelClass = $labelClass;
    }

    /**
     * Get the input label class function.
     *
     * @return type string Input label class.
     */
    public function getLabelClass() {
        return $this->labelClass;
    }

    /**
     * Set the input container class function.
     *
     * @param type $containerClass Input container class.
     * @return type void.
     */
    public function setContainerClass($containerClass = '') {
        $this->containerClass = $containerClass;
    }

    /**
     * Get the input container class function.
     *
     * @return type string Input container class.
     */
    public function getContainerClass() {
        return $this->containerClass;
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
        if (isset($attrs['id'])) {
            $this->setId($attrs['id']);
        }
        return $strAttributes;
    }

    /**
     * Constructor.
     *
     * @param type $containerClass Input container class.
     * @return type void.
     */
    public function __construct($containerClass = '') {
        $this->setContainerClass($containerClass);
    }

    /**
     * Generate the HTML input tag function.
     *
     * @param type array Input attributes.
     * @return type string Input container, label and input.
     */
    public function create($attrs = []) {
        $strAttributes = $this->strAttributes($attrs);
        $html  = '<div class="' . $this->getContainerClass() . '">';
        if (strlen($this->getLabel())) {
            $html .= '    <label for="' . $this->getId() . '" class="' . $this->getLabelClass() . '">' . $this->getLabel() . '</label>';
        }
        $html .= '    <input ' . $strAttributes . '>';
        $html .= '</div>';
        return $html;
    }
}
