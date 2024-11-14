# 📀 Murthy's CD Shop 

Murthy's CD Shop Management Software is a tool for managing the inventory and sales of a CD shop, similar to a super bazaar system. This software helps store owners efficiently track CD purchases, search for movie titles, and add new inventory in bulk using CSV or Excel files. Additionally, it generates profit and loss reports for better financial oversight.
![image](https://github.com/user-attachments/assets/3d48b528-093d-443d-9144-69bea7f8bfe9)
## The login page
The defult credentials are : 
- username: admincan
- password: p123

The credentials can be changed as required 
![image](https://github.com/user-attachments/assets/2d1f5a2e-9e74-4fff-952b-10ec210a2d6f)
## The main menu
![image](https://github.com/user-attachments/assets/37305c2d-42a6-44ba-9fb9-90d3d5a511a5)

## 📑 Table of Contents
- [📋 Project Overview](#-project-overview)
- [✨ Features](#-features)
- [💻 Technologies Used](#-technologies-used)
- [⚙️ Setup and Installation](#️-setup-and-installation)
- [🚀 Usage](#-usage)
- [🤝 Contributing](#-contributing)
- [📜 License](#-license)

---

## 📋 Project Overview
Murthy's CD Shop Management Software is designed to simplify the tasks of recording sales, managing inventory, and analyzing profits and losses for a CD shop. Built with PHP, HTML, CSS, and JavaScript, this software allows shop owners to focus on store operations by automating inventory and sales management.

## ✨ Features
- **📝 Sales Recording**: Tracks each CD sale with customer and sales details.
- **🔍 Search Functionality**: Allows the owner to search for movie titles easily.
- **📦 Inventory Management**:
  - **Add New CDs**: Add new movie titles to the inventory individually or in bulk.
  - **📄 Bulk Insertion**: Upload CDs in bulk using CSV or Excel files.
- **📜 Sales History**: View all past transactions for record-keeping or review purposes.
- **📈 Profit and Loss Report**: Generate reports to analyze profits and losses over a specified period.

## 💻 Technologies Used
This project is built with the following technologies:
- **PHP** - Server-side scripting for backend operations.
- **HTML** - Structure of the web pages.
- **CSS** - Styling and layout for the interface.
- **JavaScript** - Interactivity and frontend functionalities.
- **MySQL** - Database management for storing CD, sales, and inventory data.
- **phpMyAdmin** - Web-based tool to manage MySQL databases, available through XAMPP.

## ⚙️ Setup and Installation
To set up and run the software locally, follow these steps:

1. **Install XAMPP**
   - Download and install [XAMPP](https://www.apachefriends.org/index.html) to set up a local server with Apache, PHP, and MySQL.

2. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/murthys-cd-shop.git


3. **Move the Project to XAMPP's Root Directory**

Move the murthys-cd-shop folder to the htdocs directory in your XAMPP installation (typically C:\xampp\htdocs\ on Windows).

4. **Set Up the Database in phpMyAdmin**

Open XAMPP Control Panel and start Apache and MySQL.
Open phpMyAdmin by navigating to http://localhost/phpmyadmin in your browser.
Create a new database named, for example, murthys_cd_shop.
Import the SQL file (murthys_cd_shop.sql) located in the project folder into the newly created database to set up tables and initial data

5. **Start the Application**

Open a browser and go to http://localhost/murthys-cd-shop to access the application.
## 🚀 Usage
**After installation, you can use the following features:**

- 🆕 Add CDs: Navigate to the Inventory section to add new CD titles.
- 📤 Bulk Import: Use the import option in the Inventory section to add multiple CDs via CSV or Excel.
- 💵 Record Sales: Log sales transactions and view them in the Sales History.
- 🔍 Search for CDs: Use the search bar to find specific movie titles.
- 📊 Profit and Loss: Generate a report to track financial performance.

## 🤝 Contributing
Contributions are welcome! If you'd like to contribute to Murthy's CD Shop Management Software, please follow these steps:

- Fork the repository.
- Create a new branch.
- Make your changes.
- Submit a pull request.
