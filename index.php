<?php
    class Link {
        public $address;
        public $linkname;

        public function __construct(string $address, string $linkname) {
            $this->address = $address;
            $this->linkname = $linkname;
        }
    }
    $name = "Mart Anthony A. Salazar";
    $profession = "Web Developer";
    $links = array(
        new Link("https://www.facebook.com/", "fb"),
        new Link("facebook.com", "fb")
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Mart Anthony A. Salazar</title>
</head>
<body>
    <div class="banner center">
        <div class="name">
            <h1><?php echo $name ?></h1>
            <h4><?php echo $profession?></h4>
        </div>
    </div>
    <main>
        <div class="sidebar">
            <div class="profile"></div>
        </div>
        <div class="info">
            <?php
                foreach($links as $i => $i_value) {
                    echo "<a href=$i_value->address target=_'blank'>$i_value->linkname</a>";
                }
            ?>
        </div>
    </main>
</body>
</html>