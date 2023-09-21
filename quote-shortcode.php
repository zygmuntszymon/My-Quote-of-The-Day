<?php

class QuoteShortcode
{

    public function __construct()
    {
        add_shortcode('my_quote', array(
            $this,
            'show_my_quote'
        ));
    }

    public function show_my_quote()
    {
        $rnd_quote = 'This is random quote';
        $quote_html = '<div class="my_quote">' . esc_attr($rnd_quote) . '</div>';
        return $quote_html;
    }
}
