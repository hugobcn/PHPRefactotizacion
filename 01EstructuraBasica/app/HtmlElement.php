<?php

namespace App;

class HtmlElement
{
    private $name;
    private $content;
   private $attributes;

    public function __construct(string $name, array $attributes = [], $content = null)
    {
        $this->name = $name;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    public function render()
    {
        //return 'HTML ELEMENT HERE';
        // Si el elemento tiene atributos:
        if (! empty($this->attributes)) {
            $htmlAttributes = '';

            foreach ($this->attributes as $attribute => $value) {
                if (is_numeric($attribute)) {
                    $htmlAttributes .= ' '.$value;
                } else {
                    $htmlAttributes .= ' '.$attribute.'="'.htmlentities($value, ENT_QUOTES, 'UTF-8').'"'; // name="value"
                }
            }

            // Abrir la etiqueta con atributos
            $result = '<'.$this->name.$htmlAttributes.'>';
        } else {
            // Abrir la etiqueta sin atributos
            $result = '<'.$this->name.'>';
        }

        // Si el elemento es void
        if (in_array($this->name, ['br', 'hr', 'img', 'input', 'meta'])) {
            return $result;
        }

        // Imprimir el contenido
        $result .= htmlentities($this->content, ENT_QUOTES, 'UTF-8');
        // Cerrar la etiqueta
        $result .= '</'.$this->name.'>';

        return $result;
    }
}

