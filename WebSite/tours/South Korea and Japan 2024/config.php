<?php

//Visited Location/Area -> Title
$Location = "South Korea & Japan 2024";
$KilometersToTravel = 20341;
$DaysAbroad = 23;
$MotivatedPGlers = 11;

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
$AboutThePGText = '11 members of PionierGarage, Germany\'s largest university club focused on entrepreneurship, located at the Karlsruhe Institute of Technology (KIT), 
are going to visit two of the world\'s most fascinating and unique countries: South Korea and Japan.<br><br>
To find out more about our entrepreneurship club at Germany\'s leading
 technical university, head over to <a href="https://pioniergarage.de" target="_blank">our homepage</a> or contact us via <a href= "mailto:info@pioniergarage.de" target="_blank">info@pioniergarage.de</a> to become part of the tour as a supporter,
partner, sponsor or Startup/VC to be visited. We\'re looking forward to meeting inspiring people!';

//List of Visited Startups, Names Used to find the logo"s in /img/StartupLogos/StartupName.pioniergarage
//Store Startup Logos int the Form "StartupName.png" like in the example here
// Images should have the Size 300x200 Pixel
// $StartupsToVisit = 24;
$NumberOfStartups = 46;

$VisitedStartups[] = array(
    'name' => 'AHK Korea - Korean-German Chamber of Commerce and Industry',
    'description' => 'The AHKs support German companies that want to build or expand their foreign business. We will visit their office in Seoul to get an in-depth overview of the Korean market and startup ecosystem.',
    'img' => 'Logo003.jpg',
    'url' => 'https://korea.ahk.de/en/'
);

$VisitedStartups[] = array(
    'name' => 'German Embassy Seoul',
    'description' => 'The German Embassy will give us an overview of the political and economic situation in Korea. We will meet the German ambassador Georg Wilfried Schmidt there.',
    'img' => 'Logo015.jpg',
    'url' => 'https://seoul.diplo.de/kr-de'
);

$VisitedStartups[] = array(
    'name' => 'The Garrison',
    'description' => 'Global startup community and co-working space in Seoul offering consulting, networking events, a startup-focused job board, and a collaborative coworking space. We will meet CEO Riso Dongok Ahn.',
    'img' => 'Logo005.jpg',
    'url' => 'https://www.thegarrison.company/'
);

$VisitedStartups[] = array(
    'name' => 'Lumis Games',
    'description' => 'Lumis Games develops and distributes computer simulation games for education. We will meet founder Steve Ahn who is also experienced in the VC industry and as professor for entrepreneurship.',
    'img' => 'Logo004.jpg',
    'url' => 'http://www.lumisgames.com/'
);

$VisitedStartups[] = array(
    'name' => 'D3 Jubilee Partners',
    'description' => 'D3Jubilee, a Seoul and San Francisco-based global impact venture capital, is uniquely positioned to redefine the role of capital by investing in tech-based companies with entrepreneurial innovation.',
    'img' => 'Logo034.jpg',
    'url' => 'https://d3jubilee.com/'
);

$VisitedStartups[] = array(
    'name' => 'BMW Startup Garage',
    'description' => 'The BMW Startup Garage is the Venture Client unit of the BMW Group. Their goal is to foster innovation speed and quality - through the help from startups - at all BMW Group Divisions. We will visit their office in Seoul.',
    'img' => 'Logo016.jpg',
    'url' => 'https://www.bmwstartupgarage.com/'
);

$VisitedStartups[] = array(
    'name' => 'Seoul Startups',
    'description' => 'Seoul Startups is a community fostering exchanges on ideas, work culture, language, insights into the market and life in Korea, while also organizing regular events to nurture a strong startup ecosystem.',
    'img' => 'Logo017.jpg',
    'url' => 'https://www.seoulstartups.com/'
);

$VisitedStartups[] = array(
    'name' => 'Seoul Digital Foundation',
    'description' => 'The Seoul Digital Foundation is striving to transform Seoul into a globally attractive city while addressing social neglect through policies supporting digital transformation, the development of big data and AI-driven public services.',
    'img' => 'Logo018.jpg',
    'url' => 'https://sdf.seoul.kr/index'
);

$VisitedStartups[] = array(
    'name' => 'Seoul Robotics',
    'description' => 'Powering the future of mobility currently building deep learning based lidar perception module for self-driving cars and robots. We will meet founder and CEO Hanbin Lee.',
    'img' => 'Logo007.jpg',
    'url' => 'https://seoulrobotics.org/'
);

$VisitedStartups[] = array(
    'name' => 'Mercedes-Benz Startup Autobahn',
    'description' => 'STARTUP AUTOBAHN is an innovation platform that opens its doors to entrepreneurs from the high-tech sector. The aim is to find out within a short period of time whether Mercedes-Benz and start-ups can join forces to form collaborations and partnerships.',
    'img' => 'Logo035.jpg',
    'url' => 'https://group.mercedes-benz.com/innovation/venture/startup-autobahn/'
);

$VisitedStartups[] = array(
    'name' => 'Seoul AI Hub',
    'description' => 'Seoul AI Hub, established in 2017, hosts 110 companies and supports 163 membership firms. It offers extensive aid for AI startups. It’s a crucial launchpad for AI startups.',
    'img' => 'Logo020.jpg',
    'url' => 'https://www.seoulaihub.kr/eng1/index2.asp'
);

$VisitedStartups[] = array(
    'name' => 'Seoul National University AI Institute',
    'description' => 'AIIS (Artificial Intelligence Institute of Seoul National University) is an intercollegiate research institute established in 2019, committed to integrating and supporting AI-related research.',
    'img' => 'Logo036.jpg',
    'url' => 'https://aiis.snu.ac.kr/eng/'
);

$VisitedStartups[] = array(
    'name' => 'PetNow',
    'description' => 'Petnow introduces a revolutionary solution to identify dogs and cats by biometrics. The AI-driven biometric pet ID of PetNow offers a means to identify beloved pets via smartphone cameras.',
    'img' => 'Logo037.jpg',
    'url' => 'https://petnow.io/en/'
);

$VisitedStartups[] = array(
    'name' => 'Simsan Ventures',
    'description' => 'Simsan is a venture capital firm that invests in diverse-led startups developing frontier technologies with scaled impact. We will meet Simsan APAC Partner Rancho Lee.',
    'img' => 'Logo038.jpg',
    'url' => 'https://simsan.vc/'
);

$VisitedStartups[] = array(
    'name' => 'Deardot',
    'description' => 'Deardot is a sustainable, vegan cosmetic brand given to you by nature. They write stories that care about the environment and people.',
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
    'name' => 'Incheon Startup Park',
    'description' => 'The first startup park in Korea to support startups through public-private cooperation - Silicon Valley in Korea.',
    'img' => 'Logo021.jpg',
    'url' => 'https://www.startuppark.kr/eng/main.do'
);

$VisitedStartups[] = array(
    'name' => 'Institute for Aerospace Industry-Academia Collaboration',
    'description' => 'The IAIAC is a non-profit organization in Incheon. IAIAC’s mission is to foster new domestic aviation convergence and complex industries.',
    'img' => 'Logo023.jpg',
    'url' => 'https://www.iiaci.or.kr/eng/index.htm'
);

$VisitedStartups[] = array(
    'name' => 'SIDPartners',
    'description' => 'Professional startup accelerator based on technology and intellectual property. We will meet CEO Jungwook Byun who will give us an overview of the activites of SIDPartners.',
    'img' => 'Logo024.jpg',
    'url' => ''
);

$VisitedStartups[] = array(
    'name' => 'Incheon Technopark',
    'description' => 'Incheon Technopark is a corporate support organization that provides business support and technology development support services.',
    'img' => 'Logo025.jpg',
    'url' => 'https://www.itp.or.kr/'
);

$VisitedStartups[] = array(
    'name' => 'CCEI Incheon',
    'description' => 'Incheon Center for Creative Economy & Innovation will promote the creation and fostering of a new start-up ecosystem and is financed by the Korean government.',
    'img' => 'Logo026.jpg',
    'url' => 'https://ccei.creativekorea.or.kr/incheon/'
);

$VisitedStartups[] = array(
    'name' => 'KAIST - Korea Advanced Institute of Science & Technology',
    'description' => 'KAIST is the first and top science and technology university in Korea. We will meet with Young-Tae Kim, chief of science-based entrepreneurship at KAIST.',
    'img' => 'Logo010.jpg',
    'url' => 'https://www.kaist.ac.kr/en/'
);

$VisitedStartups[] = array(
    'name' => 'Startup KAIST',
    'description' => 'Startup KAIST provides a variety of startup programs to support entrepreneurship initiatives and student startup teams.',
    'img' => 'Logo039.jpg',
    'url' => 'https://startup.kaist.ac.kr/'
);

$VisitedStartups[] = array(
    'name' => 'CCEI Daejeon',
    'description' => 'Daejeon Center for Creative Economy & Innovation will promote the creation and fostering of a new start-up ecosystem and is financed by the Korean government.',
    'img' => 'Logo026.jpg',
    'url' => 'https://ccei.creativekorea.or.kr/daejeon/'
);

$VisitedStartups[] = array(
    'name' => 'ETRI - Electronics and Telecommunications Research Institute',
    'description' => 'The ETRI is a Korean government-funded research institution that contributes to the economic and social development through research, development and distribution of industrial core technologies in the field of Information, Communications, Electronics, Broadcasting and Convergence technologies.',
    'img' => 'Logo040.jpg',
    'url' => 'https://www.etri.re.kr/eng/main/main.etri'
);

$VisitedStartups[] = array(
    'name' => 'Suseong-gu (partner city of Karlsruhe)',
    'description' => 'Suseong-gu is an independent district within the metropolis of Daegu. Since the first contacts in 2006, there has been a lively exchange between the sister cities, particularly on a cultural level. We aim to deepen these ties on an economic innovation level and further acquaint ourselves with our allies in Korea.',
    'img' => 'Logo027.jpg',
    'url' => 'https://www.suseong.kr/eng/index.do'
);

$VisitedStartups[] = array(
    'name' => 'DIP - Daegu Digital Innovation Promotion Agency',
    'description' => 'The DIP is a government-funded organization in Daegu that supports local IT and technology companies',
    'img' => 'Logo041.jpg',
    'url' => 'https://www.dip.or.kr/'
);

$VisitedStartups[] = array(
    'name' => 'Daegu Scale-Up Hub',
    'description' => 'Daegu Scale Up Hub is a business incubation center that supports the nurturing and growth of startups, and seeks to create a new ecosystem where startups can successfully grow and become unicorns.',
    'img' => 'Logo042.jpg',
    'url' => 'https://startup.daegu.go.kr/index.do?menu_id=00003213'
);

$VisitedStartups[] = array(
    'name' => 'Start2 Group',
    'description' => 'Start2 Group is a global innovation leader taking startup journeys to the next level. As a premier startup ecosystem platform, they serve as the ultimate destination for growth-oriented startups.',
    'img' => 'Logo006.jpg',
    'url' => 'https://start2.group/'
);

$VisitedStartups[] = array(
    'name' => 'SEA.D',
    'description' => 'SEA.D wants to market seaweed products from Ginjang-gun in a modern way. They want to deliver high-quality marine products and authentic dried food to customers.',
    'img' => 'Logo028.jpg',
    'url' => 'https://welovesead.modoo.at/'
);

$VisitedStartups[] = array(
    'name' => 'Gijang-gun Seaweed Research Institute',
    'description' => 'Research on seaweed conservation and management technology development, new seaweed varieties and aquaculture technology with the mission to foster the Korean seaweed industry.',
    'img' => 'Logo043.jpg',
    'url' => 'https://www.nifs.go.kr/eng/contents/actionContentsCons0140.do'
);

$VisitedStartups[] = array(
    'name' => 'Cube Farm',
    'description' => 'Vertical farming startup in Busan that uses second-hand ISO-refrigerated containers from maritime transportation for urban farming solutions with a focus on Shiitake mushroom production.',
    'img' => 'Logo044.jpg',
    'url' => 'http://cubefarm.kr/index.html'
);

$VisitedStartups[] = array(
    'name' => 'Space Power Technologies',
    'description' => 'Research institute at the Kyoto university working on wireless power technology.',
    'img' => 'Logo045.jpg',
    'url' => 'https://spacepowertech.com/en/'
);

$VisitedStartups[] = array(
    'name' => 'SKB.vc',
    'description' => 'Japanese craftsmanship + global vision = world-class ventures. Venture capital for firm focusing on the early-stage tech ecosystem in Japan.',
    'img' => 'Logo046.jpg',
    'url' => 'https://www.skb.vc/'
);

$VisitedStartups[] = array(
    'name' => 'Kyoto Institute of Technology',
    'description' => 'The technical university of Kyoto is known for its long history and excellent teaching. We will meet there with design thinking professor and Kyoto Startup Summer School founder Sushi Suzuki.',
    'img' => 'Logo001.jpg',
    'url' => 'https://www.kit.ac.jp/en/'
);

$VisitedStartups[] = array(
    'name' => 'ATR - Advanced Telecommunications Research Institute',
    'description' => 'The ATR is a research institution with the aim to drive an innovation ecosystem, tackle social challenges through technology and be a leading player in Keihanna Science City.',
    'img' => 'Logo047.jpg',
    'url' => 'https://www.atr.jp/index_e.html'
);

$VisitedStartups[] = array(
    'name' => 'PEEL Lab',
    'description' => 'PEEL Lab is a one-stop material sourcing, product design, and manufacturing solution for corporates and brands looking for eco-friendly alternatives to animal leather. The PEEl leather is made from pineapple leaves, upcycling food loss.',
    'img' => 'Logo048.jpg',
    'url' => 'https://www.peel-lab.com/'
);

$VisitedStartups[] = array(
    'name' => 'MIRAI Innovation Research Institute',
    'description' => 'Mirai Innovation Lab delivers solutions for business through development and research of innovative technologies.',
    'img' => 'Logo011.jpg',
    'url' => 'https://www.mirai-innovation-lab.com/'
);

$VisitedStartups[] = array(
    'name' => 'GramEye',
    'description' => 'Antimicrobial Resistance is a natural phenomenon resulting from the use of antimicrobial drugs. GramEye advocates for appropriate prescription of antimicrobial drugs globally to combat drug-resistant bacteria, which have evolved to resist previously effective treatments due to antibiotic use.',
    'img' => 'Logo029.jpg',
    'url' => 'https://grameye.com/'
);

$VisitedStartups[] = array(
    'name' => 'Takeoff Tokyo',
    'description' => 'Takeoff Tokyo is a two-day event for world-conquering founders, visionary investors, influential media and ecosystem players from around the world. Startups will go head to head in a pitch contest, entrepreneurs and investors will share their experiences on panel discussions.',
    'img' => 'Logo030.jpg',
    'url' => 'https://www.takeoff-tokyo.com/'
);

$VisitedStartups[] = array(
    'name' => 'WAY Equity Partners',
    'description' => 'WAY is a company builder dedicated to partnering with exceptional founders and experts to establish top-tier software companies tackling significant customer challenges. Together, they strive to shape the future, one step at a time.',
    'img' => 'Logo031.jpg',
    'url' => 'https://www.wayequity.co/'
);

$VisitedStartups[] = array(
    'name' => 'Shibuya Startup Support',
    'description' => 'Shibuya Startup Support aids international founders on their startup journey. They serve as a concierge, assisting in establishing and expanding businesses by providing resources, personalized advice and connections to local opportunities.',
    'img' => 'Logo032.jpg',
    'url' => 'https://shibuya-startup-support.jp/'
);

$VisitedStartups[] = array(
    'name' => 'Creww',
    'description' => 'Creww was founded in 2012 with the goal to become the first entity in Japan dedicated to creating an ecosystem for startups. Today it provides an open innovation platform and startup community in Japan, Korea and Taiwan.',
    'img' => 'Logo022.jpg',
    'url' => 'https://creww.in/global/en'
);

$VisitedStartups[] = array(
    'name' => 'DWIH Tokyo - German Centre for Research and Innovation',
    'description' => 'The German Centre for Research and Innovation Tokyo (DWIH Tokyo) is a platform for German universities, research institutions and researchbased companies in Japan.',
    'img' => 'Logo014.jpg',
    'url' => 'https://www.dwih-tokyo.org/en/'
);

$VisitedStartups[] = array(
    'name' => 'KERNEL by DeepCore',
    'description' => 'KERNEL is an AI-focused incubation community for individuals aspiring to revolutionize the world through technology. It offers an ideal environment for engineers and researchers passionate about cutting-edge technology, helping members uncover and harness their potential to initiate groundbreaking innovations.',
    'img' => 'Logo033.jpg',
    'url' => 'https://kernel.deepcore.jp/en/'
);

$VisitedStartups[] = array(
    'name' => 'Garage Sumida',
    'description' => 'Garage Sumida is an innovative hardware incubation facility, which is located inside an advanced metal processing factory. It was founded by the manager of Hamano Products to support startups.',
    'img' => 'Logo049.jpg',
    'url' => 'https://garage-sumida.jp/english/'
);


//Our TeamText - sumerize 30 Words
$TeamText = "We are a team of young founders and entrepreneurial students.";

//Team - Images in /img/team/ImgName.png (120x120px images, as png), Text about 20-40 Words
//CopyElements for more People

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
