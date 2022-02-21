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
    class TechSkill {
        public $skill, $percent;
        public function __construct(string $skill, int $percent) {
            $this->skill = $skill;
            $this->percent = $percent;
        }
    }
    class PersonalDetail {
        public $detail, $value;
        public function __construct(string $detail, string $value){
            $this->detail = $detail;
            $this->value = $value;
        }
    }
    $name = "Mart Anthony A. Salazar";
    $profession = "Web and Software Developer";
    $bio = "Innovative, task-driven BSIT student and a fullstack web developer specialized in frontend development.";
    $personal_details = array(
        new PersonalDetail("Age", "20"),
        new PersonalDetail("Address", "Daet, Camarines Norte, Bicol"),
        new PersonalDetail("Email", "martsalazar0@gmail.com")
    );
    $social_links = array(
        new Link("https://www.linkedin.com/in/mart-anthony-salazar-420ba81b6/", "Mart Anthony Salazar", "fa-linkedin"),
        new Link("https://github.com/mart-anthony-stark", "mart-anthony-stark", "fa-github"),
        new Link("https://www.facebook.com/", "martanthony.abanosalazar", "fa-facebook"),
        new Link("https://twitter.com/anthony_stark21", "@anthony_stark21", "fa-twitter"),
    );
    $career_objective = "Enthusiastic and hard working web developer with two years of experience seeking a position with tech companies where I can offer my expertise in JavaScript to clients and customers.";
    $technical_skills = array(
        new TechSkill("HTML", 95),
        new TechSkill("CSS", 80),
        new TechSkill("Javascript", 98),
        new TechSkill("React", 85),
        new TechSkill("Vue", 98),
        new TechSkill("Svelte", 60),
        new TechSkill("Node.js", 90),
        new TechSkill("PHP", 50),
        new TechSkill("Express.js", 83),
        new TechSkill("Java", 85)
    );
    $soft_skills = array(
        "Time Management",
        "Patience",
        "Verbal and Written Communication",
        "Teamwork",
        "Flexibility",
        "Adaptability",
        "Analytical Skills",
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

            <div class="info">
                <h2>ABOUT ME</h2>
                <p><?php echo $bio ?></p>
                <div class="details">
                    <?php foreach($personal_details as $d) {?>
                        <div class="personal-detail">
                            <h3><?php echo $d->detail ?><span>: <?php echo $d->value ?></span></h3>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="links">
                <h2>CONTACT</h2>
            <?php
                foreach($social_links as $i => $i_value) {
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

            <section class="objective">
                <h2 class="heading">Career Objective</h2>
                <p><?php echo $career_objective ?></p>
            </section>
            
            <div class="two-cols">
            <section class="education">
                <h2 class="heading">Education</h2>
                <table>
                    <tbody>
                        <tr>
                            <td class="year">2020 - present</td>
                            <td>BSIT - University of Camarines Norte(CNSC)</td>
                        </tr>
                        <tr>
                            <td class="year">2018</td>
                            <td>STEM strand - Camarines Norte Senior High School(CNSHS)</td>
                        </tr>
                        <tr>
                            <td class="year">2013</td>
                            <td>JHS - La Consolacion College of Daet(LCCD)</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="soft-skills">
                <h2 class="heading">Soft Skills</h2>
                <ul>
                    <?php
                        foreach($soft_skills as $x){
                            echo "<li>$x</li>";
                        }
                    ?>
                </ul>
            </section>

            <section class="technical-skills">
                <h2 class="heading">Technical Skills</h2>
                <div class="skills-cont">
                <?php 
                    foreach($technical_skills as $skill_val){
                    ?>
                        <div class="card">
                            <h4 class="skill"><?php echo "<span>$skill_val->skill</span> <span>$skill_val->percent%</span>" ?></h4>
                            <div class="profficiency">
                                <span class="percent" 
                                style=<?php 
                                    echo "width:$skill_val->percent%" 
                                ?>
                                ></span>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </section>
            </div>
            
        </div>
    </main>

</body>
</html>