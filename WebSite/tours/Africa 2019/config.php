<?php

//Visited Location/Area -> Title
$Location = "Africa<br>2019";
$KilometersToTravel = 19000;
$DaysAbroad = 16;
//Change the Background trough replace /img/Background

//E-Mail for Contact Button, if not set - Contact-Button disapiers
// $ContactEmail = "dominik.kogel@pioniergarage.de";

//Text which sumerizes the Tour in about 200-300 Words suggested
$AboutTourText = 'Africa has one of the most thriving startup ecosystems in the world. That’s certainly not a surprise since the countries are developing, the avarage age is low and there are many daily probems to be solved. An inital situation that is, on one hand, very problematic. On the other hand, we believe, it is a ground for innovation and improvement if necessary resouces are given to young african entrepreneurs.<br>
Reason enough for us to head to three of the most rising countries in East Africa: Kenya, Uganda and Rwanda. 10 motivated Pioneers from the PionierGarage are visiting startups, incubators and other centers for entrepreneurship for more than two weeks. Our mission is not only to get to know the culture, but to also share experiences, ideas and visions with local Entrepreneurs.<br>
We are taking off in the beginning of April and are exited already. If you have connections to any of the startup ecosystems, please share them with us.
                    <h4>Timeline</h4>
                    <ul class="pg-timeline">
                        <li>
                            <h5>Kenya</h5>
                            <p>02 April 2019 – 07 April 2019</p>
                        </li>
                        <li>
                            <h5>Uganda</h5>
                            <p>08 April 2019 – 12 April 2019</p>
                        </li>
                        <li>
                            <h5>Rwanda</h5>
                            <p>13 April 2019 – 17 April 2019</p>
                        </li>
                    </ul>';

//Text next to the PG Logo
$AboutThePGText = "10 members of PionierGarage, Germany's largest university club focused on entrepreneurship, located at the Karlsruhe Institute of Technology (KIT) in Germany, are going to visit three of the world's most innovative regions in Africa: Nairobi, Kampala and Kigali.
To find out more about our entrepreneurship club at Germany's leading technical university, head over to our homepage or contact us on <a href='mailto:info@pioniergarage.de'>info@pioniergarage.de</a>  to become part of the tour as a supporter, partner, sponsor or Startup/VC to be visited. We're looking forward to meeting inspiring people!";

//List of Visited Startups, Names Used to find the logo"s in /img/StartupLogos/StartupName.pioniergarage
//Store Startup Logos int the Form "StartupName.png" like in the example here
// Images should have the Size 300x200 Pixel
$StartupsToVisit = 25;
// $NumberOfStartups = 27;
$VisitedStartups = array();
$AdditionalText = array();

//Our TeamText - sumerize 30 Words
$TeamText = "We are a team of young founders and entrepreneurial students.";

//Team - Images in /img/team/ImgName.png (120x120px images, as png), Text about 20-40 Words
//CopyElements for more People
$TeamMember[] = array(
    'Name' => "Gil Talebian",
    'ImgName' => "gil_talebian.jpg",
    'Studies' => "Former Board Member of PionierGarage",
    'Text'   => "In a globalized world, solutions need to be found on an international level. With this tour, we hope to achieve a better understanding of the way startups are working in different parts of the world.",
    'Linkedin' => 'https://www.linkedin.com/in/giltalebian/'
);
$TeamMember[] = array(
    'Name' => "Marvin Wach",
    'ImgName' => "marvin_wach.jpg",
    'Studies' => "Head of External Relations, studying Civil Engineering in the fifth Bachelor Semester",
    'Text'   => "Africa is a continent with a very young average population-age. The potential in the startup-scene is huge. Therefore we want to take the chance to meet up with one of the greatest entrepreneur in Africa.",
    'Linkedin' => 'https://www.linkedin.com/in/marvin-wach-0b1736174/'
);
$TeamMember[] = array(
    'Name' => "Tobias Ohlsson",
    'ImgName' => "tobias_ohlsson.jpg",
    'Studies' => "Former Board Member of PionierGarage",
    'Text'   => "A lot of countries in Africa belong to the fastest growing economies in the world, increasing the importance of the continent year by year. There is still a lot of challenges to be overcome, but with a young population there is a huge potential for innovation and future orientated development. I want to meet a lot of interesting people with great ideas and the ambition to have an impact in their country and later on, the world.",
    'Linkedin' => 'https://www.linkedin.com/in/tobias-ohlsson-793841165/'
);
$TeamMember[] = array(
    'Name' => "Jannik Nefferdorf",
    'ImgName' => "jannik_nefferdorf.jpg",
    'Studies' => "Former board member of PionierGarage and industrial engineering student at KIT",
    'Text'   => "As an entrepreneurship enthusiast, I love talking to founders. I want to learn how to sucessfully build startups. I'm really looking forward to our East Africa startup tour because we will hopefully learn a lot about the challenges and opportunities of developing new business ideas in Africa.",
    'Linkedin' => 'https://www.linkedin.com/in/neffi97/'
);
$TeamMember[] = array(
    'Name' => "Andreas Cordes",
    'ImgName' => "andy_cordes.jpg",
    'Studies' => "Industrial Engineer familiar with the organisation of the Startup Contest GROW",
    'Text'   => "I am looking forward to explore the local startup ecosystem and learn from successful entrepreneurs.",
    'Linkedin' => 'https://www.linkedin.com/in/andreas-cordes-626642134'
);
$TeamMember[] = array(
    'Name' => "Antonia Lorenz",
    'ImgName' => "antonia_lorenz.jpg",
    'Studies' => "Chairwoman at PionierGarage",
    'Text'   => "I believe that there is huge potential for young, african Entrepreneurs to create Innovation since there are still many daily problems to be solved in developing countries. I am excited to get to know a few of them.",
    'Linkedin' => 'https://www.linkedin.com/in/antonia-lorenz-916273171/'
);
$TeamMember[] = array(
    'Name' => "Dominic Seitz",
    'ImgName' => "dominic_seitz.jpg",
    'Studies' => "Former board member of PionierGarage and industrial engineering student at KIT",
    'Text'   => "After getting to know many German start-ups I am very interested in talking about the challenges of a completely different ecosystem on another continent. Furthermore, I am looking forward to the intercultural exchange and the meeting of many interesting founders and personalities.",
    'Linkedin' => 'https://www.linkedin.com/in/dominic-seitz'
);
$TeamMember[] = array(
    'Name' => "Christian Wiegand",
    'ImgName' => "chris_wiegand.jpg",
    'Studies' => "Head of Relations, industrial engineering student at KIT",
    'Text'   => "East Africa is one of the fastest growing startup ecosystems. Young entrepreneurs in Africa have the possibility to create new solutions for the problems still existing worldwide. Therefore, I am enthusiastic to meet many interesting founders and to get insights into the local startup scene.",
    'Linkedin' => 'https://www.linkedin.com/in/christian-wiegand/'
);
$TeamMember[] = array(
    'Name' => "Katharina Riesterer",
    'ImgName' => "katharina_riesterer.jpg",
    'Studies' => "Former board member of the PionierGarage and computer science student",
    'Text'   => "After managing a coworking space and incubator for a semester I'm interested how things are run in other parts of the world. Furthermore I expect a bunch of interesting, innovative and diverse startups.",
    'Linkedin' => 'https://www.linkedin.com/in/katharina-riesterer-755841165/'
);
$TeamMember[] = array(
    'Name' => "Vito Dierksen",
    'ImgName' => "vito_dierksen.jpg",
    'Studies' => "Member of the Board IT | Computer Science",
    'Text'   => "I am very excited to  see an evolving StartUp ecosystem and how they get along with the difficulties from emerging markets in particular. I hope we can learn a lot from each other.",
    'Linkedin' => 'https://www.linkedin.com/in/vitodierksen'
);

//Sponsors - Images in /img/Sponsors/ImgName.png, 300x200px images
// $Sponsors[] = array('ImgName' => "Logo_Karlsruhe.png",
//                                         'Link'   => "https://www.karlsruhe.de/");

//Youtube Link - if empty -> nothing is shown
$YoutubeLink = "";

//echo "debug";
