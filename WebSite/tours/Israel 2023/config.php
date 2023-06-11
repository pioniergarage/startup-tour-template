<?php

//Visited Location/Area -> Title
$Location = "Israel <br>2023";
$KilometersToTravel = 3941 ;
$DaysAbroad = 7;
$MotivatedPGlers = 15;

// travel period for countdown and different headers
$TravelPeriod = array(
    'start' => '2023-05-29',
    'end' => '2023-06-05'
);

//Change the Background trough replace /img/Background

//E-Mail for Contact Button, if not set - Contact-Button disapiers
$ContactEmail = "info@pioniergarage.de";

//Text which sumerizes the Tour in about 200-300 Words suggested
$AboutTourText = '<br><b>World-renowned hub of innovation</b><br>
Israel, also known as the "Startup Nation," is home to a thriving and dynamic startup culture. With a population of just 9 million people, Israel has produced more startups per capita than any other country in the world. These startups have made a significant impact on the global market, with many of them being acquired by major tech companies for billions of dollars.
<br><br>
<b>From Karlsruhe to Tel Aviv</b><br>
During our Startup Tour to Israel, we will visit some of the country\'s most innovative and successful startups. We\'ll get a behind-the-scenes look at how these companies operate and how they have disrupted their respective industries.

In addition to visiting startups, we\'ll also meet with investors, authorities and industry leaders. This is a great opportunity to network and learn from some of the most successful professionals in the startup world. 

Finally, we\'ll get to experience the vibrant culture and history of this fascinating country, from the ancient city of Jerusalem to the modern metropolis of Tel Aviv, to make the Startup Tour to Israel a one-of-a-kind experience that combines culture, innovation, and networking.
<br><br>                    
					<h4>Timeline</h4>
                    <ul class="pg-timeline">
                        <li>
                            <h5>Tel Aviv</h5>
                            <p>29 May 2023 – 05 June 2023</p>
                        </li>
                        <li>
                            <h5>Haifa</h5>
                            <p>30 May 2023</p>
                        </li>
                        <li>
                            <h5>Jerusalem</h5>
                            <p>04 June 2023</p>
                        </li>
                    </ul>';

//Text next to the PG Logo
$AboutThePGText = '15 members of PionierGarage, Germany\'s largest university club focused on entrepreneurship, located at the Karlsruhe Institute of Technology (KIT), 
are going to visit one of the world\'s most innovative countries: Israel.<br><br>
To find out more about our entrepreneurship club at Germany\'s leading
 technical university, head over to <a href="https://pioniergarage.de" target="_blank">our homepage</a> or contact us via <a href= "mailto:info@pioniergarage.de" target="_blank">info@pioniergarage.de</a> to become part of the tour as a supporter,
partner, sponsor or Startup/VC to be visited. We\'re looking forward to meeting inspiring people!';

//List of Visited Startups, Names Used to find the logo"s in /img/StartupLogos/StartupName.pioniergarage
//Store Startup Logos int the Form "StartupName.png" like in the example here
// Images should have the Size 300x200 Pixel
// $StartupsToVisit = 9;
$NumberOfStartups = 9;

$VisitedStartups[] = array(
    'name' => 'Helmholtz Association',
    'description' => 'Research for grand challenges. The Helmholtz Association in Tel Aviv services as a point of contact for existing and future partners in research, innovation, business and politics.',
    'img' => 'logo_helmholtz.png',
    'url' => 'https://www.helmholtz.de/international/buero-tel-aviv/'
);

$VisitedStartups[] = array(
    'name' => 'German Embassy Tel Aviv',
    'description' => '',
    'img' => 'logo_embassy.png',
    'url' => 'https://tel-aviv.diplo.de/il-de'
);

$VisitedStartups[] = array(
    'name' => 'Hasoub',
    'description' => 'A grassroots movement paving the way for the coming generation of Arab tech-entrepreneurs.',
    'img' => 'logo_hasoub.png',
    'url' => 'https://www.hasoub.org/'
);

$VisitedStartups[] = array(
    'name' => 'SigmaLabs',
    'description' => 'SigmaLabs accelerators provide the environment for build-up and innovation, supported by personal, deep mentorship from serial founders and top CEOs of successful startups.',
    'img' => 'logo_sigmalabs.png',
    'url' => 'https://sigmalabs.co/'
);

$VisitedStartups[] = array(
    'name' => 'Addionics',
    'description' => 'The next generation of rechargeable batteries: Addionics provides specialized improved rechargeable batteries by redesigning their architecture.',
    'img' => 'logo_addionics.png',
    'url' => 'https://www.addionics.com/'
);

$VisitedStartups[] = array(
    'name' => 'Daika Wood',
    'description' => 'Daikawood is a new all-natural material composed of wood waste, giving industry a sustainable digital adaptation to current wood fabrication processes.',
    'img' => 'logo_daikawood.png',
    'url' => 'https://daikawood.com/'
);

$VisitedStartups[] = array(
    'name' => 'itrek',
    'description' => 'itrek introduces tomorrow’s leaders in business, law, policy and STEM to Israel, helping them experience Israel firsthand through peer-led, week-long Israel Treks.',
    'img' => 'logo_itrek.png',
    'url' => 'https://itrek.org/'
);

$VisitedStartups[] = array(
    'name' => 'PayEm',
    'description' => 'PayEm helps finance and procurement teams drive business growth with one platform that brings compliance & control to your finance processes, boosting efficiency, savings, and accountability.',
    'img' => 'logo_payem.png',
    'url' => 'https://www.payem.co/'
);

$VisitedStartups[] = array(
    'name' => 'Peres Center',
    'description' => 'The Peres Center for Peace and Innovation is a leading non-profit and non-government organization focused on presenting the incredible story of Israel, the Innovation nation.',
    'img' => 'logo_peres.png',
    'url' => 'https://www.peres-center.org/en/'
);

$VisitedStartups[] = array(
    'name' => 'Ownboard',
    'description' => 'Single, centralized platform to streamline the employee onboarding process.',
    'img' => 'logo_ownboard.png',
    'url' => 'https://ownboard.ai/'
);


//Our TeamText - sumerize 30 Words
$TeamText = "We are a team of young founders and entrepreneurial students.";

//Team - Images in /img/team/ImgName.png (120x120px images, as png), Text about 20-40 Words
//CopyElements for more People

$TeamMember[] = array(
    'Name' => "Tobias Budig ",
    'ImgName' => "Tobias_Budig.jpg",
    'Studies' => "Former board member of PionierGarage and expert in technology startups",
    'Text'   => "Why is the Israeli startup ecosystem so dynamic? What is unique about founding in Israel?  This and even more I'd like to answer on our tour!",
    'Linkedin' => 'http://linkedin.com/in/tobias-budig'
);

$TeamMember[] = array(
    'Name' => "David König",
    'ImgName' => "David_König.png",
    'Studies' => "Board member of PionierGarage and Head of GROW",
    'Text'   => "I am very interested in startups and innovation, and I believe that visiting and learning from Israeli startups will provide me with valuable insights and experiences that I will not be able to get elsewhere.",
    'Linkedin' => 'https://www.linkedin.com/in/daweko/'
);

$TeamMember[] = array(
    'Name' => "Jannik Nefferdorf",
    'ImgName' => "Jannik_Nefferdorf.jpg",
    'Studies' => "Former board member of PionierGarage and startup enthusiast",
    'Text'   => "I'm interested in learning about Israel's thriving startup culture and meeting with successful entrepreneurs and investors. I hope to gain insight into the inner workings of successful startups and to make valuable connections in the industry.",
    'Linkedin' => 'https://www.linkedin.com/in/neffi97/'
);

$TeamMember[] = array(
    'Name' => "Tobias Carlé",
    'ImgName' => "Tobias_Carle.jpeg",
    'Studies' => "Board member of PionierGarage for Inspiration & Education",
    'Text'   => "In relation to the number of inhabitants, Israel produces the most startups. What makes Israel different and what can we learn from their approach in Germany? I'm looking forward to getting insights and getting to know new exciting people.",
    'Linkedin' => 'https://www.linkedin.com/in/tobias-carl%C3%A9-6205ab194/'
);

$TeamMember[] = array(
    'Name' => "Julian Faber",
    'ImgName' => "Julian_Faber.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "Israel has always been a dream destination for me. It is rich in historical and cultural sights and combines that with world-leading entrepreneurial achievements. I am thrilled to meet Israeli founders and investors to learn more about the advanced ecosystem.",
    'Linkedin' => 'https://www.linkedin.com/in/julian-faber/'
);

$TeamMember[] = array(
    'Name' => "Jannis Böning",
    'ImgName' => "Jannis_Böning.png",
    'Studies' => "Member of PionierGarage and former Head of GROW",
    'Text'   => "During my current one-year study abroad in Israel, I am experiencing the innovative mindset at the Technion in Haifa. People here are much more trying to apply new technology and change the world for the better. I am really looking forward to the Startup Tour to get even more insights into Israeli startups and to hear the stories of the founders.",
    'Linkedin' => 'https://www.linkedin.com/in/jboening/'
);

$TeamMember[] = array(
    'Name' => "Annalena Hees",
    'ImgName' => "Annalena_Hees.jpg",
    'Studies' => "Executive Chairwoman of PionierGarage",
    'Text'   => "The PionierGarage Startup Tour is one of the annual highlights for each and every PionierGarage member. That's why I'm delighted that, after Covid, we're finally back to exploring the world's startup ecosystems again, with Israel being a particularly interesting and outstanding destination.",
    'Linkedin' => 'https://www.linkedin.com/in/alhees/'
);

$TeamMember[] = array(
    'Name' => "Anny Jo Köhler",
    'ImgName' => "Anny_Köhler.jpeg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I'm passionate about startups, new ideas and other cultures. So I'm super excited to find out what makes Tel Aviv the new Silicon Valley and how the startup ecosystem works there. I am looking forward to the exchange on site and would like to take new impulses for business ideas back to Germany.",
    'Linkedin' => 'https://www.linkedin.com/in/annyjo-koehler/'
);

$TeamMember[] = array(
    'Name' => "Elias Bürkle",
    'ImgName' => "Elias_Bürkle.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I am very interested in all kinds of technological contexts and entrepreneurial issues. That's why I'm really looking forward to the technology stronghold Israel, especially Tel Aviv. I am also looking forward to the cultural background that Israel offers in combination with new technological achievements.",
    'Linkedin' => ''
);

$TeamMember[] = array(
    'Name' => "Jonas Höfflin",
    'ImgName' => "Jonas_Höfflin.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I am very interested in startups and how they work. I'm especially interested in how early-stage founders overcome challenges and manage their time.",
    'Linkedin' => 'https://www.linkedin.com/in/jonas-hoefflin-267285182/'
);

$TeamMember[] = array(
    'Name' => "Friedrich Hasenbein",
    'ImgName' => "Friedrich_Hasenbein.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I am very excited to be a part of the startup tour. Besides its intense history and diversity of religions, cultures and lifestyles, Israel is also known for a fertile startup ecosystem. During the trip, I would like to learn how Israel has managed to build a startup-friendly infrastructure that allows it to respond to changes in the world with innovation.",
    'Linkedin' => 'https://www.linkedin.com/in/friedrich-hasenbein-10308221b/'
);

$TeamMember[] = array(
    'Name' => "Ergin Cataltepe",
    'ImgName' => "Ergin_Cataltepe.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "I am enthralled by the possibilities that new technologies and innovative ideas bring. With a rich cultural heritage and a strong entrepreneurial spirit, I am eagerly anticipating my visit to Israel.",
    'Linkedin' => 'https://www.linkedin.com/in/ergin-cataltepe-967263211/'
);

$TeamMember[] = array(
    'Name' => "Vincent Fiedler",
    'ImgName' => "Vincent_Fiedler.jpg",
    'Studies' => "Board member of PionierGarage for operations",
    'Text'   => "I'm always on the lookout for new experiences and ideas. For this, the startup tour of the PionierGarage is perfect, because you get to know so many new people and ecosystems! I'm excited to see who we will meet in Israel!",
    'Linkedin' => 'https://www.linkedin.com/in/vincentfiedler/'
);

$TeamMember[] = array(
    'Name' => "Elisabeth Goebel",
    'ImgName' => "Elisa_Goebel.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "It's not about ideas. It's about making ideas happen. Europe often tends to doubt, while startup nations like Israel are already acting. I hope to be able to take a leaf out of this mindset back to Germany.",
    'Linkedin' => 'https://www.linkedin.com/in/elisabeth-goebel/'
);

$TeamMember[] = array(
    'Name' => "Bien Tran",
    'ImgName' => "Bien_Tran.jpg",
    'Studies' => "Member of PionierGarage",
    'Text'   => "The more you learn, the more you grow and the more you grow, the more you can offer others. Israel has a unique start up culture. Having the priviledge to be part of this journey and be able to get insights, inspirations, impulses helps me to offer others as much value as I possibly can.",
    'Linkedin' => 'https://www.linkedin.com/in/bien-tran/'
);

//Sponsors - Images in /img/Sponsors/ImgName.png, 300x200px images                                       'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "Logo_Karlsruhe.png",
                                        'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "Logo_KIT.svg",
                                        'Link'   => "https://www.kit.edu/");

//Youtube Link - if empty -> nothing is shown
$YoutubeLink = "";

//echo "debug";
