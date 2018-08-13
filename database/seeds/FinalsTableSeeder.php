<?php

use Illuminate\Database\Seeder;

class FinalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finals')->insert([
            ['id' => 1,
                'title' => "Google Glass for Training and Education",
                'abstract' => "Google Glass (this report shall refer to Google Glass interchangeably as Glass henceforth) was officially intended for use as a consumer device and it had been marketed as such by Google themselves but its main benefits were found in an enterprise setting. Google Glass found its way into the public through the “Explorer” programme. The “Explorer” programme was a group of select people called “Explorers” who were to trial Google Glass in advance of its release (Hashimoto, Phitayakorn, & Castillo, 2015). It is unknown exactly how many Google Glasses went into medicine related activities.",
                'conclusion' => "Google Glass has limitations in terms of raw computing power. As is the norm with the wearable tech industry, Glass has slowly become outdated compared to some rival smart glasses, even though at the time of its release it had some good hardware. It seems Glass has lost its first-mover advantage through a combination of privacy and technical issues. With that being said, Google is rumoured to be working on an upgraded “Enterprise Edition” but exact dates for its release are unknown.",
                'methods' => "Scum, Kanban",
                'skills' => "WebRTC, Airtube, Libstreaming," ],

            ['id' => 2,
                'title' => "Website Development Optimization",
                'abstract' => "This research paper discussing the various useful tools and techniques that are used in a development of a website. We also discuss about the procedure follow in a website, mostly focused on a local host named Xampp tool .Next, we compare different development frameworks web application. In addition, we discuss life cycle model and framework development of web application. In this report, various review papers result also included for understanding of problems can be facing by the users. This Paper tells about the technologies used in this development, PHP and explained in result its functionality with Xampp with screenshots. It is hoped it will gives a useful framework for guiding the process.",
                'conclusion' => "We are trying to develop a website using Xampp tools for local web server. For website design, we will use the PHP and HTML language and for more interactive way we will use CSS Scripts. In Xampp, we will have a htdocs folder and store the folder where, we will have website code scripts and we can open these scripting languages in sublime text. So, at last we have a website that can open in local host in system and outlook can see in local web server. Developer can easily change into code according to the requirement after looking on the local host preview. Another point is security features also included, another system we cannot see it without htdocs folder and updation also not possible.",
                'methods' => "Analysis, Specification, Design and Development, Content Writing, Coding",
                'skills' => "css, html, php, XAMPP" ],

            ['id' => 3,
                'title' => "Research Agenda in Cloud Technologies",
                'abstract' => "Cloud computing is the latest effort in delivering computing resources as a service. It represents a shift away from computing as a product that is purchased, to computing as a service that is delivered to consumers over the internet from large-scale data centres – or “clouds”. Whilst cloud computing is gaining growing popularity in the IT industry, academia appeared to be lagging behind the rapid developments in this field. This paper is the first systematic review of peer-reviewed academic research published in this field, and aims to provide an overview of the swiftly developing advances in the technical foundations of cloud computing and their research efforts. Structured along the technical aspects on the cloud agenda, we discuss lessons from related technologies; advances in the introduction of protocols, interfaces, and standards; techniques for modelling and building clouds; and new use-cases arising through cloud computing.",
                'conclusion' => "This paper has presented the work published by the academic community advancing the technology of cloud computing. Much of the work has focussed on creating standards and allowing interoperability, and describes ways of designing and building clouds. We were surprised so far not to see significant contributions to the usage and scaling properties of Hadoop/MapReduce, which is a new programming paradigm in the cloud. Similarly, there was no work published yet on effective usage of PaaS offerings such as Google Apps. ",
                'methods' => "Questionnaire, literature review",
                'skills' => "SaaS, PaaS, IaaS" ],

            ['id' => 4,
                'title' => "Project Bizarre",
                'abstract' => "One of the things any new graduate student will have to encounter is to develop and write a research project. Tichapondwa, (2013) builds on this stating that most students do not understand what an end of year project means, nor do they understand its importance. Throughout this proposal, the processes needed in order to develop a responsive website to assist students will be examined in detail. Key areas that will be covered are, the methodologies the research project is going to adopt, a structure for how the project is going to be undertaken to identify the risks the project can encounter. By the conclusion of the proposal, the reader should have an in-depth view of how this project is going too developed and the need for the end project relative to the industry.",
                'conclusion' => "Throughout this proposal, all the research ideas for each objective has been explained along with the intent in which they will be used for. A plan has been structured to cover the length of the project with a detailed account of what each section will entail, this can be seen in the Gantt chart presented in the project plan. The risks have been clearly stated along with a plan of how to resolve these issues if they do arise, following on from this the resources needed in order to accomplish the end build have been outlined. Each methodology has been examined and explained into why they have been chosen and for what objective each methodology will be developed for.",
                'methods' => "Agile methods, Questionnaire,. cognitive walkthrough, desk research",
                'skills' => "css, html, javascript, php, laravel, github" ],
        ]);
    }
}
