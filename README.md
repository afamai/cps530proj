###This is the new setup we gonna use for the project.

Who is working on what:  
Deborah - pages/home.php  
Alpha - pages/install.php  
Alpha/Jason -pages/tutorial.php  
Alpha/Jason -pages/examples.php  
Melanie - pages/conclusion.php  
Bhoomi - css/style.css (feed free to change the css file and replace it with something else, just make sure to edit the include/header.php file)  
Anyone - pages/credits.php  
(see http://cps530.scs.ryerson.ca/project/cps530_prj_f16.html for the requirements of each page)

###HOW TO SETUP THE WEBPAGES ON YOUR RYERSON ACCOUNT.

First how to set it up on Ryerson servers. Since I am using PHP its best if you use the webdev folder instead of public_html folder.  
So if you don't know what's the webdev folder or how to use it. It is essentially a web developing folder for us that contains a lot more installations than public_html.

To make a webdev folder simply create a folder call webdev on the same level as public_html. Simple right?  

Now to setup the project in ur Ryerson account to start working on it I am going to break this up into 2 parts.  
One if you are using Putty or some sort of ssh to access your Ryerson account and one for FileZilla or FTP access.  

####For SSH or Putty:  
1. open up the webdev folder  
2. type 'git clone https://github.com/afamai/cps530proj' without the quotes (I am pretty sure everyone have git install on their accounts)  
3. now there should be a cps530proj folder. Type this into ur browser 'webdev.scs.ryerson.ca/~userid/cps530proj/pages/home.php' (userid shold be your comp sci id)  
4. Now you can see the webpages  

####For FTP:  
1. clone the project to anywhere you want on your computer.  
2. open up FileZilla or any kind of FTP program and connect to the Ryerson server.  
3. open up the webdev folder.  
4. create a folder for the project (eg. laravel, cps530proj, project, etc)   
4. copy all the files in your cloned project folder to the Ryerson webdev folder  
5. Now you should see the webpages for our project.  


From here on out you can start working on your parts. You can use whatever method that suits you. For example you can work on all the files on your computer and copy everything to your webdev folder to check.  
Or you can do everything on the server or something watev suits you. The most efficient way I found was to just use FileZilla and dragged the folder over to your Ryerson account and check like that.  

###Anyways here is a list of git commands you most likely to use:  
git add [files] --to add the files to your local git  
git commit -m 'message' --to commit it to your local git and create a message for it (what have you done or changes you made)  
git push origin master --to push your work to the master git so anyone pulling can see the changes you made  
git remote add origin [link] --to set origin as the link to the github, [link] should be https://github.com/afamai/cps530proj  
git remote -v --to check the current links  

###IMPORTANT NOTE: you do not have to clone everytime to see the updates.  
simply open up the git folder, which is the 'cps530proj' folder, and type 'git pull origin'  
