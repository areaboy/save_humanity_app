# Save Humanity


An Interactive Web Applications that Connects People who needs help with various Emergency Agencies, Charity & NGO Organisations. 
 Powered by Cloud Database, Google Map, Google Chart Statictics, Email Services and SMS Gateway.


# How to Install the Application

1.) This application was written in PHP and thus ensure that something like PHP or xampp server is install (https://www.apachefriends.org/).
 Ensure that PHP is running from Xampp Control Panel.

2) Download the app from github. You are using Xampp Server for php. then extract the project app to directory "htdocs"  eg
**C:\xampp\htdocs\save_humanity_app**


3.) Edit **Settings.php** file to point to your site/app url where approriate etc.

4.) Login into Your TIDB Cloud Database Instance(https://tidbcloud.com/) to create a database name eg save_humanity_db.

Then also copy your Tidb Database Instance credentials.

4) Edit **data6rst.php**  file to update Your TIDB database Credentials Where appropriates.


5.) Start up the Xammp Server from control Panel and ensure that php is running by starting its Apache Sever.


6.) Call up the application at browser and it will be running at http://localhost/save_humanity_app/  
Click on **Install App Database Table First**. 

You can also run this installations by directly going to installation page Eg:  http://localhost/save_humanity_app/api/tidb_installation.php


Finally On the  Local Server, the  app will be running at  http://localhost/save_humanity_app/api/index.php  

and your done

7.) Optionally. If you want to test it online, copy the app folder and upload it to your server.


8.) Once the Application is running, the Admin needs to signup, login into the Account then goto "settings" to configure credentials for

A.) Google Map Javascript API Key.

B.) SMS API username & Password.( nigerianbulksms.com )  They have global coverage

c.)Email Server Credentials

Once done, Users can start sending their reports to your application and you can manage it from there.




