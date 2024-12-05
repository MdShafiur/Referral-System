**How it works**
Upon accessing the website, user is able to either add a new user, record a referral, or view referral data. 

1. Adding a New User:
- User registers to the system through a form
- Upon submission, a new user is created successfully with an ID

2. Record a Referral
- User is required to input a referred ID and a referrer ID.
- Upon submission the system records the referral in the database, calculates and updates the referrer's bonus balance by adding RM 25 per referral.

3. Viewing Referral Data
- User can input any ID to view the total number of referrals for that user and their total bonus balance if the ID exists.

**How to run the project**
- Clone the repository with git clone
- Create an empty database in phpMyAdmin
- Edit the .env file in the project with proper database credentials
- Open terminal or command prompt and navigate to the project folder
- Run **composer install**
- Run **php artisan key:generate**
- Run **php artisan migrate**
- Run **php artisan serve**

That's it: launch the main URL.
