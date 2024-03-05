<?php

//Visited Location/Area -> Title
$Location = "South Korea & Japan 2024";
$KilometersToTravel = 20341;
$DaysAbroad = 23;
$MotivatedPGlers = 12;

// travel period for countdown and different headers
$TravelPeriod = array(
    'start' => '2024-03-26',
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
                            <p>March 26th - April 2nd 2024</p>
                        </li>
			<li>
                            <h5>Daejeon, South Korea</h5>
                            <p>April 3rd 2024</p>
                        </li>
			<li>
                            <h5>Daegu, South Korea</h5>
                            <p>April 4th 2024</p>
                        </li>
			<li>
                            <h5>Busan, South Korea</h5>
                            <p>April 5th 2024</p>
                        </li>
			<li>
                            <h5>Fukuoka, Japan</h5>
                            <p>April 6th 2024</p>
                        </li>
			<li>
                            <h5>Osaka & Kyoto, Japan</h5>
                            <p>April 7th - April 10th 2024</p>
                        </li>
                        <li>
                            <h5>Tokyo, Japan</h5>
                            <p>April 11th - April 17th 2024</p>
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
$StartupsToVisit = 24;
// $NumberOfStartups = 22;

//$VisitedStartups[] = array(
//    'name' => 'Konrad-Adenauer-Stiftung - Foundation Office Korea',
//    'description' => 'The Konrad Adenauer Foundation is a political foundation of the Federal Republic of Germany. With its programs and projects, it makes an active and effective contribution to international cooperation and understanding.',
//    'img' => 'Logo002.jpg',
//    'url' => 'https://www.kas.de/en/web/korea/'
//);

$VisitedStartups[] = array(
    'name' => 'AHK Korea - Korean-German Chamber of Commerce and Industry',
    'description' => 'The AHKs support German companies that want to build or expand their foreign business. We will visit their office in Seoul to get an in-depth overview of the Korean market and startup ecosystem.',
    'img' => 'Logo003.jpg',
    'url' => 'https://korea.ahk.de/en/'
);

$VisitedStartups[] = array(
    'name' => 'Lumis Games',
    'description' => 'Lumis Games develops and distributes computer simulation games for education. We will meet founder Steve Ahn who is also experienced in the VC industry and as professor for entrepreneurship.',
    'img' => 'Logo004.jpg',
    'url' => 'http://www.lumisgames.com/'
);

$VisitedStartups[] = array(
    'name' => 'The Garrison',
    'description' => 'Global startup community and co-working space in Seoul offering consulting, networking events, a startup-focused job board, and a collaborative coworking space. We will meet CEO Riso Dongok Ahn.',
    'img' => 'Logo005.jpg',
    'url' => 'https://www.thegarrison.company/'
);

$VisitedStartups[] = array(
    'name' => 'Seoul Robotics',
    'description' => 'Powering the future of mobility currently building deep learning based lidar perception module for self-driving cars and robots.',
    'img' => 'Logo007.jpg',
    'url' => 'https://seoulrobotics.org/'
);

$VisitedStartups[] = array(
    'name' => 'Deardot',
    'description' => 'Deardot is a sustainable, vegan cosmetic brand given to you by nature. We write stories that care about the environment and people.',
    'img' => 'Logo008.jpg',
    'url' => 'https://deardotcosmetic.com/'
);

$VisitedStartups[] = array(
    'name' => 'Incheon Global Campus',
    'description' => 'Incheon Global Campus, the best global educational hub in the world, provides students infinite potential and possibilities to become global elites.',
    'img' => 'Logo009.jpg',
    'url' => 'https://igc.or.kr/en/index.do'
);

$VisitedStartups[] = array(
    'name' => 'KAIST - Korea Advanced Institute of Science & Technology',
    'description' => 'KAIST is the first and top science and technology university in Korea.',
    'img' => 'Logo010.jpg',
    'url' => 'https://www.kaist.ac.kr/en/'
);

$VisitedStartups[] = array(
    'name' => 'Start2 Group',
    'description' => 'Start2 Group is a global innovation leader taking startup journeys to the next level. As a premier startup ecosystem platform, they serve as the ultimate destination for growth-oriented startups.',
    'img' => 'Logo006.jpg',
    'url' => 'https://start2.group/'
);

$VisitedStartups[] = array(
    'name' => 'Kyoto Institute of Technology',
    'description' => 'The technical university of Kyoto is known for its long history and excellent teaching. We will meet there with design thinking professor and Kyoto Startup Summer School founder Sushi Suzuki.',
    'img' => 'Logo001.jpg',
    'url' => 'https://www.kit.ac.jp/en/'
);

$VisitedStartups[] = array(
    'name' => 'MIRAI Innovation',
    'description' => 'Mirai Innovation Lab delivers solutions for business through development and research of innovative technologies.',
    'img' => 'Logo011.jpg',
    'url' => 'https://www.mirai-innovation-lab.com/'
);

$VisitedStartups[] = array(
    'name' => 'DWIH Tokyo - German Centre for Research and Innovation',
    'description' => 'The German Centre for Research and Innovation Tokyo (DWIH Tokyo) is a platform for German universities, research institutions and researchbased companies in Japan.',
    'img' => 'Logo014.jpg',
    'url' => 'https://www.dwih-tokyo.org/en/'
);

$VisitedStartups[] = array(
    'name' => 'SoftBank',
    'description' => 'SoftBank is a multinational conglomerate known for its investments in technology, telecommunications, and finance sectors.',
    'img' => 'Logo013.jpg',
    'url' => 'https://www.softbank.jp/en//'
);

$VisitedStartups[] = array(
    'name' => 'More coming soon',
    'description' => 'This startup tour is still being planned. You will find our full agenda here soon.',
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
    'Name' => "Jannik Nefferdorf",
    'ImgName' => "Jannik_Nefferdorf.jpg",
    'Studies' => "Former board member of PionierGarage",
    'Text'   => "I'm interested in learning about South Korea's and Japan's startup culture and meeting with successful entrepreneurs and investors. I hope to gain insight into the inner workings of successful startups and to make valuable connections in the industry.",
    'Linkedin' => 'https://www.linkedin.com/in/neffi97/'
);

$TeamMember[] = array(
    'Name' => "Julian Faber",
    'ImgName' => "silhouette.jpg",
    'Studies' => "Former board member of PionierGarage",
    'Text'   => "South Korea and Japan are leading nations in various fields of technology and are known for their high level of innovation and progress. At the same time, they offer a unique culture and history. I look forward to learning more about this blend of tradition and innovation through networking with local start-ups, institutions and investors.",
    'Linkedin' => 'https://www.linkedin.com/in/julian-faber/'
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

$TeamMember[] = array(
    'Name' => "Jonas Iser",
    'ImgName' => "silhouette.jpg",
    'Studies' => "Former board member of PionierGarage",
    'Text'   => "I have not yet taken part in a cross-border startup tour by the PionierGarage, so I am very excited to finally embark on this journey and experience the entrepreneurial spirit of East Asia. I am looking forward to getting to know many innovative startups and the culture of both countries.",
    'Linkedin' => 'https://www.linkedin.com/in/jonas-iser/'
);


//Sponsors - Images in /img/Sponsors/ImgName.png, 300x200px images                                       'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "sponsor_stadt_karlsruhe.jpg",
                                        'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "sponsor_kit.jpg",
                                        'Link'   => "https://www.kit.edu/");
$Sponsors[] = array('ImgName' => "sponsor_aok.jpg",
                                        'Link'   => "https://www.aok.de/pk/bw/");

//Youtube Link - if empty -> nothing is shown
$YoutubeLink = "";

//echo "debug";
