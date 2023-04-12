<?php
    header('Access-Control-Allow-Origin: *');

    $toys = [
        [   
            "img" => "OPG1.jpg",
            "category" => "Action Figures",
            "brand" => "Hasbro",
            "country" => "United States",
            "name" => "Optimus Prime",
            "version" => "Optimus Prime G1",
            "price" => "282.56",
            "release_date" => "1984",
            "description" => "Optimus Prime is the largest, strongest, and wisest of all Autobots."
        ],
        [   
            "img" => "YODA.jpg",
            "category" => "Building Sets",
            "brand" => "LEGO",
            "country" => "Denmark",
            "name" => "Yoda",
            "version" => "Baby Yoda",
            "price" => "89.99",
            "release_date" => "2021",
            "description" => "Adorable ears and eyes for a lovable expressions, bringing it to life when playing!"
        ],
        [
            "img" => "BARBIE.jpg",
            "category" => "Doll",
            "brand" => "Barbie",
            "country" => "United Kingdom",
            "name" => "Barbie",
            "version" => "Fashionista 2021",
            "price" => "24.99",
            "release_date" => "2021",
            "description" => "Tan skin, wavy blonde hair, sunglasses, blue and white romper, and white shoes."
        ],
        [
            "img" => "MONO.jpg",
            "category" => "Board Games",
            "brand" => "Hasbro",
            "country" => "United States",
            "name" => "Monopoly Board Game",
            "version" => "Ultimate Banking Edition",
            "price" => "19.99",
            "release_date" => "2020",
            "description" => "Introducing a modern banking version of the Monopoly game: the Ultimate Banking Edition.  In this edition, Monopoly money is no more!"
        ],
        [
            "img" => "MEGA.jpg",
            "category" => "Outdoor Toys",
            "brand" => "Nerf",
            "country" => "United States",
            "name" => "N-Strike",
            "version" => "N-Strike Mega",
            "price" => "63.48",
            "release_date" => "2016",
            "description" => "N-Strike Mega, formally N-Strike Mega Series, is a line of blasters which fire red-colored ammunition larger than most darts in both size and diameter."
        ],
        [
            "img" => "SHARK.jpg",
            "category" => "Hand Puppets",
            "brand" => "Yolococa",
            "country" => "United States",
            "name" => "Shark Hand Puppet",
            "version" => "Realistic Latex Animal",
            "price" => "9.99",
            "release_date" => "2021",
            "description" => "This puppets toys is an exceptional gift for kids.It can be used in many occasions such as party favors,birthday cake toppers,festival gift,educational purpose etc."
        ]
        ];
    
        $data = json_encode($toys);
        echo $data;
        
    ?>