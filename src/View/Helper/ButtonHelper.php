<?php
namespace App\View\Helper;

use Cake\View\Helper\HtmlHelper;

class ButtonHelper extends HtmlHelper
{
    protected HtmlHelper $Html;
    /**
     * Default configuration for button classes.
     *
     * @var array
     */
    protected array $_defaultConfig = [
        'defaultClass' => 'btn', // General button class
        'typeClass' => [
            'primary' => 'btn-primary',
            'secondary' => 'btn-secondary',
            'danger' => 'btn-danger',
            // Additional types can be added here
        ],
    ];

    public function __construct($view, $config = [])
    {
        parent::__construct($view, $config);
        $this->Html = new HtmlHelper($view);
    }

    /**
     * Generate a styled button.
     *
     * @param string $title The button's text.
     * @param array|string|null $url The URL for the button link, or `null` for a non-link button.
     * @param array $options Additional HTML attributes (e.g., class, id).
     * @param string $type The button style type (e.g., primary, secondary).
     * @return string HTML string for the button.
     */
    public function button(string $title, $url = null, array $options = [], string $type = 'primary'): string
    {
        // Retrieve the CSS class for the button type
        $typeClass = $this->_defaultConfig['typeClass'][$type] ?? $this->_defaultConfig['defaultClass'];

        // Merge type class with any additional classes provided in options
        $options['class'] = ($options['class'] ?? $this->_defaultConfig['defaultClass']) . ' ' . $typeClass;

        // Generate a link button if a URL is provided; otherwise, generate a <button> element
        if ($url !== null) {
            return $this->Html->link($title, $url, $options);
        } else {
            $options['type'] = $options['type'] ?? 'button';
            return $this->tag('button', $title, $options);
        }
    }
}
