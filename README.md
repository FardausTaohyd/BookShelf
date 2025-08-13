<img width="1910" height="853" alt="Screenshot 2025-08-13 124203" src="https://github.com/user-attachments/assets/5f84ea32-1ad7-49f9-9503-a3a5cd6cec3e" /># BookShelf 📚

A simple PHP & MySQL web app to manage your book collection.  
Add, view, edit, and delete books with a clean interface.

---

## Features

- **Add Books:** Title, Author, Genre, Price
- **View Books:** Table listing all books
- **Edit/Delete:** Update or remove books easily
- **Modern UI:** Responsive, clean design with CSS

---

## Technologies Used

- PHP (server-side)
- MySQL (database)
- HTML5 & CSS3
- XAMPP (recommended for local development)

---

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/bookshelf.git
   ```

2. **Start XAMPP**
   - Run Apache and MySQL.

3. **Create the Database**
   - Open phpMyAdmin.
   - Create a database named `bookshelf`.
   - Run this SQL to create the `books` table:
     ```sql
     CREATE TABLE books (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       author VARCHAR(255) NOT NULL,
       genre VARCHAR(100),
       price DECIMAL(10,2)
     );
     ```

4. **Configure Database Connection**
   - Edit `db.php` with your MySQL credentials if needed.

5. **Place Files**
   - Copy the project folder to `c:\xampp\htdocs\bookshelf`.

6. **Access the App**
   - Go to [http://localhost/bookshelf/index.php](http://localhost/bookshelf/index.php) in your browser.

---

## File Structure

- `index.php` — Main page (add/view books)
- `edit.php` — Edit book details
- `delete.php` — Delete a book
- `db.php` — Database connection
- `style.css` — Stylesheet

---

## Usage

- **Add a Book:** Fill the form and click "Add Book".
- **Edit:** Click "Edit" next to a book, update info, and save.
- **Delete:** Click "Delete" and confirm to remove a book.

---

## Security Note

- This app uses basic SQL queries for simplicity.  
  For production, use prepared statements to prevent SQL injection.

---

## License

MIT License

---

## Screenshots

![BookShelf Screenshot](screenshot.png)<img width="1910" height="853" alt="Screenshot 2025-08-13 124203" src="https://github.com/user-attachments/assets/3d7c3cfc-a354-4266-8e1d-4199f80f6a19" />


---

## Author

Made with ❤️ by [Your Name]
