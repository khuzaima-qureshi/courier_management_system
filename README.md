# courier_management_system

COURIER MANAGEMENT SYSTEM
REQUIRMENTS
System Modules:
Admin
•	Login
•	New courier
•	View all courier details
•	Send SMS – From to
•	Send delivery SMS
•	Update/ delete courier
•	Create agent
•	Manage agent
•	Manage customer details
•	Status count
•	Download report for shipment
Agent
•	Login
•	New courier
•	View all courier details• Send SMS From to
•	Send delivery SMS
•	Status of branch
•	Download report from branch
User
•	Register
•	Login
•	Track consignment number
•	View status
•	Print status


Module Description:
 Admin Login
•	Admin will have his/her own login details (username, password) to access the system

Create Bill – Admin, Agent
•	Admin can create a Courier Bill after logging in. Bills contain the details of sender, receiver, courier type, delivery date and Courier Company.

 Update bill– Admin, Agent
•	They can also update the Bill with the entries and if there is any modification. Agent can view the list of details of his location only.

Manage Customer details
•	Admin can manage all the Customer Details in a separate and secured Database
 Reporting
•	Reports of all the Bill can be viewed by the admin of the system
Logout
•	At last they can logout if they have done with their actions on the database.
 Admin &amp; Agent Dashboard
•	Status Counts
View total status count for shipment, in progress, delivered.
 Admin will view all location status counts.
 Agent can view only from or to location of his branch.
•	Add Shipment
•	New Courier
•	Manage Shipment
•	Print Shipment
 User can print tracking details
•	Download Report (XLSX)
•	Date Wise
•	City Wise
•	Admin Dashboard
•	Add Agent
•	Can view only “from or to” location
•	Create Agent city wise login
•	Manage Customer
•	Search

 User Login
•	Track Shipment
•	User can search using consignment tracking details
•	Shipment status
•	Print
User can print tracking details

Standards plan:
Every code block must have comments. 
The logic of the program needs to be explained. Proper documentation should be maintained. 
Complete Project Report along with synopsis, code and documentation should be prepared.







 

COURIER
MANAGEMENT
SYSTEM
















USER MANUAL
 

•	This is the home page of frontend website with slider when user open the website.
    How to use home page:
       Basically, home page is divided into two main parts:
1.	 Suitable logo
2.	 Tracking section
3.	  Contact session



Tracking Section:
Here user can track there parcel shipment status with the given reference code .Which was provided by the agent to the client at the of parcel booking


 
	
Tracking was shown like this:
 

![logo](https://github.com/khuzaima-qureshi/courier_management_system/assets/141323710/a31ca697-317f-4266-9553-e46885f2f97f)



DashBoard
Dashboard have 3 role base access “Admin” “Agent” and “User”
Here we define the access of admin user and agent.

Admin Pannel:
 








Admin have this main Access in dropdown:
 

 

In feedback page user send their feedback and submit as well .also give a radio button to give response in easy way. 
Agent Pannal:
 
Admin have this main Access in dropdown:
 

 

Agent View their profile
 



User Pannal:
User only track parcel. Image shown in above.

Courier Form
Here customer booking their courier
 






List of parcel 
 
When click on eye detail page view
 
Here update parcel status

 
Here we update status.






Report 
 
Report is fetch accourding to date wise

CODING:
Index page
 
 


 


Courier page
 
Track Page
 







Report Page
 
 
Delete page 
 

 
 
