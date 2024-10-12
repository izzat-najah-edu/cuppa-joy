# Cuppa Joy

Cuppa Joy is a coffee shop website, designed to showcase the range of services, products, and events for this coffee
shop. The site is developed primarily **for Educational Purposes**, demonstrating how to build a completely functional
website from scratch using basic web technologies like php and plain html, css, javascript.

## Table of Contents

- [Demo](#demo)
- [Features Overview](#features-overview)
    - [Functionality](#functionality)
    - [Design](#design)
    - [Accessibility](#accessibility)
    - [Database Management](#database-management)
- [Technologies](#technologies)
- [Setup](#setup)
- [Credits](#credits)

## Demo

### Hero

![Hero Section](https://github.com/izzat5233/cuppa-joy/assets/92182269/6916b85d-54b2-4831-b87b-d70b6b145070)

### Menu

![Shop's Menu](https://github.com/izzat5233/cuppa-joy/assets/92182269/a37f487a-c897-4f1c-8f0c-eba1e85f4e1a)

### Gallery

![Shop's Gallery](https://github.com/izzat5233/cuppa-joy/assets/92182269/985124d0-a457-4812-ba09-ed4ef32ee037)

### Checkout

![Checkout Page](https://github.com/izzat5233/cuppa-joy/assets/92182269/a9ccb463-663a-424e-b092-cb5cb59df26a)

## Features Overview

Here is a breakdown of the main features of Cuppa Joy website

### Functionality:

- **Coffee Menu:** A dynamic menu displaying a variety of coffee options, sourced from a MySQL database. It includes
  details such as names, descriptions, prices, and images, and supports inputs in both English and Arabic.

- **Order Placement:** The website facilitates the process of placing orders for pickup or delivery, creating a seamless
  user experience.

- **Store Locator:** To locate the store location.

- **Event Gallery:** To showcase store events.

- **About Section:** To display relevant information about the coffee shop.

### Design:

- **Multilingual Support:** The website is fully accessible in both English and Arabic, broadening its reach to a
  diverse user base.

- **Theme Options:** Support of light & dark themes, enhancing user experience.

- **Responsive Design:** The layout is optimized for easy reading and navigation across various devices, from desktops
  to mobile phones.

### Accessibility:

- **Contact Form:** A convenient form for customers to send messages, improving direct communication with the coffee
  shop.

- **Subscription Form:** Customers can subscribe to receive regular updates and newsletters, fostering customer
  engagement.

- **Social Media Links:** Easy access to the coffee shop's social media platforms for enhanced customer interaction and
  updates.

### Database Management:

- **Product Database:** An organized MySQL database containing all product details.

- **User Messaging:** The system is designed to receive and store users' messages effectively.

- **Subscription Management:** The MySQL database securely stores and manages all user subscriptions.

## Technologies

This PHP project is built from scratch (for educational purposes), no libraries are used.
The website is live right now on `https://cuppajoy.azurewebsites.net`. hosted by Azure services.

- **HTML, CSS, Javascript**
- **PHP & MySQL**
- **Bootstrap**
- **AJAX**
- **Azure Services:**
    - *Azure App Service* used to host the website.
    - *Azure Database for MySQL* to manage the database.

## Setup

To test the website on your local device, please follow this setup:

### Prerequisites

- XAMPP (Apache, MySQL, PHP)

### Installation

1. Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).
2. Clone or download the Cuppa Joy project from the repository.
3. Place the project folder in the `htdocs` folder of your XAMPP installation (e.g., `C:/xampp/htdocs/` on Windows).
4. Start the Apache and MySQL services using the XAMPP Control Panel.
5. Open your browser and go to `http://localhost/phpmyadmin`.
6. Import and execute the `CREATE.sql` file located in the `sql` folder to set up the necessary tables.
7. Import and execute the `INSERT.sql` file from the same location to fill the tables with data.

### Security Fix

- After setting up the database, make sure to delete the `sql` file to prevent public access from users.

### Usage

- Open your browser and go to `http://localhost/cuppa-joy`.
- Explore the website.

## Credits

- [@izzat5233](https://github.com/izzat5233)
- [@Sulaiman111](https://github.com/Sulaiman111)

The Cuppa Joy project combines technology and the timeless charm of a coffee shop, providing a compelling online
presence that reflects the coffee shop's commitment to quality, diversity, and exceptional customer experiences.
