<?php

// Get the information to process
list($script, $title, $header, $source, $footer, $output) = $argv;

// Get the content and prepare it.
$content = file_get_contents($source);
$content = trim(preg_replace('/.*<content>(.*)<\/content>.*/si', '\1', $content));

// Get the template
$template = file_get_contents('src/site/_includes/layouts/list_page.njk');

// Add the title and content
$template = preg_replace('/{{title}}/', $title, $template);
$template = preg_replace('/{{content}}/', $content, $template);

// Add the header and footer
$template = preg_replace(
    '/{{header}}/',
    file_get_contents('src/site/_includes/partials/' . $header),
    $template
);
$template = preg_replace(
    '/{{footer}}/',
    file_get_contents('src/site/_includes/partials/' . $footer),
    $template
);


// Display hidden parts off the site.
$template = preg_replace('/(<!--)|(-->)/', '', $template);

file_put_contents($output, $template);
