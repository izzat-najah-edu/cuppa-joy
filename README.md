# Cuppa Joy

Cuppa Joy is a fictional coffee shop website, designed to showcase the range of services, products, and events on offer.
The site is crafted with a blend of technology, culture, and creativity, serving as a digital gateway to the coffee
shop's unique ambiance.

## Features

- **Responsive design:** The website is built to provide an optimal viewing experience, allowing easy reading and
  navigation across a wide range of devices, from desktop computers to mobile phones.

- **Multilingual Support:** The site supports both English and Arabic languages, catering to a diverse user base.

- **Coffee Menu:** The website features a dynamic coffee menu, sourced from a MySQL database, offering a detailed
  display of various coffee options, including their names, descriptions, prices, and images. The menu supports both
  English and Arabic language inputs.

- **Event Gallery:** This section displays a collection of events that have taken place at the coffee shop, presented in
  an attractive, easy-to-navigate gallery.

- **Contact Form:** The website includes a contact form for customers to easily get in touch with the coffee shop. This
  data is also saved in the MySQL database for future reference.

- **Subscriber Registration:** Visitors can sign up for a newsletter via a registration form, allowing them to receive
  regular updates from the coffee shop. The subscriber data is stored securely in the MySQL database.

## Technologies

The website is built using HTML, CSS, and JavaScript for the frontend, Bootstrap 5 for the responsive design, and PHP &
MySQL for the backend. AJAX has also been implemented for a better user experience.

## Setup

#### Prerequisites

- XAMPP (Apache, MySQL, PHP)

#### Installation

1. Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).
2. Clone or download the Cuppa Joy project from the repository.
3. Place the project folder in the `htdocs` folder of your XAMPP installation (e.g., `C:/xampp/htdocs/` on Windows).
4. Start the Apache and MySQL services using the XAMPP Control Panel.
5. Open your browser and go to `http://localhost/phpmyadmin`.
6. Import and execute the `CREATE.sql` file located in the `sql` folder to set up the necessary tables.
7. Import and execute the `INSERT.sql` file from the same location to fill the tables with data.

#### Security Fix

- After setting up the database, make sure to delete the `sql` file to prevent public access from users.

#### Usage

- Open your browser and go to `http://localhost/cuppa-joy`.
- Explore the website.

## Credits

- [@izzat5233](https://github.com/izzat5233)
- [@Sulaiman111](https://github.com/Sulaiman111)

The Cuppa Joy project combines technology and the timeless charm of a coffee shop, providing a compelling online
presence that reflects the coffee shop's commitment to quality, diversity, and exceptional customer experiences.
