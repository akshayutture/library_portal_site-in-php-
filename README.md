Library Portal (in PHP)
===========================

PURPOSE 

A library website for the lending and borrowing of books by customers and addition/deletion/editing of books by librarians

This website was written by me to get selected for the backend of Shaastra webops (backend) team


RUNNING THIS USING THE XAMPP PACKAGE

1. Create a folder called xxxxx in xampp/htdocs
2. Paste all these files into xxxxx
3. Start the apache sever either using the 'start apache' button on the xampp control panel. OR. If you have a linux based system, type - sudo /opt/lampp/lampp start
4. Open a browser and type the url http://localhost/xxxxx


DETAILED PROBLEM STATEMENT

Your task is to build a library application portal. A brief description of its functionalities is given below:

1. Registration Page - Allow any visitor to register himself on this page either as a librarian or a customer. Once he registers, he becomes a user. 

2. Login Page – A page where the user logs in to his respective portal.

3. Users – There will be two types of users – Librarians and customers.

4. Librarians - They have the ability to add/edit/delete the titles of books in the library. Incorporate all three functionalities.
 
5. Customers – They can come and request to borrow a book. To make things easier, there are no fines and indefinite lending time.

6. Librarian portal – This is the page that only librarians can access. They can

	a. Add : They can add books to the library database. Keep in mind that they can add multiple copies of the same book as well. Make 	provisions to maintain book count for each book. Also, they are only concerned about the Book Title, Publisher, Author and Date added for each individual book. Ignore other details.
	b.Edit: They may want to edit the details of the book in the database. Allow them to edit any book detail.
	
	c.Delete: If a book becomes unusable, they’ll want to remove it from the library. Give them a facility to delete book titles completely or some copies of a book individually.
	
7. Customer Portal – This is a page that is accessible to customers only. They can log in, and take a look at all titles in the library. 

8. Sort – Make a provision for the customers to sort books by title, author and date added. This allows for convenient selections.

9. Book Request – Customers can request for books they like. If the book is available in the library, assign the book to them.

10. Book return – Once she no longer needs the book, she should be able to return it.

11. A customer should not be allowed to borrow a book until he’s returned his current book.

