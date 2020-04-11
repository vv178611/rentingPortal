# rentingPortal
It is a renting portal built using PHP, MySQL and Apache Server. It can be used to find rental properties available in your location. All you need to do is search for your location in the search bar. It also has a feature for property owners. Property owners can register their properties on this portal which is then made available for customers to rent.

How to run this project locally?

Technical Specifications:
1. Apache 2.4.27 - PHP 5.6.31
2. MySQL 5.7.19

Setup: (All the steps are mandatory except 4th point)
1. Once the above listed softwares have been installed properly and are working fine, clone this repository and save it on your local machine.
2. Now, copy only the project folder from the downloaded repository and paste it to your localhost directory (where your Apache Server and PHP files run).
3. Following MySQL credentials are pre-configured for your use:
      server: localhost
      username: root
      password: "" (without quotes)
      new database created: rent_portal
4. The above credentials can be modified according to the developer. These details are present in the config.php file inside the project folder. If any changes are done in config.php, make sure database.php file present in project/dbqueries/create folder is also modified accordingly.
5. Once the above changes are done. You are good to go. Just open the index.php file present in project folder from your localhost.

Working: (Go for working section only once the setup is complete. Otherwise, the project might crash!)
1. After index.php runs successfully on the server, first add few rental properties by clicking on the "Register your Property" button present on the right corner of the navigation bar.
2. The form is configured only for few locations by default, i.e., Delhi-NCR, Gurgaon and Chandigarh.
3. Login/SignUp section is yet to be implemented. Hence, temporarily, a new field name Owner with pre-defined values has been added to the "Register your Property" form.
4. Once, few properties have been registered, you can see those properties once you search for your location in the search bar present at the homepage.
5. The properties can also be filtered based on property type, i.e., Flats, PG, or Villa, and, BHK type, i.e., 1 BHK, 2 BHK, and 3 BHK. These filter results apply on the location you searched for in the above step.
6. That's all the functionality implemented so far.
