Hanly Physiotherapy

By Martin Farragher
G00301117


Introduction to the project

I originally came up with this project idea at the start of the year when I was still pondering with different ideas for the project. I was at my physiotherapist and it hit me the idea to do it on this physiotherapist. I asked him different questions about what types of information he would like on the website. He said that the main items the website should have is a home page that tells the user about the physiotherapy and the different goals of the physiotherapy. A services page that outlines all the services the physiotherapy offers, a register page that allows the user to register his/her information so that the physio can tell the customer about his/her injury or articles that may interest them, relate to them or  help them overcome their injury. A contact page that allows the customer to get in touch with the physiotherapy by different methods of communication such as phone, email, twitter, Facebook. This is important if the customer is uncomfortable about making appointment online taking into factors (age, bad past experiences etc.) The website should have an appointment page so that the customer can make an appointment online while on the website which may be very convenient to them. I took all of his specifications into account and also decided that the website should also have an admin page for the physiotherapist or the person who is over customer’s information the user puts on the site so that they can see the information they put on it in an easy accessible.

Goals for the project

The different goals I had when starting out the project are:
⦁	Create a user friendly, easy usable, well designed website that is designed like other websites so it is easily understood and not complicated.
⦁	Create a register form that has validation so that bad information isn't given to the physiotherapist.
⦁	Create a registration form that stores information about user in a database in an organised fashion.
⦁	Create a login system so that the user has to login to make an appointment - this stops the physiotherapist/administrator from having to deal with poorly submitted information and only allows people who are serious about getting physiotherapy to submit information.
⦁	Make an appointment form so that the user can submit information about their injury as well as a day and time that suits them and see if the physio can fit around that time schedule. 
⦁	Appointment form should also store that information in an organised way in the database.
⦁	Make an administrator page so that the physio can access the information in the database on a page on the internet. I done this because the physio wouldn't have a great knowledge of accessing the database and this would be a lot easier for him to get the information about the customer. 
⦁	Have to make the administrator page secure because you don't want other peoples information being outputted on a page somewhere on the internet for anyone to see. Add a login system so that after the physio/administrator can login and then see the information.
⦁	Have information on the site so that the user can contact the physio by different methods other than making appointment online e.g.(mobile, email)
⦁	Create links to social networking sites so the user can find out more about the physiotherapist or write a good review on their page e.g.(twitter, Facebook)
⦁	Have information about the location of the physiotherapists physiotherapy.
⦁	Information about the different types of services the physio offers so that the customer can decide if the physio actually does that service before contacting.


Similar Work

I looked at a few websites on the internet such as:

www.thephysiocompany.com
www.pearsestreetphysio.com
www.sandymountphysiotherapy.com
www.kerinphysio.ie

From these websites I learned mainly what the forms should look like (register, appointment). In www.thephysiocompany.com I gathered some information about the appointment form. I realised that I didn't need to add in preferred clinic because the physiotherapy that I done the website on only has one office for performing the service. What I learned from this form is that it is very easy for anyone to make an appointment. I booked an appointment on the site with very little relevant information and it still booked the appointment. With my site I made it harder for people who are uninterested in actually making an appointment by adding register and login forms. This I feel will stop less valuable information from going to the physio/administrator. 
What I took away from the appointment form on this site are the preferred day and preferred time dropdown lists. I had originally had date, month, year dropdown lists on the appointment but realised this didn't make sense as someone could pick a date that has already past. By using preferred day and preferred time it lets the physio/administrator know what works well for the user and work around that if possible. It could possibly satisfy the user in the long run which is important. Instead of Additional Info I decided to change that to injury. I done this so that the physio/administrator can get more specific information about the injury. From this site I also got a better understanding about how I should create the services page. I decided to create link commands that point to other sections of the page instead of creating other pages for the information about services. I feel this is faster than waiting for pages to reload. 
What I gathered from the www.pearsestreetphysio.com was the links to social networks such as Facebook and twitter at the bottom of every page. I also added this feature to my website which I think is beneficial to get people to like, share comment about the physiotherapy and get more people to know about it. This in turn could lead to more customers for the physio which is the most important reason for the website.
From the www.sandymountphysiotherapy.com website, I got a general idea about what the login form should look like. From trying out the login on the site it doesn't seem to output an error message if you haven’t logged in correctly, it just goes to the prescription page which I think isn't helpful for a user logging in if they have inputted data that is wrong by accident. In my website I have outputted an error message if the user that is registered is trying to login to let the user know what is happening. What I also noticed about this site is that it has a button on the side of the navigation bar that just outputs information about the treatment of certain conditions to a blank white page which is poor by the website developers. The website seems to be flawed but I did pick up bits of information on how to avoid these flaws and design of login system.
I looked at www.kerinphysio.ie because it seems to be a physiotherapy very similar to the physio I based my project on. This physio seems to have 3 employees, Hanly physiotherapy has 2. In the contact page I used fields such as email, name, and mobile for my own register form.


Technologies Used

The technologies I used for the project are HTML/CSS, PHP, MYSQL and AJAX. I decided to do my website on these languages because I wanted to try something different to what I have done before. For another one of my subjects Server Side RAD we had to do a group project that also involved creating a website. We done this in visual studio and ASP.NET so I didn't want to do a project on the same items. I wanted to learn something new. Plus languages such as PHP is used by huge websites such as Facebook, YouTube, yahoo and Wikipedia. This made me very eager to learn more about it. 

PHP is a server-side scripting language. It is engineered for web development but also can be used as a general-purpose programming language. I used PHP in my project for the registration, login, appointment, and outputting data to the admin page from the database. 

In the registration process, there are 5 input variables in order to satisfy the minimum requirements of the registration form. One of which is a password that you need to enter twice. In this process the passwords must match in order to progress and successfully register. At this point, the information in the fields is inserted in a row in the database users. There are similar restrictions/minimum requirements for entering in all fields. If you do not enter a value into all fields when registering it will produce a notice informing the user that all fields are required. 

In the login process, you must enter you’re previously registered email and password in order to login. If you enter and incorrect email/password you will automatically be denied otherwise your SESSION/login will have begun. 

Make appointment is essentially the same in terms of registration as in they are both forms but they enter into different database tables from the same database (a_database). 

In terms of outputting data I am essentially getting PHP to get and display the desired information about the registrar information and their desired appointment. 

HTML Through the HTML code I am implementing CSS and google fonts. I use it to add logos, text, menus, forms, images and links to social networks so the users on the site can access more information about the physiotherapy. 

CSS The CSS in this project is divided into three different areas. The first one I will talk about is css/normalize. Its function is to make the website have all the same attributes across all browser platforms. As some of the default settings differ from platform to platform. The second one is css/main. This is the general outline for the styling of the website. This file styles in relation to fonts, sizes, margin, allows for clear layout of the navigation bar and styling of the footer. This is important so it makes the website look similar to other websites, thus making the site simple to use for the user. The third CSS file is css/responsive. This file allows for suitable resizing of the website on all devices smaller than a desktop. The website will be displayed differently on a tablet sized device and on a mobile phone. This resizing process is paramount to success in an ever more mobile world. 

MYSQL This is used to store the information from the website in an organised manner. It allows the data to be very usable to the website administrator. The reason I chose this as my database is that it is easy to use and there is a lot of information online about mysql that are helpful. I also wanted to use mysql as the database as I studied mysql in college and wanted to implement some of the ideas that I had learned. 

AJAX This is used on the website on the register form. When a user wants to input information in the email field it says enter email. As the user enters his information it tells the user whether the information is valid or not. The input talks to the server back and forth every second or so. Main reason for this is that it doesn’t make the whole page reload, it just makes that specific part reload. 

Goals Achieved

⦁	I created a user friendly, easy usable, well designed website that is designed like other websites so it is easily understood and not complicated.
⦁	I created a register form that has validation so that bad information isn't given to the physiotherapist. The email validation must have an @ and . symbol and it also checks if the email is in the database already. The password validation checks to see that the passwords are longer than 5 characters and the password is the same as password again. The name validation makes sure that the name is longer than 2 characters. The mobile validation makes sure that the number must be between 7-11 characters. 
⦁	I added AJAX to the register form for the mobile so it lets the user know what is required for the mobile field. It will tell you to enter mobile number when you enter the register page. If you put a letter in the input it will tell you that you must use numbers. If you enter number it won't output anything.
⦁	I added a registration form that stores information about user in a database in an organised fashion.
⦁	I created a login system so that the user has to login to make an appointment - this stops the physiotherapist/administrator from having to deal with poorly submitted information and only allows people who are serious about getting physiotherapy to submit information. This also outputs an error message to let user know if he/she has entered the wrong information for the login, unlike a website I looked at. When it is logged in it displays the appointment form on the same page. 
⦁	I made an appointment form so that the user can submit information about their injury as well as a day and time that suits them and see if the physio can fit around that time schedule. 
⦁	Appointment form should stores information in an organised way in the database. I created a foreign key in the appoint table in the database that linked to other table successfully but I couldn't get the foreign key to work in the PHP code.
⦁	made an administrator page so that the physio can access the information in the database on a page on the internet. I done this because the physio wouldn't have a great knowledge of accessing the database and this would be a lot easier for him to get the information about the customer. 
⦁	I have information on the site so that the user can contact the physio by different methods other than making appointment online e.g.(mobile, email)
⦁	I created links to social networking sites so the user can find out more about the physiotherapist or write a good review on their page e.g.(twitter, Facebook)
⦁	I have information about the location of the physiotherapists physiotherapy.
⦁	I have information about the different types of services the physio offers so that the customer can decide if the physio actually does that service before contacting.

 

This is a table in the database a_database that is called users. It stores the data inputted in the register form and outputs data to admin page.

     
This is a table in the database a_database that is called appoint. It stores the data inputted in the appointment form and outputs data to admin page.

 
This is the admin page that gets the information from the database and displays it on a page. This links users and appoint tables together on the page. 
 
This is the Services page that has links to other sections on the page so it is quick to access you’re chosen service. As well as all the other pages, this has twitter and Facebook links at the bottom of the page that go to the social networking sites. 
 
This is the Registration page. It takes in the information the user inputs and stores it in the user’s tables in the database. All the fields on the form have validation and it also displays AJAX for the email field. When you register it goes to a successful register page, if not it will tell you why you haven’t registered and what to change.
 
If you have registered you can type in the email and the password you chose to register with. If you do not login properly it will output a message saying you have entered username/password incorrect. 
 
If you log in successfully this page will be displayed saying you have logged in and to make an appointment. This form has dropdown lists and a comment box that links with the database table appoint. This table worked until I tried to add the foreign key in the table appoint. I did not find out why this occurred in time for project submission date. 

Conclusions and recommendations

I am happy that I decided to do this project in the end because it made me experience PHP a different, well used language globally which I wish to pursue learning in the future. While I am a student I am glad to get a grasp of this language. I found it difficult at times to get relevant information about the project I am doing from people because as we did not do PHP, AJAX as a subject in school I could not find another student in the course who had a good knowledge of the subject. It made me have to research a lot more and I feel it has greatly improved my research skills. One problem that I struggled with was the foreign key linking the tables. I was able to create a working foreign key in the database that linked to the other table (appoint, users) and I was able to link them when the admin page got the information from the database but I was unable to link the foreign key (user_link) in the PHP code for appointment page which in return was unable to make appointment when trying to make an appointment. The appointment form works other than the foreign key interfering with it in the database. I will continue to pursue how to fix this problem as it is important to know in the future. If I was to guess it seems like a small bit of information in the insert statement in the make appoint page that is causing the error. I feel that I have learned a lot about mysql query’s and how it stores its information. While the project was very worthwhile learning how to create login, registration form, appointment form and admin page outputting data from database, for this particular project for a physiotherapist, the processes used are somewhat over the top technically as a contact form would be better suited for the website. The contact form would simply send an email to the physiotherapist with the customer information. However, you could use the functions of the database to store information such as items being sold by the physio such as medicine balls, foam rollers etc. I think this would be more useful for using the database system. 

This has been the first proper website that I have completed with such languages and I have enjoyed exploring different concepts and implementing them. I feel after doing this project that I will explore the idea of web development as a job/hobby in the future. I have accomplished most of the goals that I set out for the project and am happy that I chose to learn something new for this project which I think will benefit me hugely in the future. 



