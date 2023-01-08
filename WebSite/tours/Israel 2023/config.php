<?php

//Visited Location/Area -> Title
$Location = "Israel <br>2023";
$KilometersToTravel = 0 ;
$DaysAbroad = 0;

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
                            <p>29 May 2023 – 02 June 2023</p>
                        </li>
                        <li>
                            <h5>Jerusalem</h5>
                            <p>03 June 2023</p>
                        </li>
                        <li>
                            <h5>Haifa</h5>
                            <p>04 June 2023 - 05 June 2023</p>
                        </li>
                    </ul>';

//Text next to the PG Logo
$AboutThePGText = '12 members of PionierGarage, Germany\'s largest university club focused on entrepreneurship, located at the Karlsruhe Institute of Technology (KIT), 
are going to visit one of the world\'s most innovative countries: Israel.<br><br>
To find out more about our entrepreneurship club at Germany\'s leading
 technical university, head over to <a href="https://pioniergarage.de" target="_blank">our homepage</a> or contact us via <a href= "mailto:info@pioniergarage.de" target="_blank">info@pioniergarage.de</a> to become part of the tour as a supporter,
partner, sponsor or Startup/VC to be visited. We\'re looking forward to meeting inspiring people!';

//List of Visited Startups, Names Used to find the logo"s in /img/StartupLogos/StartupName.pioniergarage
//Store Startup Logos int the Form "StartupName.png" like in the example here
// Images should have the Size 300x200 Pixel
$StartupsToVisit = 11;
// $NumberOfStartups = ;

$VisitedStartups[] = array(
    'name' => 'Coming soon',
    'description' => 'We are currently planning this Startup Tour to Israel and will be announcing shortly which companies we will be visiting on our tour.',
    'img' => 'coming-soon.jpg',
    'url' => 'https://pioniergarage.de'
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

//Sponsors - Images in /img/Sponsors/ImgName.png, 300x200px images                                       'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "Logo_Karlsruhe.png",
                                        'Link'   => "https://www.karlsruhe.de/");
$Sponsors[] = array('ImgName' => "Logo_KIT.svg",
                                        'Link'   => "https://www.kit.edu/");

//Youtube Link - if empty -> nothing is shown
$YoutubeLink = "";

//echo "debug";
