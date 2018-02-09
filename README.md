# Winthrop Team 4 (WILD) Internship Development project

Environment - This project will be developed using PHP/MySQL/Symfony

Update 2/8/18 -CG: Further details and explanations. I am not going to lie, I did a lot of stuff out of order, so I'm really hoping that this doesn't mess you all up. To got this all working for you you, you need to make sure that you have the following installed:

-XAMPP (latest version)

-PHPStorm

1. **XAMPP Setup**: For this to work in the most effective manner, you probably want to go ahead and start both the Apache and MySQL service. In MySQL, go ahead and add the database the symfony will connect to. By default, Symfony uses the symfony database, but since I have 2 projects doing almost the same thing, I named my database wileDatabase (although caps didn't really matter).
2. **New PHPStorm Project**: Create new project (to be on the safe side, just create a new **PHP Empty Project**). I named mine WinthropInternship
3. **[If you want to test out Symfony without Github configuration, just go straight to step 5 and skip the `cd winthrop-internship` instructions (go straight to composer) ]Configure GitHub**: (I didn't do this originally, so bare with me). To connect your GitHub account, got to **File**>**Settings**>**Version Control**>**GitHub** I changed the *Auth Type* to **password** and then typed my username (not sure if email works) for *login* and my GitHub password. You can always hit *test* to verify it worked. Once you hit *Apply* or *OK* your account should be connected with GitHub, but it's not connect to the project. To do that go to **VCS**>**Checkout from Version Control**>**GitHub** Our project's repository URL should be at https://github.com/guilbaudc2/winthrop-internship.git Change the Parent directory to the \..\PhpstormProjects\YourProject'sName and I just kept the Directory name as the default text. Boom the folder should show up in the file tree.
4. **[To Be Updated] Create Your Branch and Pull/Push to it** 
5. **[Not sure if this is needed since you'll be connecting your project to the winthrop-internship repository (which should have the Symfony project up)] Set up Symfony**: Open up the terminal (in the bottom left hand corner if it's not already open) and type `cd winthrop-internship` From there click on **Tools**>**Composer**>**Init Composer** Select *composer.phar* and check the *Download composer.phar from getcomposer.org* checkbox. Choose the XAMPP PHP intepreter (if it hasn't been installed/configured, then follow the instructions on https://confluence.jetbrains.com/display/PhpStorm/Installing+and+Configuring+XAMPP+with+PhpStorm+IDE starting at the*Integrating XAMPP with the IDE* Section [FYI - this site is out of date and Project Settings in the updated PHPStorm is just Settings]) and then click *OK* From there, open up the Terminal, found in the bottom left of the Window (if it doesn't default to an actual terminal window, just click the + sign) and install Symfony through the command line by typing `composer create–project symfony/framework-standard-edition project_name "3.4.*"`  in the terminal (found at www.symfony.com/doc/3.4/setup.html close to halfway down the page or so). My Symfony project is also called WinthropInternship. It'll probably take a while to install symfony so just sit tight until it's done.
6. **Exploring Symfony**: Once Symfony finally decides to install (it took a long time on my machine), type `cd your_symfony_project` in the terminal. I highly, highly recommend that you type in your terminal `php bin/console` and just hit enter. You can then all the commands you can run. (Commands like checking the server, creating PHP Classes (called Entities in Symfony), etc). 
7. **[To Be Updated] Creating Entities and mapping with Doctrine**: *While this section is going to be updated, check Besmer's slides (the ones I uploaded) on how to work with Symfony. Remember `app/console` in Symfony2 is `bin/console` in the version we're using.*


PHP Specifications: PHP5 (Possibly PHP7)
Symfony Specifications: Symfony 3.4.x (Long Term Support Version) - Requiries PHP 5.5.9 or higher

Instructions for setting up Symfony 3.4:
https://symfony.com/doc/3.4/setup.html

Instructions for the database and Doctrine (Used for assistance with Database mapp:
https://symfony.com/doc/3.4/doctrine.html
