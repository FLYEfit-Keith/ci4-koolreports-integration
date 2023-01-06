# [CodeIgniter4](https://codeigniter.com/) / [KoolReports](https://www.koolreport.com/) integration
This repo shows how to integrate Kool Reports with CodeIgniter 4 using Composer.

# License
This may be freely used by anyone for any purpose, once you abide by the respecitve licenses of CodeIgniter and KoolReports

# Installation
* Clone the repo
* If you are using KoolReports Pro, you need to follow their instructions to create an auth.json from your licensing page.
* If you are using KoolReports Free, just amend the composer.json accordingly.
* Run ```composer update```
* Configure your CodeIgniter .env file accordingly with database parameters etc

# Reports
* To keep things clean, I created a ```Reports``` folder inside the CodeIgniter apps folder. This is where I put all of my reports.
* There is one view that displayes the reports; ```/Views/reports/showReport.php```
* Look at the ```Home``` Controller to see how to call the reports.
* The KoolReports ```Friendship.php``` integration has to be modified. Please copy this file from root to ```/vendor/koolreport/codeigniter/Friendship.php```, overwriting the original. This is the imporant change that allows KoolReports to interrogate CodeIgniter databases.

Have fun.


