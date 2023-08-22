<?php

//Visited Location/Area -> Title
$Location = "South Korea and Japan <br>2024";
$KilometersToTravel = 3941 ;
$DaysAbroad = 19;
$MotivatedPGlers = 12;

// travel period for countdown and different headers
$TravelPeriod = array(
    'start' => '2023-03-26',
    'end' => '2023-04-14'
);

//Change the Background trough replace /img/Background

//E-Mail for Contact Button, if not set - Contact-Button disapiers
$ContactEmail = "info@pioniergarage.de";

//Text which sumerizes the Tour in about 200-300 Words suggested
$AboutTourText = '<br><b>World-renowned hub of innovation</b><br>
Israel, also known as the "Startup Nation," is home to a thriving and dynamic startup culture. With a population of just 9 million people, Israel has produced more startups per capita than any other country in the world. These startups have made a significant impact on the global market, with many of them being acquired by major tech companies for billions of dollars.
<br><br>
<b>From Karlsruhe to Seoul and Tokyo</b><br>
During our Startup Tour to South Korea and Japan, we will visit some of the most innovative and successful startups of both countries. We\'ll get a behind-the-scenes look at how these companies operate and how they have disrupted their respective industries.

In addition to visiting startups, we\'ll also meet with investors, authorities and industry leaders. This is a great opportunity to network and learn from some of the most successful professionals in the startup world. 

Finally, we\'ll get to experience the vibrant culture and history of these fascinating countries, from the biggest city of the world (Tokyo) to natural heritages in South Korea, to make the Startup Tour a one-of-a-kind experience that combines culture, innovation, and networking.
<br><br>                    
					<h4>Timeline</h4>
                    <ul class="pg-timeline">
                        <li>
                            <h5>Seoul</h5>
                            <p>26 March 2024 – 01 April 2024</p>
                        </li>
                        <li>
                            <h5>Busan</h5>
                            <p>02 April 2024 - 03 April 2024</p>
                        </li>
                        <li>
                            <h5>Tokyo</h5>
                            <p>04 April - 14 April 2024</p>
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
// $StartupsToVisit = 22;
$NumberOfStartups = 22;

$VisitedStartups[] = array(
    'name' => 'Coming soon',
    'description' => 'This startup tour is still being planned, so that no startup visits are terminated yet.',
    'img' => 'coming-soon.jpg',
    'url' => ''
);


//Our TeamText - sumerize 30 Words
$TeamText = "We are a team of young founders and entrepreneurial students.";

//Team - Images in /img/team/ImgName.png (120x120px images, as png), Text about 20-40 Words
//CopyElements for more People

$TeamMember[] = array(
    'Name' => "Bien Tran ",
    'ImgName' => "Bien_Tran.jpg",
    'Studies' => "Former board member of PionierGarage and expert in technology startups",
    'Text'   => "Why is the Israeli startup ecosystem so dynamic? What is unique about founding in Israel?  This and even more I'd like to answer on our tour!",
    'Linkedin' => 'https://www.linkedin.com/in/bien-tran/'
);

$TeamMember[] = array(
    'Name' => "Céline Brunner",
    'ImgName' => "Celine_Brunner.jpg",
    'Studies' => "Board member of PionierGarage and Head of GROW",
    'Text'   => "I am very interested in startups and innovation, and I believe that visiting and learning from Israeli startups will provide me with valuable insights and experiences that I will not be able to get elsewhere.",
    'Linkedin' => 'https://www.linkedin.com/in/celine-brunner/'
);

$TeamMember[] = array(
    'Name' => "Chris Kaufmann",
    'ImgName' => "Chris_Kaufmann.jpg",
    'Studies' => "Former board member of PionierGarage and startup enthusiast",
    'Text'   => "I'm interested in learning about Israel's thriving startup culture and meeting with successful entrepreneurs and investors. I hope to gain insight into the inner workings of successful startups and to make valuable connections in the industry.",
    'Linkedin' => ''
);

$TeamMember[] = array(
    'Name' => "Christian Simon",
    'ImgName' => "Christian_Simon.jpg",
    'Studies' => "Board member of PionierGarage for Inspiration & Education",
    'Text'   => "In relation to the number of inhabitants, Israel produces the most startups. What makes Israel different and what can we learn from their approach in Germany? I'm looking forward to getting insights and getting to know new exciting people.",
    'Linkedin' => 'https://www.linkedin.com/in/christian-simon-76559b103/'
);

$TeamMember[] = array(
    'Name' => "Friedrich Hasenbein",
    'ImgName' => "Friedrich_Hasenbein.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "Israel has always been a dream destination for me. It is rich in historical and cultural sights and combines that with world-leading entrepreneurial achievements. I am thrilled to meet Israeli founders and investors to learn more about the advanced ecosystem.",
    'Linkedin' => 'https://www.linkedin.com/in/friedrich-hasenbein-10308221b/'
);

$TeamMember[] = array(
    'Name' => "Gregory Schenk",
    'ImgName' => "Gregory_Schenk.jpg",
    'Studies' => "Member of PionierGarage and former Head of GROW",
    'Text'   => "During my current one-year study abroad in Israel, I am experiencing the innovative mindset at the Technion in Haifa. People here are much more trying to apply new technology and change the world for the better. I am really looking forward to the Startup Tour to get even more insights into Israeli startups and to hear the stories of the founders.",
    'Linkedin' => 'https://www.linkedin.com/in/gregory-schenk-134362117/'
);

$TeamMember[] = array(
    'Name' => "Jannik Nefferdorf",
    'ImgName' => "Jannik_Nefferdorf.jpg",
    'Studies' => "Executive Chairwoman of PionierGarage",
    'Text'   => "The PionierGarage Startup Tour is one of the annual highlights for each and every PionierGarage member. That's why I'm delighted that, after Covid, we're finally back to exploring the world's startup ecosystems again, with Israel being a particularly interesting and outstanding destination.",
    'Linkedin' => 'https://www.linkedin.com/in/neffi97/'
);

$TeamMember[] = array(
    'Name' => "Mustafa Kemal Kula",
    'ImgName' => "Mustafa_Kemal_Kula.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I'm passionate about startups, new ideas and other cultures. So I'm super excited to find out what makes Tel Aviv the new Silicon Valley and how the startup ecosystem works there. I am looking forward to the exchange on site and would like to take new impulses for business ideas back to Germany.",
    'Linkedin' => 'https://www.linkedin.com/in/mustafa-kemal-kula-043698240/'
);

$TeamMember[] = array(
    'Name' => "Leon Kunz",
    'ImgName' => "Leon_Kunz.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I am very interested in all kinds of technological contexts and entrepreneurial issues. That's why I'm really looking forward to the technology stronghold Israel, especially Tel Aviv. I am also looking forward to the cultural background that Israel offers in combination with new technological achievements.",
    'Linkedin' => 'https://www.linkedin.com/in/leon-kunz-4a354621b/'
);

$TeamMember[] = array(
    'Name' => "Linus Schilpp",
    'ImgName' => "Linus_Schilpp.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I am very interested in startups and how they work. I'm especially interested in how early-stage founders overcome challenges and manage their time.",
    'Linkedin' => 'https://www.linkedin.com/in/linus-schilpp-92b351281/'
);

$TeamMember[] = array(
    'Name' => "Tobias Carlé",
    'ImgName' => "Tobias_Carle.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I am very excited to be a part of the startup tour. Besides its intense history and diversity of religions, cultures and lifestyles, Israel is also known for a fertile startup ecosystem. During the trip, I would like to learn how Israel has managed to build a startup-friendly infrastructure that allows it to respond to changes in the world with innovation.",
    'Linkedin' => 'https://www.linkedin.com/in/tobias-carl%C3%A9-6205ab194/'
);

$TeamMember[] = array(
    'Name' => "Vincent Fiedler",
    'ImgName' => "Vincent_Fiedler.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I am enthralled by the possibilities that new technologies and innovative ideas bring. With a rich cultural heritage and a strong entrepreneurial spirit, I am eagerly anticipating my visit to Israel.",
    'Linkedin' => 'https://www.linkedin.com/in/vincentfiedler/'
);

//Sponsors - Images in /img/Sponsors/ImgName.png, 300x200px images                                       'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "Logo_Karlsruhe.png",
                                        'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "Logo_KIT.svg",
                                        'Link'   => "https://www.kit.edu/");

//Youtube Link - if empty -> nothing is shown
$YoutubeLink = "";

//echo "debug";
