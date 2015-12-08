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
  * Folder Apigen has all results of autodocumentation
  * Folder cgi-bin is used for pet search function
  * Folder assets and images include the website's templates and pictures
  * README includes project introduction, repo organization and How-to.
  * PetFinder_Part1,2,3,5,6 pdf files are written documents according to 3308 project parts requirements.
  * TestCasesofPetFinder.pdf file records the test cases results.
  * create_pet_finder.sql is mysql file for connect signed up user information with local database
  * The rest .html fils and .php files are the website main parts.
 
# How To Run the website on VM
 1. Clone this repository into your prefered directory.
  * `git clone http://github.com/bettylj/PetFinder.git`

 2. Installing Packages in order to run API calls and website.
  * **NPM:** `npm install cferdinandi/petfinderAPI4everybody`
  * [Node.js](http://nodejs.org) This file should be in the repository already. 'ignore this'
  * [Gulp](http://gulpjs.com) `sudo npm install -g gulp`
  * **Then**
	1. In bash/terminal/command line, `cd` into the project directory.
	2. Run `npm install` to install required files.
 3. After installing packages, you should be able to run the website.
  * in terminal, `cd` to the repo directory
  * start php localserver, `php -S localhost:8000`
  * in Your Browser url-address box, Chrome is recommended, "localhost:8000/main.php"
  * after this, you will be in our webpages.

# How to use SignUp function
 
 1. Install php5_mysql in order to connect user information with local database.
  * `$sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql`
  * If run into problems, try to update it with following command. 
  * `$sudo apt-get update `

 2. Go to file profile.php
  * @line57, replace the username with mysql username.
  * @line58, replace the password with your mysql password.

 3. In petfinder folder
  * Login to mysql, `$mysql -u root -p`
  * Use "create_pet_finder.sql”, `$source create_pet_finder.sql`

 4. Finish 3 steps how to run the website on VM

 5. Click on profile->signup, enter every blank and submit.
  * Should see the profile information then

 6. In petfinder folder
  * Login to mysql, `$mysql -u root -p`
  * Show databases, `$show databases;` 
  * Use pet_finder, `$use pet_finder;`
  * Show tables and select info, `$show tables;` then `$select * from user;`, should see the user info you submit.
