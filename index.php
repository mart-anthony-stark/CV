<?php
    class Link {
        public $address;
        public $linkname;
        public $icon;

        public function __construct(string $address, string $linkname, string $icon) {
            $this->address = $address;
            $this->linkname = $linkname;
            $this->icon = $icon;
        }
    }
    $name = "Mart Anthony A. Salazar";
    $profession = "Web and Software Developer";
    $links = array(
        new Link("https://www.facebook.com/", "fb", "fa-facebook"),
        new Link("facebook.com", "fb", "fa-facebook")
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Mart Anthony A. Salazar</title>
</head>
<body>
    <main>
        <div class="sidebar">
            <div class="profile"></div>
            <div class="links">
                <h2>CONTACTS</h2>
            <?php
                foreach($links as $i => $i_value) {
                    echo "<a href=$i_value->address target=_'blank'>
                    <i class='fa $i_value->icon' aria-hidden='true'></i>
                        $i_value->linkname
                    </a>";
                }
            ?>
            </div>
        </div>
        <div class="info">
            <div class="banner center">
                <div class="name">
                    <h1><?php echo $name ?></h1>
                    <h4><?php echo $profession?></h4>
                </div>
            </div>
        </div>
    </main>
</body>
</html>