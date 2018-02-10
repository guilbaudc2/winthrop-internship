# Winthrop Team 4 (WILD) Internship Development project

Environment - This project will be developed using PHP/MySQL/Symfony

Update 2/10/18 -CG: Update to the steps after you pull from Github (Replacement for step 4 - after you pull the project's repo to your IDE):
4. **Connect Composer**: Once the repository's folders have been added to your file tree, you will (if you're familiar with Symfony, but you aren't so just assume I'm right) notice that there are some missing folders from Symfony missing. You don't need to create a new symfony project, but you will need to install the mising Symfony components. Do this by entering `cd winthrop-internship/WinthropInternship` in the terminal (this puts you in the Symfony project folder. Then enter `composer install`. At this point, it should install all the missing Symfony components and allow you to enter parameters specific to your machine (like the database configuration. If your database in XAMPP is called symfony, you can just accept all the default parameters by just pressing enter for each parameter - the ones listed in `[]`. Otherwise, if you called it something different, you'll have to make sure you provide that name when the parameter is reached. You can change this in the future by going directly to the paramaters.yml file directly and entering your information there - found in `\winthrop-internship\WinthropInternship\app\config\parameters.yml`

Update 2/8/18 -CG: Further details and explanations. I am not going to lie, I did a lot of stuff out of order, so I'm really hoping that this doesn't mess you all up. To got this all working for you you, you need to make sure that you have the following installed:
*XAMPP (latest version) - https://www.apachefriends.org/index.html
*PHPStorm
*git - https://gitforwindows.org/

1. **XAMPP Setup**: For this to work in the most effective manner, you probably want to go ahead and start both the Apache and MySQL service. In MySQL, go ahead and add the database the symfony will connect to. By default, Symfony uses the symfony database, but since I have 2 projects doing almost the same thing, I named my database wileDatabase (although caps didn't really matter).
    1. **[New 2/10/18] git Setup**: As long as you just follow the prompts you should be good to go. I would beware of what you use to edit commit messages. I accidentally chose Notepad++ when I reinstalled git so now when I make commits, it actually opens that up when I type `git commit` in the terminal instead of using the built in commit program that PHPStorm uses. If I use the options listed in PHPStorm then I'm good.
2. **New PHPStorm Project**: Create new project (to be on the safe side, just create a new **PHP Empty Project**). I named mine WinthropInternship
3. **[Not needed if you want to *test* out Symfony without Github configuration. Just go straight to step 5 and skip the `cd winthrop-internship` instructions (go straight to the composer part)] Configure GitHub**: (I didn't do this originally, so bare with me). To connect your GitHub account, go to **File**>**Settings**>**Version Control**>**GitHub** I changed the *Auth Type* to **password** and then typed my username (not sure if email works) for *login* and my GitHub password. You can always hit *test* to verify it worked. Once you hit *Apply* or *OK* your GitHub account should be connected with PHPStorm but it's not connect to the actual project you're working on. To do that go to **VCS**>**Checkout from Version Control**>**GitHub** Our project's repository URL should be at https://github.com/guilbaudc2/winthrop-internship.git Change the Parent directory to the \PhpstormProjects\YourProject'sName and I just kept the Directory name as the default text. Boom the folder should show up in the file tree.
4. **[Updated 2/10/18 Unneeded] ~~Create Your Branch and~~:
5. **[Not sure if this is needed since you'll be connecting your project to the winthrop-internship repository (which should have the Symfony project up)] Set up Symfony**: Open up the terminal (in the bottom left hand corner if it's not already open) and type `cd winthrop-internship` From there click on **Tools**>**Composer**>**Init Composer** Select *composer.phar* and check the *Download composer.phar from getcomposer.org* checkbox. Choose the XAMPP PHP intepreter (if it hasn't been installed/configured, then follow the instructions on https://confluence.jetbrains.com/display/PhpStorm/Installing+and+Configuring+XAMPP+with+PhpStorm+IDE starting at the*Integrating XAMPP with the IDE* Section [FYI - this site is out of date and Project Settings in the updated PHPStorm is just Settings]) and then click *OK* From there, open up the Terminal, found in the bottom left of the Window (if it doesn't default to an actual terminal window, just click the + sign) and install Symfony through the command line by typing `composer create–project symfony/framework-standard-edition project_name "3.4.*"`  in the terminal (found at www.symfony.com/doc/3.4/setup.html close to halfway down the page or so). My Symfony project is also called WinthropInternship. It'll probably take a while to install symfony so just sit tight until it's done.
6. **Exploring Symfony**: Once Symfony finally decides to install (it took a long time on my machine), type `cd your_symfony_project` in the terminal. I highly, highly recommend that you then type in your terminal `php bin/console` and just hit enter. You can then see all the commands you can run within this Symfony project. (Commands like checking the server, creating PHP Classes (called Entities in Symfony), etc). 
7. **[To Be Updated] Creating Entities and mapping with Doctrine**: *While this section is going to be updated, check Besmer's slides (the ones I uploaded) on how to work with Symfony. Remember `app/console` in Symfony2 is `bin/console` in the version we're using.*
8. **[New 2/10/18] Pull/Push to your Branch**: I already created your branches and they are listed by your name. Once you make changes, you will pretty much add and commit your files like normal. When I do those steps, I will typically back out of the current folder (let's assume you're in `\winthrop-internship\WinthropInternship\`) by typing `cd ../`. You should now be in `\winthrop-internship\`. To add the files, I type `git add WinthropInternship`. This adds the entire folder, but makes sure to make the updates only on what was changed. You can then either commit using the way you prefer. You can do so based on the terminal by typing `git commit` (which will open up that default git commit message program you chose in 1.1 - for me it's Notepad++) or `git commit -m "this is my commit message"`. You can then push your work to your branch by typing `git push origin your-name` (and please only do it for your name) or you can push to master (`git push origin master`), but those will not be reflected immediately. In the meantime, just keep working on your branch and once master has been updated, you'll have to pull from master to get the updates.


PHP Specifications: PHP5 (Possibly PHP7)
Symfony Specifications: Symfony 3.4.x (Long Term Support Version) - Requiries PHP 5.5.9 or higher

Instructions for setting up Symfony 3.4:
https://symfony.com/doc/3.4/setup.html

Instructions for the database and Doctrine (Used for assistance with Database mapp:
https://symfony.com/doc/3.4/doctrine.html
