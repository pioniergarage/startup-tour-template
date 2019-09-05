<?php

//Visited Location/Area -> Title
$Location = "Shanghai<br>2019";
$KilometersToTravel = 18348 ;
$DaysAbroad = 18;

// departure date for countdown
$DepartureDate='2019-09-10';

//Change the Background trough replace /img/Background

//E-Mail for Contact Button, if not set - Contact-Button disapiers
// $ContactEmail = "info@pioniergarage.de";

//Text which sumerizes the Tour in about 200-300 Words suggested
$AboutTourText = 'China. As the country with the biggest population on earth, it has to tackle a lot of social, 
economic and ecological issues. Nevertheless, as one of the most thriving economies in the world,
China is growing fast and innovative. Very competitive as they are, there is a lot of space for young startups, to start their business and develop their ideas. The growth, of the economy of China for the past years is stunning! If you‘re in contact with any Startups, you may think are essential for our Startup tour, feel free
to get in touch with us!
                    <h4>Timeline</h4>
                    <ul class="pg-timeline">
                        <li>
                            <h5>Shanghai</h5>
                            <p>11 September 2019 – 18 September 2019</p>
                        </li>
                        <li>
                            <h5>Hangzhou</h5>
                            <p>18 September 2019 – 22 September 2019</p>
                        </li>
                        <li>
                            <h5>Beijing</h5>
                            <p>22 September 2019 – 29 September 2019</p>
                        </li>
                    </ul>';

//Text next to the PG Logo
$AboutThePGText = "10 members of PionierGarage, Germany‘s largest university club focused on entrepreneurship, located at the Karlsruhe Institute of Technology (KIT), 
are going to visit three of the world‘s biggest and innovative cities: Shanghai, Hangzhou and Beijing. To find out more about our entrepreneurship club at Germany‘s leading
 technical university, head over to our homepage or contact us on info@pioniergarage.de to become part of the tour as a supporter,
partner, sponsor or Startup/VC to be visited. We‘re looking forward to meeting inspiring people!";

//List of Visited Startups, Names Used to find the logo"s in /img/StartupLogos/StartupName.pioniergarage
//Store Startup Logos int the Form "StartupName.png" like in the example here
// Images should have the Size 300x200 Pixel
// $StartupsToVisit = ;
// $NumberOfStartups = ;

$VisitedStartups[] = array(
    'name' => 'Portfolio.io',
    'description' => '',
    'img' => 'portfolio.io.png',
    'url' => 'http://portfolio.io'
);
$VisitedStartups[] = array(
    'name' => 'it consultis',
    'description' => '',
    'img' => 'it consultis.jpg',
    'url' => 'https://www.it-consultis.com'
);
$VisitedStartups[] = array(
    'name' => 'GloCoach',
    'description' => '',
    'img' => 'glocoach.png',
    'url' => 'https://www.glocoach.com'
);
$VisitedStartups[] = array(
    'name' => 'XNode',
    'description' => '',
    'img' => 'xnode.jpeg',
    'url' => 'http://www.thexnode.com'
);
$VisitedStartups[] = array(
    'name' => 'Property Passbook',
    'description' => '',
    'img' => 'property passbook.jpg',
    'url' => 'https://propertypassbook.com'
);
$VisitedStartups[] = array(
    'name' => 'Shanghai Electrics Innovation Center',
    'description' => '',
    'img' => 'shanghai electric.png',
    'url' => 'http://shanghaielectric-smec.com'
);
$VisitedStartups[] = array(
    'name' => 'nihub',
    'description' => '',
    'img' => 'nihub.png',
    'url' => 'https://www.nihub.com'
);
$VisitedStartups[] = array(
    'name' => 'BW International',
    'description' => '',
    'img' => 'bw-i.png',
    'url' => ''
);
$VisitedStartups[] = array(
    'name' => 'Lifesmart',
    'description' => '',
    'img' => 'lifesmart.png',
    'url' => 'http://global.ilifesmart.com/index.html'
);
$VisitedStartups[] = array(
    'name' => 'Tuya',
    'description' => '',
    'img' => 'tuya.jpg',
    'url' => 'https://www.tuya.com'
);
$VisitedStartups[] = array(
    'name' => 'Bitmain',
    'description' => '',
    'img' => 'bitmain.png',
    'url' => 'https://www.bitmain.com/contact'
);
$VisitedStartups[] = array(
    'name' => 'GEI',
    'description' => '',
    'img' => 'gei.png',
    'url' => 'http://global.gei.com.cn'
);
$VisitedStartups[] = array(
    'name' => 'LingoChamp',
    'description' => '',
    'img' => 'lingochamp liulishuo.png',
    'url' => 'https://www.lingochamp.com'
);
$VisitedStartups[] = array(
    'name' => 'Mech Mind',
    'description' => '',
    'img' => 'mechmind.jpg',
    'url' => 'http://www.mech-mind.net'
);
$VisitedStartups[] = array(
    'name' => 'QFEELTECH',
    'description' => '',
    'img' => 'qfeeltech.jpg',
    'url' => 'http://www.qfeeltech.com'
);
$VisitedStartups[] = array(
    'name' => 'startup grind',
    'description' => '',
    'img' => 'startupgrind.jpeg',
    'url' => 'https://www.startupgrind.com'
);



//Our TeamText - sumerize 30 Words
$TeamText = "We are a team of young founders and entrepreneurial students.";

//Team - Images in /img/team/ImgName.png (120x120px images, as png), Text about 20-40 Words
//CopyElements for more People
$TeamMember[] = array(
    'Name' => "Elisabeth Goebel",
    'ImgName' => "Elisa_Goebel.jpg",
    'Studies' => "Member of Human Ressources and Industrial Engineering student at KIT",
    'Text'   => "„It‘s not about ideas. It‘s about making ideas happen.“ Europe often tends to doubt, while China is already acting. I hope to be able to take a leaf out of this mindset back to Germany.",
    'Linkedin' => 'https://www.linkedin.com/in/elisabeth-goebel-757825162/'
);
$TeamMember[] = array(
    'Name' => "Marvin Wach",
    'ImgName' => "Marvin_Wach.jpg",
    'Studies' => "Head of External Relations, studying Civil Engineering in the fifth Bachelor Semester",
    'Text'   => "The fascinating entrepreneure ecosystem in China will be our next startup-tour. It is known for its dynamic and speed worldwide. Therefore it is a great chance to learn more about the advantages to start a buisness in China.",
    'Linkedin' => 'https://www.linkedin.com/in/marvin-wach-0b1736174/'
);
$TeamMember[] = array(
    'Name' => "Tobias Budig ",
    'ImgName' => "Tobias_Budig.jpg",
    'Studies' => "Head of Finances, Industrial Engineering student at KIT",
    'Text'   => "Why is the chinese startup ecosystem so dynamic? What is unique about founding in China?  This and even more I'd like to answer on our tour!",
    'Linkedin' => 'http://linkedin.com/in/tobias-budig'
);
$TeamMember[] = array(
    'Name' => "Jannik Nefferdorf",
    'ImgName' => "Jannik_Nefferdorf.jpg",
    'Studies' => "Former board member of PionierGarage and Industrial Engineering student at KIT Karlsruhe",
    'Text'   => "As an entrepreneurship enthusiast, I love talking to founders. I'm really looking forward to our China startup tour to learn about the challenges and opportunities of developing new business ideas in China.",
    'Linkedin' => 'https://www.linkedin.com/in/neffi97/'
);
$TeamMember[] = array(
    'Name' => "Kevin Kraus",
    'ImgName' => "Kevin_Kraus.jpg",
    'Studies' => "Head of Marketing, Industrial Engineering student at KIT Karlsruhe",
    'Text'   => "China, as a thriving culture and economy, is a very fascinating country. I'm very excited to learn more about the old culture and the entrepreneurial spirit of China!",
    'Linkedin' => 'https://www.linkedin.com/in/kraus-kevin'
);
$TeamMember[] = array(
    'Name' => "Jörg Remer",
    'ImgName' => "Joerg_Remer.jpg",
    'Studies' => "External Relations Member, Industrial Engineering student at KIT",
    'Text'   => "I am excited to explore the entrepreneurial spirit on the other side of the globe and learn more about the Chinese Startup-scene and connect to new people who share the same mindset. #PG_China2019",
    'Linkedin' => 'https://www.linkedin.com/in/jörg-remer-9a752b15b/'
);
 $TeamMember[] = array(
    'Name' => "Jasmin Riedel",
    'ImgName' => "Jasmin_Riedel.jpg",
    'Studies' => "Head of Human Ressources, studying Electornical Engineering ",
    'Text'   => "I’m totally curious about the startup environment, the Chinese culture and the country. Exploring this fast growing country will be a great experience. I’m looking forward  to China!",
    'Linkedin' => 'https://www.linkedin.com/in/jasmin-riedel-697073181/'
);    
$TeamMember[] = array(
    'Name' => "Jan Bode",
    'ImgName' => "Jan_Bode.jpg",
    'Studies' => "External Relations, Industrial Engineering student at KIT",
    'Text'   => "China! Huge, dynamic, fascinating, different! Who wouldn’t want to go?",
    'Linkedin' => 'https://www.linkedin.com/in/jan-bode-485406189/'
);
$TeamMember[] = array(
    'Name' => "Han Völker",
    'ImgName' => "Han_Voelker.jpg",
    'Studies' => "External Relations, Industrial Engineering student at KIT",
    'Text'   => "I'm very much looking forward to learn more about the Chinese business mentality, their rich culture and everyday lifes. I am glad that I could join our group from University for this unique opportunity.",
    'Linkedin' => 'https://www.linkedin.com/in/han-völker-8b6137189/'
);
$TeamMember[] = array(
    'Name' => "Jan Effenberger",
    'ImgName' => "Jan_Effenberger.jpg",
    'Studies' => "External Relations, Industrial Engineering student at KIT",
    'Text'   => "Beeing one of the biggest and fastest growing economies worldwide, I am really excited to see how young chinese entrepeneurs take advantage of this huge market. With more than 7.500 govermental funded startup incubators I hope to see many interesting young companies.",
    'Linkedin' => 'https://www.linkedin.com/in/jan-effenberger-42037218b/'
);
$TeamMember[] = array(
    'Name' => "Marcus Maddock",
    'ImgName' => "Marcus_Maddock.jpg",
    'Studies' => "Marketing Member, Industrial Engineering student at KIT",
    'Text'   => "Excited to learn from this entirely different ecosystem and eager to capture some of the chinese spirit, not only with my camera.",
    'Linkedin' => 'https://www.linkedin.com/in/marcus-maddock-462628189/'
);

//Sponsors - Images in /img/Sponsors/ImgName.png, 300x200px images                                       'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "Logo_Karlsruhe.png",
                                        'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "Logo_KIT.svg",
                                        'Link'   => "https://www.kit.edu/");

//Youtube Link - if empty -> nothing is shown
$YoutubeLink = "";

//echo "debug";
