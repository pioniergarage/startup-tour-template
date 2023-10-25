<?php

//Visited Location/Area -> Title
$Location = "South Korea & Japan 2024";
$KilometersToTravel = 20341;
$DaysAbroad = 23;
$MotivatedPGlers = 12;

// travel period for countdown and different headers
$TravelPeriod = array(
    'start' => '2024-03-25',
    'end' => '2024-04-18'
);

//Change the Background trough replace /img/Background

//E-Mail for Contact Button, if not set - Contact-Button disapiers
$ContactEmail = "info@pioniergarage.de";

//Text which sumerizes the Tour in about 200-300 Words suggested
$AboutTourText = '<br><b>Tech titans yield to thriving startups: South Korea and Japan forge entrepreneurial landscapes</b><br>
Renowned for its tech powerhouses like Samsung and LG, South Korea is proactively nurturing its developing startup ecosystem. With a burgeoning assemblage of over 30,000 startups now thriving within its borders, South Korea\'s innovation landscape spans diverse technological domains. This surge in startup activity marks a noticeable shift from the previous dominance of major tech conglomerates. Meanwhile, Japan\'s economic paradigm is mirroring this trend as it transitions away from its historical dependence on corporate giants. The entrepreneurial landscape is gaining momentum, propelled by a notable decline in risk aversion among investors. 
<br><br>
<b>From Karlsruhe to Seoul and Tokyo</b><br>
During our Startup Tour to South Korea and Japan, we will visit some of the most innovative and successful startups of both countries. We\'ll get a behind-the-scenes look at how these companies operate and how they have disrupted their respective industries.

In addition to visiting startups, we\'ll also meet with investors, authorities and industry leaders. This is a great opportunity to network and learn from some of the most successful professionals in the startup world. 

Finally, we\'ll get to experience the vibrant culture and history of these fascinating countries, from huge cities to natural heritages in Japan and South Korea, to make the Startup Tour a one-of-a-kind experience that combines culture, innovation, and networking.
<br><br>                    
					<h4>Timeline</h4>
                    <ul class="pg-timeline">
                        <li>
                            <h5>Seoul, South Korea</h5>
                            <p>March 26th - April 1st 2024</p>
                        </li>
			<li>
                            <h5>Busan, South Korea</h5>
                            <p>April 2nd - April 3rd 2024</p>
                        </li>
			<li>
                            <h5>Fukuoka, Japan</h5>
                            <p>April 4th - April 5th 2024</p>
                        </li>
			<li>
                            <h5>Osaka / Kyoto, Japan</h5>
                            <p>April 6th - April 8th 2024</p>
                        </li>
                        <li>
                            <h5>Tokyo, Japan</h5>
                            <p>April 9th - April 17th 2024</p>
                        </li>
                    </ul>';

//Text next to the PG Logo
$AboutThePGText = '12 members of PionierGarage, Germany\'s largest university club focused on entrepreneurship, located at the Karlsruhe Institute of Technology (KIT), 
are going to visit two of the world\'s most fascinating and unique countries: South Korea and Japan.<br><br>
To find out more about our entrepreneurship club at Germany\'s leading
 technical university, head over to <a href="https://pioniergarage.de" target="_blank">our homepage</a> or contact us via <a href= "mailto:info@pioniergarage.de" target="_blank">info@pioniergarage.de</a> to become part of the tour as a supporter,
partner, sponsor or Startup/VC to be visited. We\'re looking forward to meeting inspiring people!';

//List of Visited Startups, Names Used to find the logo"s in /img/StartupLogos/StartupName.pioniergarage
//Store Startup Logos int the Form "StartupName.png" like in the example here
// Images should have the Size 300x200 Pixel
$StartupsToVisit = 22;
// $NumberOfStartups = 22;

$VisitedStartups[] = array(
    'name' => 'Coming soon',
    'description' => 'This startup tour is still being planned. You will find our agenda here soon.',
    'img' => 'coming-soon.jpg',
    'url' => ''
);


//Our TeamText - sumerize 30 Words
$TeamText = "We are a team of young founders and entrepreneurial students.";

//Team - Images in /img/team/ImgName.png (120x120px images, as png), Text about 20-40 Words
//CopyElements for more People

$TeamMember[] = array(
    'Name' => "Bien Tran",
    'ImgName' => "Bien_Tran.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "Balancing tradition and modernity with innovation and redefining industries through technology: This is what South Korea and Japan stand for. This journey is an exploration of inspiration from pioneers who are shaping the future where globalisation and technology are driving boundless progress.",
    'Linkedin' => 'https://www.linkedin.com/in/bien-tran/'
);

$TeamMember[] = array(
    'Name' => "Céline Brunner",
    'ImgName' => "Celine_Brunner.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I want to explore the important industrial sectors in both countries and find out their potential for startups. I am especially excited about Korea's digital openess and interested in startups that locally outdo global market leaders.",
    'Linkedin' => 'https://www.linkedin.com/in/celine-brunner/'
);

$TeamMember[] = array(
    'Name' => "Chris Kaufmann",
    'ImgName' => "Chris_Kaufmann.jpg",
    'Studies' => "Former board member of PionierGarage",
    'Text'   => "Japan and South Korea are known for their large corporations and their industrial and product innovations. Lean manufacturing, Kanban, OLED panels, DRAM and NAND flash memory. What about the innovation capability in startups and scaleups? I would like to find if they are also capable of delivering world-changing innovations in the future.",
    'Linkedin' => ''
);

$TeamMember[] = array(
    'Name' => "Friedrich Hasenbein",
    'ImgName' => "Friedrich_Hasenbein.jpg",
    'Studies' => "Board member of PionierGarage",
    'Text'   => "Visiting South Korea and Japan, known for their high innovation rankings, I’m eager to learn from local startups for our projects. These countries also share some challenges similar to Germany, making international comparisons intriguing. Furthermore, we all look forward to immersing ourselves in the culture and way of life in both nations.",
    'Linkedin' => 'https://www.linkedin.com/in/friedrich-hasenbein-10308221b/'
);

$TeamMember[] = array(
    'Name' => "Gregory Schenk",
    'ImgName' => "silhouette.jpg",
    'Studies' => "Board member of PionierGarage",
    'Text'   => "As a business informatics student and organiser of our student start-up competition, I am particularly looking forward to the Startup Tour. It gives me the opportunity to combine my passion for Japanese culture with my curiosity for innovative startup landscapes. Tanoshimi desu",
    'Linkedin' => 'https://www.linkedin.com/in/gregory-schenk-134362117/'
);

$TeamMember[] = array(
    'Name' => "Jannik Nefferdorf",
    'ImgName' => "Jannik_Nefferdorf.jpg",
    'Studies' => "Former board member of PionierGarage",
    'Text'   => "I'm interested in learning about South Korea's and Japan's startup culture and meeting with successful entrepreneurs and investors. I hope to gain insight into the inner workings of successful startups and to make valuable connections in the industry.",
    'Linkedin' => 'https://www.linkedin.com/in/neffi97/'
);

$TeamMember[] = array(
    'Name' => "Mustafa Kemal Kula",
    'ImgName' => "Mustafa_Kemal_Kula.jpg",
    'Studies' => "Board member of PionierGarage",
    'Text'   => "I am really excited to explore the rich cultural heritage of Japan and South Korea. Japan is renowned for having one of the highest average IQ scores worldwide, and I am eager to see how this influences their startup ecosystem. This is an incredible tour organized by PionierGarage for PionierGarage.",
    'Linkedin' => 'https://www.linkedin.com/in/mustafa-kemal-kula-043698240/'
);

$TeamMember[] = array(
    'Name' => "Leon Kunz",
    'ImgName' => "Leon_Kunz.jpg",
    'Studies' => "Board member of PionierGarage",
    'Text'   => "Japan and South Korea stand out as some of the most innovative countries in terms of entrepreneurship and startups. I am thrilled to have the opportunity to immerse myself in the world's most advanced technologies. Additionally, I firmly believe that this experience will enrich my studies in Mechanical Engineering at KIT.",
    'Linkedin' => 'https://www.linkedin.com/in/leon-kunz-4a354621b/'
);

$TeamMember[] = array(
    'Name' => "Linus Schilpp",
    'ImgName' => "Linus_Schilpp.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "Japan's rich culture and unique work ethic have always been a source of fascination, and when it comes to South Korea, it's equally intriguing to see how these relatively small nations can produce such innovative companies. I'm hopeful for cross-cultural exchanges and valuable insights into exciting startups to deepen my passion for creative ideas.",
    'Linkedin' => 'https://www.linkedin.com/in/linus-schilpp-92b351281/'
);

$TeamMember[] = array(
    'Name' => "Sven Bronner",
    'ImgName' => "silhouette.jpg",
    'Studies' => "Board member of PionierGarage",
    'Text'   => "Korea, a tech-powerhouse with Pangyo Techno Valley and Songdo smart city, ranks third in Asian unicorn hubs. I'm interested in seeing how Japanese and Korean startups are competing. Comparing and learning about those ecosystems and their approaches may help us understand their successes but also the current downwards trend in the German startup-ecosystem.",
    'Linkedin' => ''
);

$TeamMember[] = array(
    'Name' => "Tobias Carlé",
    'ImgName' => "Tobias_Carle.jpg",
    'Studies' => "Former board member of PionierGarage",
    'Text'   => "South Korea and Japan are innovative powerhouses with rich histories. I am eager to learn how large corporations in South Korea and Japan develop startup ecosystems and advance innovation and automation despite an aging population, in order to draw valuable conclusions for Germany.",
    'Linkedin' => 'https://www.linkedin.com/in/tobias-carl%C3%A9-6205ab194/'
);

$TeamMember[] = array(
    'Name' => "Vincent Fiedler",
    'ImgName' => "Vincent_Fiedler.jpg",
    'Studies' => "Former board member of PionierGarage",
    'Text'   => "A few months ago, I was already able to meet some innovative startups from South Korea and Japan at VivaTech in Paris, which is why I am very much looking forward to learning even more about the respective scenes and the rich cultures of these countries.",
    'Linkedin' => 'https://www.linkedin.com/in/vincentfiedler/'
);

//Sponsors - Images in /img/Sponsors/ImgName.png, 300x200px images                                       'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "sponsor_stadt_karlsruhe.jpg",
                                        'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "sponsor_kit.jpg",
                                        'Link'   => "https://www.kit.edu/");

//Youtube Link - if empty -> nothing is shown
$YoutubeLink = "";

//echo "debug";
