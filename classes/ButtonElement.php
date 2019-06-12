<?php
class ButtonElement extends FormElement
{

    public function render(): string
    {
        $html=sprintf('<button type="%s">%s</button> ',$this->getName(), $this->getLabel());
        return $html;
    }
}