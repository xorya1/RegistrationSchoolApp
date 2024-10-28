# School Registration and Receipt Printing App

## Overview
This PHP-based web application allows school administrators to register students and generate receipts quickly. The application provides a user-friendly interface for filling in student details and printing receipts, which is particularly useful for school fee management.

## Features
- **Receipt Creation**: Easily generate receipts by filling in form details like student name, class, and payment month.
- **Flexible Payment Options**: Select from multiple payment modes such as cash, check, or card.
- **School Year Selection**: Drop-down menu for selecting the relevant academic year.
- **Clean, Responsive Design**: Built with Bootstrap for responsive layout, supporting various devices.
- **Multi-page Layout**: Contains separate pages for "Home," "About," and receipt creation.

## Tech Stack
- **PHP**: Backend scripting to process form inputs and generate receipts.
- **HTML & CSS**: Front-end structure and design, with custom styling in `PdfStyles.css` and `style.css`.
- **FPDF**: PDF generation library (likely used in `fpdf.php`) to create downloadable and printable receipts.
- **Bootstrap**: Provides styling and responsive layout.

## Prerequisites
1. **XAMPP**: Install XAMPP for running PHP and MySQL locally. Download it from [here](https://www.apachefriends.org/index.html).
2. **Browser**: Use any modern browser like Chrome or Firefox for optimal compatibility.

## Setup and Installation
1. **Clone or Download**: Copy the project files to your local XAMPP directory (usually `C:\xampp\htdocs` on Windows).
2. **Start XAMPP**:
   - Open XAMPP Control Panel.
   - Start the Apache server.
3. **Access the Application**:
   - Open a browser and go to `http://localhost/your-project-folder`.

## Usage Instructions
1. **Home Page**: Navigate to `Home.html` for the main page with basic options and navigation links.
2. **About Page**: Visit `About.html` for information about the app.
3. **Create Receipt**:
   - Go to `PDF.php`.
   - Fill out the form with details like receipt number, student name, class, payment month, and amount.
   - Choose the academic year and payment method.
   - Click **Imprimer** to generate a PDF receipt.

## File Structure
- **PDF.php**: Main page for creating and filling out receipt details.
- **pdfmaker.php**: Processes form submissions from `PDF.php` and generates the PDF using FPDF.
- **fpdf.php**: The FPDF library file used to create and format PDFs.
- **style.css**: Main stylesheet for general layout and styling.
- **PdfStyles.css**: Additional styling specific to the receipt creation page.
- **img/**: Directory containing images used in the app, such as logos and backgrounds.
- **vendor/**: Folder for any third-party libraries or dependencies.
- **Home.html, About.html, try.html**: Additional HTML pages for navigation and content.

## How to Generate a PDF Receipt
1. Navigate to the `PDF.php` page.
2. Enter the student details in the form.
3. Submit the form to trigger `pdfmaker.php`, which processes the data and uses `fpdf.php` to create a downloadable PDF.

## Future Enhancements
- **Form Validation**: Add JavaScript validation for a smoother user experience.
- **Database Storage**: Implement a MySQL database to store student and receipt records for tracking history.
- **PDF Customization**: Allow administrators to customize the receipt format and add a school logo if needed.
