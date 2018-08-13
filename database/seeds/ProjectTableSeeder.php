<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            ['id' => 1, 'title' => "Ethics Management Software", 'brief' => "Experiments that involve human or animal participants require ethics checking and clearance. This is currently achieved using Word documents e-mailed to the various people in the ethics approval process. The goal of this project is to develop a web-based system that manages the whole process from creating the initial application, to checking it, and documenting any required changes."],
            ['id' => 2, 'title' => "Modern HTML + CSS Accessibility Framework", 'brief' => "Accessibility on the web is still in its infancy. There are a number of standards out there, but they are not widely used. The aim of this project is to develop a HTML+CSS framework that fully integrates all current accessibility standards. The framework must be able to be used by other developers to create accessible websites."],
            ['id' => 3, 'title' => "Navigation Position Optimisation", 'brief' => "When building web-sites using a responsive design approach, the navigation elements of the web-site have to be adapted significantly in order to work within the limited amount of space on small screens and at the same time a wide range of navigation options on larger screens. The aim of this project is to develop and test a wide range of responsive navigation designs and then conduct usability testing to determine the advantages and disadvantages of each solution."],
            ['id' => 4, 'title' => "Security issues in multi-tenant cloud based applications", 'brief' => "This project requires an in depth investigation of security threats and mechanisms in multitenant cloud based applications mainly focusing on SaaS. It involves developing a multi-tenant SaaS system architecture and a prototype application based on a patient self-reported data  gathering application as a case study which will help to develop an in depth understanding of potential vulnerability, threats and adequate security mechanisms for such systems. This project is suitable for a security student with some programming skills."],
            ['id' => 5, 'title' => "The Analysis of Social Networks ", 'brief' => "The analysis of social networks is an emerging area of research, which shows striking similarities with a variety of real-world systems, including the structure of an electrical grid, and the wiring of the neural system of a nematode worm. Several techniques have been developed to describe such real-world networks, which have applications to the study of transport, polymers, economics, particle physics, computer science, sociology, epidemiology, linguistics and more. This project would focus on the properties and applications of social networks."],
          ]);
    }
}
