<?php

function get_list_view_html($productID, $product){
    $output = "";
	$output = $output . "<li>";
    $output = $output . '<a href="detail.php?id=' . $productID . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";
      
    return $output;
};

$products = array();
$products[101] = array(
	"name" => "Beer will change the World",
	"img" => "img/shirts/shirt-101.jpg",
	"price" => 18,
    "sizes" => array("Medium","Large","X-Large")
);
$products[102] = array(
	"name" => "Rehab is for Quitters",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[103] = array(
    "name" => "Don't Drink and Blog",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "sizes" => array("Large")
);
$products[104] = array(
    "name" => "You look like I Could Drink",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18,
    "sizes" => array("Small")
);
$products[105] = array(
    "name" => "Party Without Beer is Just a Meeting",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "sizes" => array("Small","Medium","Large","X-Large")
);
$products[106] = array(
    "name" => "I Make Beer, Whats your Superpower",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "sizes" => array("Medium","Large","X-Large")
);
$products[107] = array(
    "name" => "Trust Me You're Helarious",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "sizes" => array("Small")
);
$products[108] = array(
    "name" => "Because No Good Story Starts With a Salad",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "sizes" => array("Large","X-Large")
);


$products[201] = array(
    "name" => "NERF N-STRIKE MODULUS ECS-10 BLASTER",
    "img" => "img/guns/gun-101.jpg",    
    "price" => 50,
    "desc" => "This incredibly flexible blaster has a targeting scope, drop grip and dual-rail barrel, and its many removable parts let you customize your blaster in more than 30 combinations. Load up the blaster’s 10-dart banana clip with the included darts and hit the battlefield in whatever configuration will make you the victor!<br><br>
    
• Flexible blaster has more than 30 combinations<br>
• Features targeting scope, drop grip and dual-rail barrel<br>
• Blaster can launch at targets up to 90 feet away!<br>
• Blaster’s banana clip holds up to 10 darts"
);
$products[202] = array(
    "name" => "NERF ZOMBIE STRIKE DOOMINATOR BLASTER",
    "img" => "img/guns/gun-102.jpg",    
    "price" => 40,
    "desc" => "The blaster’s 4 flipping drums hold 6 Zombie Strike darts apiece and they rotate as you fire so you can fire up to 24 darts without reloading.<br><br>

Includes Doominator blaster, four 6-dart drums, 24 Zombie Strike darts and instructions.<br><br>

• This blaster fires up to 24 darts without reloading<br>
• 4 flipping dart drums hold 6 darts apiece<br>
• When one drum is empty, flip to the next one<br>
• Includes 24 Zombie Strike darts
• 3-position handle"
);
$products[203] = array(
    "name" => "NERF N-STRIKE MEGA SERIES ROTOFURY BLASTER",
    "img" => "img/guns/gun-103.jpg",    
    "price" => 35,
    "desc" => "Unleash the rapid-fire fury of the Mega RotoFury blaster! This long-range blaster launches darts up to 90 feet.<br><br>

Includes blaster, 10 Mega Whistler Darts and instructions.<br><br>

• This blaster fires Mega Whistler Darts up to 90 feet<br>
• Includes 10 Mega Whistler Darts<br>
• Rotating drum fires 10 darts at a time without reloading<br>
• Slam-fire action<br>
• Mega Whistler Darts scream through the air"
);
$products[204] = array(
    "name" => "NERF N-STRIKE ELITE CROSSBOLT BLASTER",
    "img" => "img/guns/gun-104.jpg",    
    "price" => 25,
    "desc" => "The CrossBolt captures the design of a crossbow with its bow arms and a cord that you pull back with a slide. <br><br>
    
• Fires Darts Up to 90 Feet / 27 Meters<br>
• Includes blaster, 12-dart clip, 12 darts and instructions.<br>
• First-Ever High-Capacity Nerf Crossbow<br>
• 12-Dart Clip and 12 Elite Foam Darts for Clip-Fed Blasting<br>
• Real Crossbow Action <br>
• Insert the Clip, Pull the Slide Back, and Fire"
);
$products[205] = array(
    "name" => "NERF ZOMBIE STRIKE FLIPFURY BLASTER",
    "img" => "img/guns/gun-105.jpg",    
    "price" => 20,
    "desc" => "With twin rotating drums that hold 6 Zombie Strike darts each, the Nerf Zombie Strike Flipfury blaster lets you fire 12 darts before reloading. After you unleash 6 darts from the top drum, pull the secondary trigger to flip drums and keep blasting.<br><br>

• Includes blaster, 12 Zombie Strike darts, and instructions. <br>
• Battle zombies like a true zombie-hunter<br>
• Flip between 2 rotating drums that each hold 6 darts<br>
• Fire 12 foam darts before you reload<br>
• Find fun zombie games to play with your Zombie Strike blasters at nerf.com"
);
$products[206] = array(
    "name" => "NERF N-STRIKE ELITE MEGA CYCLONESHOCK BLASTER",
    "img" => "img/guns/gun-106.jpg",    
    "price" => 20,
    "desc" => "The Nerf N-Strike Elite Mega CycloneShock blaster has a rotating, 6-dart drum so you can fire 6 darts in a row without reloading.
    <br><br>
• Includes blaster, 6 Mega Whistler darts, and instructions.<br>
• Fire Mega darts that scream through the air<br>
• The blaster comes with 6 Mega Whistler Darts<br>
• Launch 6 darts in a row without reloading<br>
• Blast Mega darts up to 90 feet<br>
• Rotating drum fires 6 darts in a row<br>
• CycloneShock blaster works with Mega darts only."
);
$products[207] = array(
    "name" => "NERF N-STRIKE SHARPFIRE BLASTER",
    "img" => "img/guns/gun-107.jpg",    
    "price" => 15,
    "desc" => "Configure the Nerf N-Strike SharpFire blaster 6 different ways with the removable stock and barrel extension. <br><br>

Stay sharp and ready with the Nerf N-Strike SharpFire blaster that comes with 10 foam darts. The blaster fires 1 dart at a time, and you can store 6 darts on it to keep them close at hand. Whatever the mission or battle calls for, you'll be ready when you carry the 6-in-1 convertible Nerf N-Strike SharpFire blaster!<br><br>

• Stay ready with this 6-in-1 convertible blaster<br>
• Multiple configurations with removable stock & barrel ext<br>
• The stock converts to a holster<br>
• Store up to 6 darts on the blaster<br>
• The blaster includes 10 darts."
);
$products[208] = array(
    "name" => "NERF N-STRIKE MEGA BIGSHOCK BLASTER",
    "img" => "img/guns/gun-108.jpg",    
    "price" => 8,
    "desc" => "The BigShock blaster has the same high performance as other N-Strike Elite blasters, but it features mega-sized power in the palm of your hand!<br><br>

• BigShock blaster fires Mega Darts<br>
• Blaster fits in the palm of your hand<br>
• Mega Whistler Darts scream as they fly<br>
• Dart storage in the blaster<br>
• Includes 2 Mega Darts."
);
?>