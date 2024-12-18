# DentalCare - Dentist Appointment Management System
This is a web-based Dentist Appointment Management System designed to streamline the process of booking and managing dental appointments.
Built using PHP, HTML, CSS, JavaScript, and MySQL, the platform includes separate panels for users and dentists to ensure a smooth and efficient experience.
_________
## Features
### User Side
- *Book an Appointment*: Users can schedule an appointment by providing their details, including a phone number for reference.
- *Check Appointment Status*: Users can search for their appointments using the phone number they entered during booking.
- *Delete Appointmen*t: Allows users to cancel their appointments if needed.

### Dentist Side
- *Dentist Panel*: A dedicated panel for dentists to manage patient appointments.
- *Add Patient Data*: Dentists can add patient information, including treatment details.
- *Update Patient Data*: Modify patient records or appointment details.
- *Delete Patient Data*: Remove patient records when necessary.
__________
## Technologies Used
### Frontend
- *HTML5*: For structuring the web pages.
- *CSS3*: For styling and creating responsive layouts.
- *JavaScript*: For interactivity and client-side validation.

### Backend
- *PHP*: For server-side logic and handling requests.
- *MySQL*: For storing user and appointment data.
_________
## Installation
*1. Clone the Repository:*
```bash
git clone https://github.com/yourusername/DentalCare.git  
cd DentalCare 
```

*2. Set Up Database:*
- Import the provided database.sql file into your MySQL server to create the required tables.
- Update the database connection settings in the config.php file.

*3. Run the Application:*
- Place the project files in your local server directory (e.g., htdocs for XAMPP).
- Start your local server (e.g., XAMPP or WAMP).
- Access the application at http://localhost/DentalCare.

## Usage
*1. Users:*
- Navigate to the user section to book, check, or delete appointments.
- Use the phone number provided during booking to search for appointments.

*2. Dentists:*
- Log in to the dentist panel to view, add, update, or delete patient records and manage appointments.
