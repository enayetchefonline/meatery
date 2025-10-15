<?php

function base_url($url = 'home')
{
    return $url;
}
function current_url($url = null)
{
    return $_GET['url'];
}
function uri_string()
{
    return $_GET['url'];
}

$pagesNameArray = array("home", "menu", "about", "contact", "reservation", "blog");

$pagesArray = array(
    "home" => "home.php",
    "menu" => "menu.php",
    "about" => "about.php",
    "contact" => "contact.php",
    "reservation" => "reservation.php",
    "blog" => "blog.php",
);

$titleArray = array(
    "home" => 'Malaraj - Indian Restaurant & Takeaway in London Rd, St Albans',
    "menu" => 'Menu - Malaraj Indian Restaurant & Takeaway in St Albans',
    "about" => 'Menu - Malaraj Indian Restaurant & Takeaway in St Albans',
    "contact" => 'Contact Malaraj - The Best Indian Restaurant & Takeaway in St Albans',
    "reservation" => 'Reservation - Malaraj Indian Restaurant & Takeaway in St Albans',
    "blog" => 'Blog - Malaraj Indian Restaurant & Takeaway in St Albans',
);

$descriptionArray = array(
    "home" => 'Malaraj is the best Indian restaurant and takeaway on London Road, St Albans. It offers many delicious dishes, including Tandoori Chicken, Biryani, Curry etc.',
    "menu" => 'Check out the menu of Malaraj, the top Indian restaurant and takeaway on London Rd, St Albans. We offer a wide variety of dishes, including Tandoori Chicken, Biryani, Curry etc.',
    "about" => 'Check out the menu of Malaraj, the top Indian restaurant and takeaway on London Rd, St Albans. We offer a wide variety of dishes, including Tandoori Chicken, Biryani, Curry etc.',
    "contact" => 'Get in touch with Malaraj, the top Indian restaurant and takeaway on London Rd, St Albans. Were here to assist with your orders and inquiries.',
    "reservation" => 'Book a table at Malaraj, the top Indian restaurant and takeaway on London Rd, St Albans. We offer a wide variety of dishes, including Tandoori Chicken, Biryani, Curry etc.',
    "blog" => 'Check out our blog at Malaraj, the top Indian restaurant and takeaway on London Rd, St Albans. We offer a wide variety of dishes, including Tandoori Chicken, Biryani, Curry etc.',
);

$canonical = array(
    'home' => "",
    "menu" => "/menu",
    'about' => "/about",
    'reservation' => "/reservation",
    'blog' => "/blog",
    'contact' => "/contact",
);

$keywords = array(
    'home' => "",
    "menu" => "",
    'about' => "",
    'reservation' => "",
    'blog' => "",
    'contact' => "",

);


// Get the URL from the query parameter
$urlSlug = isset($_GET['url']) ? $_GET['url'] : '';

// Trim any trailing slashes
$urlSlug = rtrim($urlSlug, "/");
$urlSlugArray = explode("/", $urlSlug);

// If the URL is empty or just the base URL (home page)
if ($urlSlug === "" || $urlSlug === "/") {
    $slugKey = "home";  // Set to home if empty or just '/'
} elseif (count($urlSlugArray) > 2) {
    // If the URL contains more than 2 segments, it's an error
    header("Status: 404 Not Found");
    $slugKey = "err";
} else {
    // Extract the last segment as the slug
    $slugKey = end($urlSlugArray);
    if (!in_array($slugKey, $pagesNameArray)) {
        // If the slug is invalid, show the error page
        header("Status: 404 Not Found");
        $slugKey = "err";
    }
}

$canonical_link = $canonical[$slugKey];
$page_title = $titleArray[$slugKey];
$page_description = $descriptionArray[$slugKey];
$page_class = $slugKey;

require_once('includes/header.php');
require_once("pages/" . filter_var($pagesArray[$slugKey], FILTER_SANITIZE_URL));
require_once('includes/footer.php');