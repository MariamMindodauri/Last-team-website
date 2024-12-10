<?php
session_start(); 

// Check if the user is logged in
$logged_in = isset($_SESSION['user_name']) && isset($_SESSION['user_last_name']);

// Navbar definitions based on login state for non-logged-in and logged-in users
$navbar1 = [ // Navbar for not logged in
    [
        'name' => 'logo',
        'link' => './index.php',
    ], 
    [
        'name' => 'FULL CATALOGUE',
        'link' => './catalogue.php', 
    ],
    [
        'name' => 'ABOUT US',
        'link' => './about.php', 
    ],
    [
        'name' => 'ACCOUNT',
        'submenu' => [
            [
                'name' => 'Login',
                'link' => './login.php',
            ], 
            [
                'name' => 'Sign up',
                'link' => './signup.php',
            ]
        ]
    ],
    [
        'name' => 'FAVORITES',
        'link' => './favorites.php',
    ],
    [
        'name' => 'CART',
        'link' => './cart.php', 
    ],
];

$navbar2 = [ // Navbar for logged in
    [
        'name' => 'logo',
        'link' => './index.php',
    ], 
    [
        'name' => 'FULL CATALOGUE',
        'link' => './catalogue.php', 
    ],
    [
        'name' => 'ABOUT US',
        'link' => './about.php', 
    ],
    [
        'name' => $_SESSION['user_name'] . ' ' . $_SESSION['user_last_name'], 
        'submenu' => [
            [
                'name' => 'Logout',
                'link' => './logout.php',
            ],
            [
                'name' => 'FAVORITES',
                'link' => './favorites.php',
            ],
            [
                'name' => 'CART',
                'link' => './cart.php', 
            ],
        ]
    ],
];

// // Choose the appropriate navbar based on login state
// $navbar = $logged_in ? $navbar2 : $navbar1; 

// // Example for displaying navbar
// foreach ($navbar as $nav_item) {
//     echo "<li><a href='" . $nav_item['link'] . "'>" . $nav_item['name'] . "</a>";
//     if (isset($nav_item['submenu'])) {
//         echo "<ul class='submenu'>";
//         foreach ($nav_item['submenu'] as $submenu_item) {
//             echo "<li><a href='" . $submenu_item['link'] . "'>" . $submenu_item['name'] . "</a></li>";
//         }
//         echo "</ul>";
//     }
//     echo "</li>";
// }



// Array of products
$products = [
    [
        'img' => 'images/body-lotion.png',
        'title' => 'Body Lotion',
        'description' => 'For Dry Skin',
    ],
    [
        'img' => 'images/cream-cleanser.png',
        'title' => 'Cream Gel Cleanser',
        'description' => 'For Very Dry And Dehydrated Skin',
    ],
    [
        'img' => 'images/serum.png',
        'title' => 'Serum',
        'description' => 'Anti-Aging',
    ],
    [
        'img' => 'images/hand-cream.png',
        'title' => 'Hand Cream',
        'description' => 'For Dry Skin',
    ],
    [
        'img' => 'images/cleansing-foam.png',
        'title' => 'Cleansing Foam',
        'description' => 'For Oily Skin',
    ],
    [
        'img' => 'images/body-wash.png',
        'title' => 'Body Wash',
        'description' => 'For Dry Skin',
    ],
    [
        'img' => 'images/body-scrub.png',
        'title' => 'Body Scrub',
        'description' => 'For Normal Skin',
    ],
    [
        'img' => 'images/face-cream-gel.png',
        'title' => 'Face Cream-Gel',
        'description' => 'For Extra Dry Skin',
    ]
];