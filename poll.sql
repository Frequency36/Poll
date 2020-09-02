-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 04:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(60) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_title` varchar(225) NOT NULL,
  `c_desc` text NOT NULL,
  `c_dob` varchar(20) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` varchar(40) NOT NULL,
  `vcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cid`, `c_name`, `c_email`, `c_title`, `c_desc`, `c_dob`, `post_id`, `image`, `vcode`) VALUES
(3, 'Henry Anumudu', 'tohenryanumudu@gmail.com', 'Classroom teacher and founder,sharing lives', 'Henry Anumudu is the founder of Sharing Life Africa - a community that supports quality education by creating access to economic opportunities for women in low income communities and by directly supporting underserved schools. He works in the intersection between low income communities and schools, providing access to economic opportunities for families so they can send well fed and healthy children to school, and also directly support teachers to give quality education to learners in their classrooms.\r\nHenry also works as an independent consultant for Teach For Nigeria using the power of storytelling to build the brand of the Teaching profession in Nigeria and inspire young graduates and professionals to become teachers and join the movement of problem solvers bridging the gap of education inequity in Africa. He focused on building a world where children everywhere, especially in Africa, will have access to quality education and the skills to build successful futures for themselves.His work has won him the praise of global leaders, such as Times 100 &amp; Nobel Peace Prize Nominee, Dr Oby Ezekwesilli, who said: &quot;Henry Anumudu is probably one of the Best Ambassador of the Teaching profession that I have ever known. I’m a fan.”He has spoken at events such as the National Educational Innovation Summit and Edu360 by Union Bank; and have been featured by brands such as Business Insider &amp; ThisDay Newspaper.\r\n', '1993-11-12', 2, 'henry anu.jpg', 0),
(4, 'Elizabeth Nwarueze ', 'chinenyenwarueze@gmail.com', 'Board Secretary, Street Law Advocacy Network', 'By academics, Elizabeth was, throughout her undergraduate years, an honoree of the Deans and Vice-chancellor’s Roll of Honours being on a First Class Degree of 6.5 out of 7.0 making her the Best Graduating Student of the 2018 Law Class at University of Ibadan, clinching 10 awards at the convocation ceremonies. She has intellectually contributed to the area of Law in Nigeria as her article on 2019 Polls Re-scheduling: Breach or Balance of the Law; published in March 2018 was referenced in the case of Chief Anike Nwoga  National Assembly &amp; 3 Ors. at the Federal High Court of Nigeria holden at Abuja. She was listed as a 2017 Scholar of the Nigeria Higher Education Foundation which earned her a placement in Nigeria’s top law firm (Banwo&amp;Ighodalo) by the ranking of the Legal500. By administrative experience, Elizabeth has had the opportunity of heading pivotal groups within the Faculty of Law, Queen Elizabeth II Hall and the University of Ibadan. She was Chief Judge of the Law Students Society Judicial Council where she served for two years and embarked on the first full renovation of the Moot Court during her tenure. She was the Vice-President of the Law Literary and Debating Society in 2017. \r\nShe was two-term President of Queen Elizabeth II Debating Society whereupon Queens Hall proceeded to the Quarterfinals and Finals of the Jaw War Debating Tournament in 2016 and 2017 respectively, making Queens Hall the most formidable Female Hall Debating Society in her university.. Elizabeth has also shown unrivalled and obvious development with the services she rendered within and outside the University. In 2015, she engaged in a worthwhile project at the Agege Senior Grammar School for the Passion Incubator Initiative which saw the building of a resource centre for students and by students. That project won the Lagos State Community Development Shield Award in 2013. As member of the Children’s Parliament in Lagos State and Clerk of the House, she participated in proposing a bill for the enforcement of the provisions against Child Marriage in the Child Rights Law of Lagos State already assented to by the then Governor Babatunde Raji Fashola. As the rewards for excellence are evident, Elizabeth is the recipient of various local, national and international awards and honours. Locally, in 2015, she won for Augustine Nnamani Chambers of the Faculty of Law, the Inter-chambers Interjectory Debate Competition. \r\n', '1996-02-07', 2, 'elizabeth.jpg', 0),
(5, 'Olabanke Subair ', 'olabankebee@gmail.com', 'Olabanke Subair is the Founder &amp; Creative Director of Cy', 'Olabanke Subair is an all round creative with a passion for the Arts and environment. A graduate of Foreign Languages (French) from the prestigious Obafemi Awolowo University in Ile-Ife Osun State, she always stood out as an artistic child with an unmitigated interest in literature and fine arts. Born in the 90s to a family of 3 children, Olabanke developed an interest in the Arts at the early age of 9. During her primary education, she was a member of the Fine Arts club and Dance and Drama club where she participated in and won various competitions. At the age of 10, she was selected out of over 400 students in her primary school to participate in the International Children’s Day of Broadcasting organised by UNICEF, where she reported on street hawking and child exploitation. She later went on to bag awards for the Best Student in English Language &amp; French Language during her Junior/Senior secondary at Federal Government Girls’College, Sagamu. Her keen interest in literature &amp;writing led her to launch poetry blog, The Livid Ink in 2012. She took her writing to a professional level by working as a content writer and social media manager with companies such as iGrooveRadio, Olisa.tv &amp; Noah\'s Ark. \r\nIn 2015, she delved deeper into her love for the Arts by joining dynamic drama group, Creative X, where she starred in productions such as The Confab, Blue Blood, The Vow. However, Olabanke\'s ardour for all things art-related took a different turn in 2016 while living with her elder sister in Lagos. During her stay there, she developed an idea to upcycle tyres into artsy &amp; ultra-modern furniture after a pile of 20 tyres were about to be disposed by her sister’s neighbours. \r\nToday, Olabanke has set up a creative outfit, Cyrus45 Factory, which focuses on upcycling waste into bespoke and ultra-modern furniture pieces while also contributing to the reduction of environmental pollution, facilitating a greener future for the next generation. In 2018, Olabanke was privileged to be invited to the African Union (AU) in Addis Ababa, Ethiopia to speak about her work Cyrus45. She has also been featured on BBC World, Financial times UK, Guardian &amp;several other media outlets. She is the winner of the 2017 AYTA Most Promising Youth Entrepreneur Award while Cyrus45 bagged the 2018 AceAward for the Best Eco-friendly product. When she is not mining her imagination for innovative ideas that will change the world, she is reading/binging on biopics or Crime movies.\r\n', '', 3, 'olabanke.jpg', 0),
(6, 'Olisaemeka onuekwusi ', 'Emmanuelonuekwusi@gmail.com', 'ceo, Oliks Farms', 'An entrepreneur and Agribusiness Specialist with several years of proven experience in project management, business analysis, data analysis, business development, management and strategic planning with solid interpersonal skills; leadership and communication skills and design thinking approach skills to work with a functional team and on a daunting initiative.\r\nOnuekwusi olisaemeka holds a Bachelor degree in Agricultural Education from Michael okpara university of Agriculture, Umudike. He has over 3 years of experience in Agribusiness and community development and non-profit sector volunteerism and several years of experience across a diverse group of industries, including ICT and professional services, and has had several business development projects, operations, and research and trainings, and certification among others . Currently, Olisaemeka is the founder of Oliks Farms, an impact driven Agribusiness food value addition company that leverages on agricultural technology platform -AGROTRUST to create an inclusive agribusiness ecosystem that  is helping to solve most of the major challenges of African smallholders. Olisaemeka\'s passion for agriculture and advocacy as a change agent is to provide solutions to alleviating poverty , hunger and using agribusiness as a tool to Influencing economic decision making.\r\n ', '1994-12-27', 3, 'olisaemekaa.jpg', 0),
(7, 'Esther Ejiroghene Ajari', 'estherajari@trihealthon.org.ng', 'Founder and Director, The TriHealthon (a nonprofit organization) ', 'Esther Ejiroghene Ajari is a staunch health and gender equality advocate. \r\nIn her penultimate year as a student of Medicine and Surgery student at the University of Ibadan, Nigeria; Esther is currently undergoing an exchange programme at the Community Health department of the National Autonomous University of Mexico. In 2015, she won the Vice Chancellor’s prize for the second best applicant to the University of Ibadan. She has over 5 years of experience in community development. In December, 2017, she was named her community’s Young Leader of the Decade. In February, 2018, she was selected as a Public Policy Fellow of the Obama’s Young African Leaders Initiative Regional Learning Centre, Ghana. In June, she was selected as her University’s delegate to the Dream Big Conference in Uganda. In July, she won an academic grant from the Western Union Foundation. In October, she won the TEDx Johannesburg 100Ideas100Millenials award. In January, 2019, she was named the African Union ambassador of G(irls)20, Canada. \r\n\r\nAt G(irls)20, she worked with 23 other country/regional ambassadors to prepare a communique of policy recommendations for gender equality attainment (which was delivered to the G20 Osaka leaders). She also won the Young Leader of the Decade Award of the Oghara community of Delta State, Nigeria. In June, she became the first student to win the President Award of the Wells Mountain Initiative, USA. In November, she represented West and Central Africa at the 5th Biennial Youth AG summit in Brazil. In December, she was named one of only four African writers as finalists for the 2020 Iceland Writers Retreat Alumni Award. In January, 2020, I was selected as a student representative of the Clinton Global Initiative University, USA. In February, I was included on my university’s Primus Honour list. \r\n\r\nShe loves to dance, write, volunteer, mentor, research and network, her dream in life is to make the world better and safer, especially for the vulnerable population.\r\n', '', 7, 'Esther-2-300x267.jpg', 0),
(8, 'Mar\'yam Thaoban ', 'maryamthawbaan@gmail.com', 'Founder and President of NobleHeart Children Foundation ', 'Mar\'yam Thaoban  is the founder and President of NobleHeart Children Foundation, a not-for-profit focused on promoting child welfarism in the country through diverse means. Her desire to impact positively in the society, especially the vulnerable little ones therein was the driving force behind her establishing the NGO, which has so far recorded more than 13 outreaches/projects (individually and in partnership with other NGOs) since it\'s inception in December 2016. Under her care, the Foundation has reached out to over 2000 beneficiaries; children especially, through their various outreaches which cut across different states in the country.  Their flagship project &quot;Dress-A-child&quot; has recorded success by providing uniforms, sandals, socks, underwears and other writing materials for over 1500 indigent pupils of government primary schools in Lagos, Oyo, Kwara and Osun state. Through another project &quot;Love-A-child&quot; where healthcare and basic needs are brought closer to indigent people of different localities in Lagos state has recorded upto 500 beneficiaries at different times. They have other projects aimed at developing and mentoring the Children into becoming great individuals in the society.  Mar\'yam volunteers with other organizations and is a youth and women Advocate who has imparted in the lives of youths around her, through youth orientation programs and mentorship. She is a multipreneur, personal blogger, a trained journalist.  \r\nShe is also an Associate member of the institute of Chartered Mediator and Conciliators, an official of the Abuja International Model United Nations,  an Ambassador with the Global Goodwill Ambassadors, Books for Peace(Europa) movement, Junior Chamber International, Young African Leaders Initiative among others.\r\nShe has received a number of awards in her fields of passion; poetry, volunteerism and academics.\r\n', '1990-08-12', 7, 'mar\'yam.jpg', 0),
(9, 'Arewa Adesanya ', 'tobilobaarewa@gmail.com', 'Founder and Lead Creative Designer Adire World ', 'Tobiloba Arewa Adesanya is a 24years old Textile Designer. A graduate of Tai Solarin University of Education where she graduated with 2nd class upper in Social Studies and Textile Designing respectively. She started her textile designing company on campus in 2016 at the age of 20, due to her love for art, fashion and culture. In just 4 years,  she has worked with quite a number of  designers including Lisa Folawiyo, Jon Pelumi amongst others. Her designs have been featured in the Lagos Fashion Design Week, Paris Fashion Week and New York Fashion Week. Her goal to revive the Nigerian textile designing Industry has made her trained over 2000 people through her Academy and partnerships with non profit organizations to empower women nationwide by teaching them how to make indigenous Nigeria Print Adire for free. Also, she is the brain behind Textile Designers Hub, a community of other young Textile Designers as a bid to foster collaborations and networking as a means to revive the industry.\r\n In addition, she is the brain behind &quot;Project Clothe Me&quot; a sustainable community project that serves as a bridge between people who have unused clothes and people who needs clothing. Through the project she has been able to give free clothes to over 1000 people around Lagos.\r\n In 2018, she was nominated for 25 under 25 in the Cultural Category. In 2020, AdireWorld was nominated as top 100 fastest growing SMEs in Nigeria. In 2019, she wsas selected among 99 other women for Academy for women entrepreneurs by the US Consulate. She was also one of the beneficiaries of the Cherie Blair Foundation program where 160 women were selected to go through Core Business Training. Also, she was selected among 30 women  for the Female Founder Accelerator Program by Metro women in Partnership with Access Bank.\r\n', '1996-01-22', 8, 'tobiloba.jpg', 0),
(10, 'Jesse Josh ', 'jessejosh@gmail.com', 'Director at Shaygo Artistry ', 'Jesse Josh is an experienced Art Director with a demonstrated history of working in the arts and crafts industry. Skilled in Art, Graphic Design, Adobe Photoshop, Graffiti, and Fine Art. Strong marketing professional with a Bachelor of Applied Science (B.A.Sc.) focused in Mass Communication/Media Studies from Kaduna state university. \r\nJesse Josh is a full-time artist for two years. Although he is a Mass Communication graduate, his art on everything and graffiti have become famous within and around Kaduna for their bold colours, geometry lines and theme-The Ham, Kaduna State born speaks to Arts &amp; Ideas about finding a home in the creative industry.\r\n', '1990-06-14', 8, 'jesse.jpg', 0),
(11, 'Benjamin Oluwatosin Olowojebutu ', 'benjaminolowojebutufdn@gmail.com', 'Executive Director Benjamin Olowojebutu Foundation ', 'Benjamin is a brilliant, resourceful, self motivated and passionate graduate of the prestigious College of Medicine University of Lagos. He is a detailed physician with postgraduate training in family medicine from the National Postgraduate Medical College of Nigeria with special interest in maternal and child health. He is a skilled surgeon with over 12 years experience who has worked successfully in several communities in West Africa. Under his Foundation Benjamin Olowojebutu Foundation (BOF) over 2000 free surgeries has been performed in 12 states in Nigeria for folks suffering from Fibroids Hernias Lipomas and Breast lumps. \r\nHe is the Executive Director and Lead Surgeon of the BOF Love team. He has very great communication skills passionate about improving access to quality health in Africa. Love and Compassion is the core of his life and practice He is a licensed member of the Medical and Dental Council Of Nigeria (MDCN), Nigeria Medical Association (NMA), Association of Rural Surgeons of Nigeria (ARSON) and Associate Member of Nigeria Institute of Management (NIM). He is married and blessed with children.\r\n', '1982-06-13', 13, 'benjamin olowojebutu.jpg', 0),
(12, 'Olugbenga Ogunbowale ', 'yesboss2080@gmail.com', 'Founder, The Orphan Empowerment Society (TOES) ', 'Olugbenga Ogunbowale is the founder of The Orphan Empowerment Society (TOES), an NGO working to end orphan poverty in Africa by equipping orphans with free vocational-skills, medical care &amp; food. Inspired by a chance encounter with Ruth, a 10 year-old orphan with battered shoes, a hunger-stricken frame and hair full of ringworm, Olugbenga founded TOES after He experienced firsthand the plight of orphans, most of whom live on less than $1 a day with no access to clean water, sufficient food, or basic sanitation. Under Olugbenga’s leadership, TOES has grown from 6 volunteers to over 1,000 active volunteers in just 3 years, empowering over 20,000 orphans across 19 African countries. TOES has helped orphans go from living on $1 a day to making$30 a week within 2 months, enabling them access better health, education &amp; social acceptance on their own terms, without waiting for aid. \r\nOlugbenga has experience across social entrepreneurship, communication, digital skills as well as youth engagement. An alumnus of the Leadership in Business Institute of Kellogg School of Management (USA), He has a certification in Integrated Marketing Communications from IE Business School (Spain) &amp; a Bachelor of Science degree in Psychology from Obafemi Awolowo University (Nigeria).A Mandela Washington Fellow, Tony Elumelu Fellow, Royal Common wealth society fellow, YALI West Africa fellow, YALI star of business, Tony Elumelu Influencer, NYSC Merit Award winner, YALI network influencer &amp; Cisco Youth Leader (top 15 social entrepreneurs in the world, 2019), \r\nOlugbenga has been honored by multiple institutions &amp; governments. Olugbenga has spoken at numerous events addressing high level audience including governors, business tycoons, lawmakers and stakeholders across 3 continents. Olugbenga has been featured by Voice of America, USAID, NTA, TVC, LTV, Radio Nigeria, Tribune amongst others.\r\n', '1990-09-08', 13, 'ogunbowale.jpg', 0),
(13, 'Adedeji Kowobari ', 'Writetodeji@gmail.com', 'Founder and Principal at Concierge DentistNG', 'Dr Adedeji Kowobari is a Mobile Dental Practitioner with vast experience in providing dental services for people outside the confines of the dental clinics. He is the Founder and Principal at Concierge DentistNG, a dental company that focuses on increasing dental awareness and improved dental care access for Nigerians.\r\nHaving organised and participated in several Outreaches and Screenings, He and his vibrant team at Concierge DentistNG have been able to offer dental services to more than 300 people in the comfort of their homes in the past 2 years, working along with partner dental clinics too.\r\nCollaborations with schools through the School Dental Programme has resulted in delivering top notch oral awareness/detailed dental checkup for about 700 pupils in 3 different schools in Lagos State including schools for physically and mentally challenged individuals.\r\nConsidering the massive potential in the growing Dental Industry in Nigeria, He started an Online Dental Hangout a platform through which He works with dentists and dental clinic owners identify and maximize unique value chains available within the industry. \r\nHe currently consults for dental clinics in the area of clinic set up, recruitment, marketing, trainings and supplies with the aim to improve their productivity and position them better to serve the Nigerian populace. He is the convener of the first Dental Success Bootcamp for Dentists in Nigeria. \r\n', '', 14, 'adedeji.jpg', 0),
(14, 'Adebayo Alonge ', 'a@gmail.com', 'Co-Founder/CEO (Renowned Pioneer of in-situ drug checking in Pharma using deepTech) at RxAll Inc', 'Adebayo Alonge is a Nigerian pharmacist, inventor, deep tech entrepreneur, and market development professional. He emerged as the winner of the 2019 Hello Tomorrow Global deeptech Challenge otherwise known as, BNP Paribas Group Deep Tech Award, for creating a handheld nanoscanner that detects counterfeit drugs. He is the first African to win the contest.\r\nHe is the CEO and co-founder of RxAll Inc. – a U.S based deep tech Start-up firm which competed against 4,500 contenders from 119 nations across the globe to become the winner of the 2019 Hello Tomorrow Global Challenge, awarded by BNP Paribas.\r\nFrom beating death to inventing a life-changing scanner, 15 years ago, Alonge took a fake drug that nearly resulted in his death. His personal experience led to him becoming the co-founder of RxAll, which the website describes as an &quot;AI-hyperspectral platform for Authenticating Drugs.&quot;\r\nThe company was founded in 2017.\r\nNow, he has emerged as the winner of the 2019 BNP Paribas Group Deep Tech Award, also known as the Hello Tomorrow deepTech contest.  \r\n', '1987-10-01', 14, '220px-Adebayo_photo.jpg', 0),
(15, 'Gbenga adene', 'adeninet2010@gmail.com', 'Architect', 'Gbenga Adene is no doubt one of the most influential Youths in South west, Nigeria; particularly in Ondo State. He is an Architect and a Public Speaker; who has dedicated his time and resources to community service after his education. Helping the youths to discover and rediscover themselves.\r\nHe is a consultant to many SMEs and has helped over 300 youths to grow their business in the last three years through his platform called HOWGA, acronym for &quot;Hangout With Gbenga Adene&quot; He is also the Project lead of Ondo State Social Media Day which feature the first lady of Ondo State among other dignitaries in the State\r\nHe is also a consultant to Kick Against Molestation Initiative, an NGO that fight against domestic violence; also a consultant to Fingerprints in the United State of America, an NGO that supports education. He has organized a lot of programs to make live easy for all and sundry.He is the CEO of Gbenga Adene and Associates, an Architectural and Construction firm with 8 professional staffs and 25 contract staffs. He is also the CEO of ThinkBox, a consulting firm that has been helpful to people locally and internationally. He was featured on one of Africa leading Magazine, Rainbow Magazine as one of the emerging leaders in Nigeria.\r\nThrough his annual event HOWGA, Gbenga Adene now has a clothing line with customers from 3 continents of the World and several countries.\r\nHe is a regular guest both on National and Local Radio and TV station; Gbenga Adene likes to travel, play game and network with people.He is of the opinion that you should pray for the best and prepare for the worst that can happen. \r\n', '1992-03-14', 15, 'gbenga.jpg', 0),
(16, 'Yetunde Fadeyi', 'deborahfadeyi77@gmail.com', 'Founder at REES Africa, an Environmentalist, a Renewable Energy Engineer and Chevening Scholar ', 'Yetunde Fadeyi is the Founder and Director at Renewable Energy and Environmental Initiative for Africa Initiative (REES Africa)- a youth-led non-governmental Organisation that electrifies rural and marginalised areas in Nigeria via a model approach and carries out environmental sustainability programs to prompt actions that deliver sustainable development. She also co-founded WatCore Energy- a for-profit company concerned with the energy needs of urban areas in Nigeria. She is an Energy and Sustainability Practitioner with over three years of work experience in renewable energy in urban and rural areas in Nigeria. Through the work she does, eleven 200- year old rural communities in Nigeria were lit up for the very first time, amounting to over 10, 000 beneficiaries. Over 20 environmental sustainability campaigns have been carried out in urban and periurban areas to address lifestyle issues and create awareness impacting a total of 9000 beneficiaries in Nigeria and Ghana. Recently, she was nominated for the prize for community actions by the future awards Africa. \r\nIn 2019, she was awarded the prestigious Chevening Scholarship sponsored by the United Kingdom Foreign Commonwealth Office to study Masters in Sustainable Energy and Environment. In 2019, she was also awarded a Nuffic Scholarship by the Dutch Ministry of Foreign Affairs. She was also nominated for the SME 100 Awards - Energy and Sustainability. In addition, she was nominated for the JCI Nigeria Ten Outstanding Young Persons- environmental leadership category. In 2018, she was nominated for the ELOY Awards for the category social entrepreneur. She has over eight years’ progressive experience in project management, business development, sales &amp; marketing, campaign specialist, social media strategy, renewable energy, environmental sustainability, climate change, digital marketing &amp; facilitation and entrepreneurship. Working in several industries from fashion to media illuminated her mind and given her perspectives as to how sustainability for businesses can work. The media plays an increasingly important role for this cause creating conversations, greater engagement, forcing organizations to rethink their role in society, and aligning individuals, businesses and communities around the shared purpose. \r\n', '1993-08-17', 15, 'yetunde.jpg', 0),
(17, 'Grace Ihejiamaizu ', 'graceiheji@gmail.com', 'Social Entrepreneur. Founder, iKapture Centre for Development and Opportunity Desk ', 'Grace is a Social Entrepreneur, Educator and Mandela Washington Fellow working to promote quality education and empower the next generation of leaders and entrepreneurs. She is a Lecturer at the University of Calabar and holds a Masters in Rural Sociology and Community Development. Grace is the founder of iKapture Networks, an afterschool center that works to educate, engage and empower young people especially out-of-school youth. Since inception, iKapture has reached over 5000 young people. She is also the founder of OpportunityDesk.org, the largest online platform that shares relevant opportunities for youth across the world. Her experiences running Opportunity Desk since 2012 is a major inspiration for writing her first book, Go Global with Opportunities.\r\nGrace is committed to shaping a world where young people have unlimited access to quality education and opportunities. She volunteers her time to mentor young people especially women. In 2015, she coached a team of young girls to develop a mobile app to solve a problem in their community. The group, Team Charis, represented Africa at the Technovation World Pitch in San Francisco where they emerged global winners. Grace has since become a Technovation Regional Ambassador to get more girls into technology. She also currently serves as the Faculty Advisor for Enactus UNICAL.\r\nShe has spoken and facilitated sessions at national and international conferences including the World Economic Forum, UNESCO Youth Forum, and OpenCon. Her passion and dedication to the development of youth has won her several awards including being named one of Google\'s 12 brightest Young Minds in 2011 and a Global Changemaker in 2012. She was one of the Honorees for the 2013 Future Awards Africa Young Person of the Year Prize and in 2016, became a Mandela Washington Fellow of President Obama\'s Young African Leaders Initiative (YALI). She was recently named one of 50 Youth Leaders to watch during the CrossRiver@50 celebration and also received the President\'s Award for Selfless and Outstanding Service as Vice President of the Mandela Washington Fellowship Alumni Association of Nigeria (MWFAAN) in 2017.\r\n', '1990-09-18', 16, 'grace.jpg', 0),
(18, 'olusola Amusan', 'sola@amusan.ai', 'MD/CEO Coven Works. ', 'Sola Amusan, an Artificial Intelligence Evangelist, is an UNLEASH Alumnus, HIVE Global Leader, the Author of Are You Branded or Stranded (2010, 2020), a global shaper of the World Economic Forum, a member of the Country Support Mechanism (CSM) of the Global Community Engagement &amp; Resilience Fund in Nigeria and the President of the 8th Session of the African Youth and Governance Conference. He is passionate about social entrepreneurship as a key to unlocking Africa\'s immense potential.\r\nIn January 2018, he started building a high-impact AI program that has trained 1000+ Junior AI Experts on Machine Learning Models using mostly Python and R getting the attention of Facebook, Microsoft, World Bank and Amazon Web Services. Sola is very passionate about AI and is now CEO of Coven Works Inc. (covenworks.com) which has been backed by Google, C5 Capitals (Washington DC) and Amazon Web services.\r\nSola is strongly concerned about subjects such as unemployment and its economic impact, literacy, eradicating poverty and inspiring leadership, through the effective deployment and use of big data, mobility, social media, Artificial Intelligence and cloud technologies. In 2014, he was appointed as the head of Corporate Citizenship at Microsoft Nigeria, Olusola was responsible for driving all non-profit initiatives, social investments and impact oriented engagements for the subsidiary within the larger Middle East and Africa group. He is also an author, conference speaker, trainer and local Development Professional- widely acclaimed as one of Africa’s Youngest Growth Consultants.Sola has completed projects for Microsoft, Amazon Web Services, World Bank, Sterling Bank of Nigeria, Shell Petroleum Development company, First Bank of Nigeria, Youth bridge Foundation Ghana, Zambia &amp; Johannesburg, Schwarzkopf Foundation Germany, GIZ, Ashoka as well as Entrepreneur Organization. He completed the Non-profit strategy course at Philanthropy University, the Block Chain essentials specialization at IBM, and is the principal brain at Coven AI, and Curators University. He lives in Dallas, Texas with his wife, Tolu, and two beautiful girls.\r\n', '1990-02-24', 16, 'sola.jpg', 0),
(19, 'Peace Nnabugwu  ', 'nnabugwucp@gmail.com', 'Energy Auditor /Applied Physicist/Consultant ', 'Peace is an Applied Physicist, a GIZ Trainee on Mini-Grid Design and a senior research officer at NCEEC of the Energy Commission of Nigeria. She is a scholar of the Enterprise Development Center of the prestigious Lagos Business School on Social Sector Management. She was a Guest Trainee at BBC, Radio 4 London under the auspices of the training on: Communication &amp; Impact for Female Early Career Researchers by Imperial College and University of Warwick, London held at Cumberland Lodge, UK. She was nominated a 2017 Ambassador, International Summit of Leaders.\r\nPeace is also a grantee of ERNWACA (Educational Research Network for West and Central Africa) with funding from Netherlands Ministry of Foreign Affairs, the Suisse Cooperation (SDC) and the West African Economic and Monetary Union (WAMEU) for member research works culled from a call for submission of proposals upon which she and her team emerged first (1st) at both national and regional levels. She Lead the Research work which got published as NNABUGWU C., HUMPHREY I. and AMAECHI P.O., &quot;Restoring Quality Science Education in Nigeria via Improvised Practical Training: The Fuse Initiative&quot;, Afr educ develop issues 2016, ISSN: 2079-651X, nÂ°7 (2016) pp 244-263. In 2018, she got selected as a Johnson &amp; Johnson Champion of Science and was invited to the Schlumberger Foundation 2018 Stem Outreach program in Nigeria as a social sector stakeholder.\r\nPeace was recognized as a 2019 U. S. Department of States Bureau Educational and Cultural Affairs TechWomen Fellow. She belongs to various international and professional bodies such as; Organization for the Women in Science for the Developing World (OWSD), Institute of Physics (IOP), London, World Energy Council (WEC) to mention a few.', '', 18, 'peace.jpg', 0),
(20, 'Tolulope Olukokun', 'tolulopeoolukokun@gmail.com', 'university lecturer', 'Olukokun Tolulope is a lecturer in The Polytechnic Ibadan, he is also the founder of ThinkElectric Africa an organisation with sole mission of intensifying Africa\'s transitioning to renewable and sustainable energy. A seasoned entrepreneurs who is of a rare breed.He is a researcher with a number of publications, an innovator with a number of patents. He is an ardent problem solver. That has proven beyond reasonable doubt that electric mobility is possible and it is the way to go by in Nigeria and Africa.Olukokun Tolulope has almost finished up a prototype of an electric vehicle, he has a prototype of an electric bicycle in which he wants to make available for students to help them with cheap mobility on campus. Tolulope is passionate about others especially on issues that concerns many people such as environmental challenges, inadequate means of transportation and he is given up all of his resources to see that this problem is solved.\r\nTolulope hailed from a small town in Okeho he is happily married to his wife Jumoke and together they have two biological children Anjola and Monjola among other adopted children. In leisure, he watches and play soccer and some other board games. He loves being in his workshop most of the time just to bring one more solution.\r\nOlukokun Tolulope is a lover of knowledge who is ever ready to learn and also to impact into others. In his time, he has obtained two masters degree, a bachelors degree, a PGD, HND and ND, currently applying for his PhD.\r\n', '1984-10-25', 18, 'tolu.jpg', 0),
(21, 'Adenuga Ayotunde ', 'ayotundeadenuga@gmail.com', 'Deputy leader of ikeja local government ', 'Ambitious and focused Honorable. Adenuga Ayotunde is the youngest councilor in Lagos, Nigeria, the fact that  he reached this position at a very young age is  very inspiring and we would love you to learn from him.\r\nHe was born into the family of late pa and Mrs. ADENUGA of Ijebu Igbo. Adenuga started his early life at Bet international school Festac Lagos and proceeded to Lagos state model college, Ojo. He eventually had his university education at the prestigious Covenant university, Ota, Ogun State where he studied Economics in 2008. He obtained his Master degree in Ladoke Akintola university (LAUTECH), Ogbomosho in 2010.\r\nHis career began at Lagos State Ministry of special duties in 2011 where he worked for only one year. In 2012, his quest for impact took him to the private sector where he worked as executive assistant to the managing director of Rite foods Limited, the makers of Bigi sausages and Bigi drinks. In this company, he rose to the head of marketing department in barely 4 years.\r\nAdenuga’s zeal for politics made him resign from his company in 2017 where he contested for the post of a councilor in his ward (WARD C ONILEKERE Ikeja).\r\nThe Lagos state government youngest councilor is the deputy leader of Ikeja local government legislative arm and he is one of the vocal advocate of the #NotTooYoungtoRun movement in Nigeria. His passionate about youth development and empowerment and he is committed to the growth of young people in Nigeria', '1986-06-11', 17, 'adenuga.jpg', 0),
(22, 'Barr. Tope Akinyode ', 'Topeakinyode2@gmail.com', 'Human right lawyer/activist /legal practitioner ', 'Tope Akinyode; legal practitioner, is well-versed in public interest litigation, policy advocacy and transactional practice. He is one of the lawyers of freedom fighter, Mr Omoyele Sowore. He is currently contesting the controversial &quot;anti-social media bill&quot; before the Federal High Court over its potential human rights violation.\r\nHe secured the release of a journalist working with New York based news media – SaharaReporters and 2 other Nigerian journalists from police custody after the trio were physically battered and arrested for covering a protest in Nigeria. The brutality against the journalists was aired on BBC and Aljazeera respectively.\r\nAkinyode was hired to sue a daughter of the Nigerian President, and 2 others over an alleged human rights violation. The unprecedented lawsuit, well-reported in the media, earned him separate telephone calls from the official spokesperson of President Buhari; Garba Shehu and the Attorney General of the Federation and Minister of Justice; Abubakar Mallami SAN both offering to resolve a controversy which arose during the litigation.\r\nAkinyode\'s works and writings are well-published within and outside Nigeria. His works have appeared on BBC Africa, All Africa.com, Tribune, ThisDay, SaharaReporters, Guardian (Nigerian), Businessday, TheCable Ng, The Nation, Punch, Premium Times, Vanguard, Daily Independent, Daily Times and elsewhere. He has been offered interview sessions with BBC Africa, France 24, German Journalist; Katrin Gänsler, and has been interviewed by Jonathan Rozen, Senior Reporter with CPJ, Aljazeera, Quartz, Inter Press News, Global Observatory etc. Akinyode also features regularly on UK-based Arise TV for interviews.\r\nFurthermore, he possesses distinguished competence in construction law, tech-law and debt financing, just to mention a few.\r\n', '1985-04-25', 17, 'tope.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `name`, `title`) VALUES
(2, 'Education', 'academic leadership and/or accomplishment'),
(3, 'Business', 'Business, Economic and /or  Entrepreneurial accomplishment'),
(7, 'World Peace', 'Contribution to children, world peace and/ or human right '),
(8, 'cultural ', 'cultural achievement'),
(13, 'Humanitarian', 'Humanitarian and / or voluntary leadership'),
(14, 'Health', 'Medical Innovation'),
(15, 'Enviroment', 'moral and / or  environmental leadership'),
(16, 'Personal Development', 'Personal Improvement and / or accomplishment'),
(17, 'Legal & Politics', 'Political, Legal and / or governmental affairs'),
(18, 'Science', 'Scientific and / or technological development');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `address`) VALUES
(5, '1'),
(6, '3'),
(7, '4'),
(8, '5'),
(9, '8'),
(10, '9'),
(11, '24'),
(12, '248'),
(13, '2481'),
(14, '24812');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `v_id` int(11) UNSIGNED NOT NULL,
  `votes` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `c_id` int(11) NOT NULL,
  `post_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`v_id`, `votes`, `user`, `c_id`, `post_name`) VALUES
(105, 5, '', 3, ''),
(106, 5, '', 5, ''),
(107, 6, '', 8, ''),
(108, 4, '', 9, ''),
(109, 5, '', 12, ''),
(110, 4, '', 14, ''),
(111, 4, '', 16, ''),
(112, 5, '', 21, ''),
(113, 4, '', 19, ''),
(114, 4, '', 4, ''),
(115, 2, '', 6, ''),
(116, 2, '', 7, ''),
(117, 3, '', 11, ''),
(118, 4, '', 15, ''),
(119, 6, '', 17, ''),
(120, 3, '', 22, ''),
(121, 4, '', 20, ''),
(122, 4, '', 10, ''),
(123, 4, '', 13, ''),
(124, 1, '', 18, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `v_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
