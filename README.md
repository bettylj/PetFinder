# PetFinder
PetFinder is a project created and developed by a group of University of Colorado at Boulder students. The project is a contribution towards CSCI3308 course in Fall 2015 semester. 

Team Members
  1. Jia Li 
  2. Sophia Raji
  3. Theerarun Tubnonghee (Steve)
  4. Girishkumar Ramkumar

Project Title
 - PetFinder

Project Description 
 - PetFinder is a web application that matches pets from local animal shelters with people looking to own pets. We will be using HTML, CSS, and Javascript to create the website look and feel and user interactions, and SQL as our relational database to save user information and the pets they own. 

Vision Statement
 - Come and give your future companion a home!

Motivation
 - Adoption of pets from animal shelters is much better than buying pets from pet shop. To help provide people a way to find their future companion as well as giving pets in animal shelters a permanent home. Our aim is to act as an information bridge between animals and their potential owners.

Risks
 - All team members have no prior working experience with each other.
 - Have to coordinate meetings around our work,school and personal schedules.
   HTML,CSS and Javascript is new to one team member and one other is not quite as familiar with the use of all three in        conjunction.
 - Unfamiliar with the use of methodologies such as agile and sprint.

VCS (Version control software)
 - Name of the version control software repository on Github: PetFinder
 - Link to repository: https://github.com/bettylj/PetFinder

Methodology
 - Agile development with detailed tasks to-do-list and every other day meeting weekly. Also using Rapid iteration or Sprints, we want to get the project done in 3 weeks by committing to two sessions per week after class on Monday and Wednesdays.

Project Tracking software
 - Name of the software: Trello
 - Link to project tracking software: https://trello.com/b/wGhJnsFi/petfinder

# Repo Organization
 - 
 
# How To Run the website on VM
 1. Installing Packages in order to run API calls and website.
 - follow this.
  * **NPM:** 'npm install cferdinandi/petfinderAPI4everybody'
  * [Node.js](http://nodejs.org)
  * [Gulp](http://gulpjs.com) `sudo npm install -g gulp`
  * **Start**
	1. In bash/terminal/command line, `cd` into your project directory.
	2. Run `npm install` to install required files.
 

# How to use SignUp function

Download all the files in PetFinder folder. 
Make sure to install php5_mysql before run this function. Use the following command to install.

$sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql

If run into problems, try to update it with following command.

$sudo apt-get update 

Login to mysql in your local machine and use "create_pet_finder.sql" with following command.

$source create_pet_finder.sql

Use following commands to select database "pet_finder" and display tables in the database.

$show databases; //used for showing all databases

$use pet_finder; //used for select database

$show tables; //used for showing all tables under selected database

Under database "pet_finder", there should be two tables, user and pet.

In profile.php, at line 77, replace the username with your mysql username. At line 78, replace the password with your mysql password.

Use the following command on ubuntu to run a local server.

$php -S localhost:8000

When the server is running, type "localhost:8000/main.php" in the web browser. Click on profile->signup, you should be able to sign up an account.


