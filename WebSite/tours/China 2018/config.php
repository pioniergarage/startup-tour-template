<?php

//Visited Location/Area -> Title
$Location = "China<br>2018";
$DistanceToKarlsruhe = 9000;
$DaysAbroad = 15;
//Change the Background trough replace /img/Background

//E-Mail for Contact Button, if not set - Contact-Button disapiers
// $ContactEmail = "dominik.kogel@pioniergarage.de";

//Text which sumerizes the Tour in about 200-300 Words suggested
$AboutTourText = "The Pioneers are heading to China! After inspiring tours to the Silicon Valley, Boston and New York, London, Tel Aviv, Berlin and Munich, the PionierGarage is visiting China for the second time. We are full of energy to find out more about the entrepreneurial scene in one of the most-thriving economies in the world and to get in touch with a variety of interesting and inspiring people. During the two-week tour, we are visiting a number of startups, venture capitalists, entrepreneurial organizations and educational institutions.";

//Text next to the PG Logo
$AboutThePGText = "11 members of PionierGarage, Germany's largest university club focused on entrepreneurship, located at the Karlsruhe Institute of Technology (KIT) in Germany, are going to visit one of the world's most significant tech and startup regions: China.
To find out more about our entrepreneurship club at Germany's leading technical university, head over to our homepage or contact us on <a href='mailto:info@pioniergarage.de'>info@pioniergarage.de</a>  to become part of the tour as a supporter, partner, sponsor or Startup/VC to be visited. We're looking forward to meeting inspiring people!";

//List of Visited Startups, Names Used to find the logo"s in /img/StartupLogos/StartupName.pioniergarage
//Store Startup Logos int the Form "StartupName.png" like in the example here
// Images should have the Size 300x200 Pixel
$NumberOfStartups = 27;
$VisitedStartups = array();
$AdditionalText = array();

//Our TeamText - sumerize 30 Words
$TeamText = "We are a team of young founders and entrepreneurial students.";

//Team - Images in /img/team/ImgName.png (120x120px images, as png), Text about 20-40 Words
//CopyElements for more People
$TeamMember[] = array(
    'Name' => "Dominik Doerner",
    'ImgName' => "dominik-doerner.jpg",
    'Text'   => "Former Chairmain at PionierGarage",
    'Linkedin' => 'https://www.linkedin.com/in/dominik-doerner/'
);

$TeamMember[] = array(
    'Name' => "Frederic Tausch",
    'ImgName' => "frederic-tausch.jpg",
    'Text'   => "CTO & Co-Founder of <a href='https://apic.ai/'>apic.ai</a>",
    'Linkedin' => 'http://linkedin.com/in/frederic-tausch'
);

$TeamMember[] = array(
    'Name' => "Matthias Heger",
    'ImgName' => "matthias-heger.jpg",
    'Text'   => "Hardware Engineer at <a href='https://apic.ai/'>apic.ai</a>",
    'Linkedin' => 'http://www.linkedin.com/in/matthias-heger'
);

$TeamMember[] = array(
    'Name' => "Patrick Golz",
    'ImgName' => "patrick-golz.jpg",
    'Text'   => "Physics student burning for entrepreneurship",
    'Linkedin' => 'https://www.linkedin.com/in/patrick-golz-54a671157/',
);
$TeamMember[] = array(
    'Name' => "Jakob Fischer",
    'ImgName' => "jakob-fischer.jpg",
    'Text'   => "Former Board Member of PionierGarage",
    'Linkedin' => 'https://www.linkedin.com/in/jakobfischer/',
);
$TeamMember[] = array(
    'Name' => "Florian Dreschner",
    'ImgName' => "florian-dreschner.jpg",
    'Text'   => "Software Engineer and Product Enthusiast",
    'Linkedin' => 'https://www.linkedin.com/in/fdreschner/',
);
$TeamMember[] = array(
    'Name' => "Andreas Fischer",
    'ImgName' => "andreas-fischer.jpg",
    'Text'   => "Founding Partner of Germany’s first student-run VC",
    'Linkedin' => 'https://www.linkedin.com/in/afischerfmv/',
);
$TeamMember[] = array(
    'Name' => "Andreas Cordes",
    'ImgName' => "andreas-cordes.jpg",
    'Text'   => "Former Organizer of the accelerator program GROW",
    'Linkedin' => 'https://www.linkedin.com/in/andreas-cordes-626642134',
);
$TeamMember[] = array(
    'Name' => "Andrea Bartos",
    'ImgName' => "andrea-bartos.jpg",
    'Text'   => "Industrial engineer and former Board Member of PionierGarage",
    'Linkedin' => 'https://www.linkedin.com/in/andrea-bartos-0bbb26122/',
);
$TeamMember[] = array(
    'Name' => "Maximilian Wessendorf",
    'ImgName' => "maximilian-wessendorf.jpg",
    'Text'   => "Former Board Member of PionierGarage",
    'Linkedin' => null,
);

//Sponsors - Images in /img/Sponsors/ImgName.png, 300x200px images
$Sponsors = array();

//Youtube Link - if empty -> nothing is shown
$YoutubeLink = "";

//echo "debug";
