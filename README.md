# Reading Recommendation System

## Description
The Reading Recommendation System is a web application built using Laravel that allows users to submit their reading intervals for various books and provides recommendations based on the most read books by the users. The system also sends a thank-you SMS to users after submitting their reading intervals.

## Features
- Create, update, and delete reading intervals for users.
- Retrieve the most recommended books based on reading activity.
- Secure endpoints with authentication (optional).

## Technologies Used
- Laravel: PHP web application framework
- MySQL: Relational database management system
- Postman: API development and testing tool

## Setup Instructions
1. Clone the repository to your local machine.
2. Install dependencies by running `composer install`.
3. Create a `.env` file by copying the `.env.example` file and configure your environment variables.
4. Generate application key by running `php artisan key:generate`.
5. Migrate the database by running `php artisan migrate`.
6. Optionally, seed the database with sample data by running `php artisan db:seed`.
7. Start the development server by running `php artisan serve`.

## Usage
1. Add a reading interval: Send a POST request to /api/reading-intervals with the following JSON payload:

'''
{
    "user_id": 1,
    "book_id": 1,
    "starting_page": 10,
    "ending_page": 30
}

'''
2. Send a GET request to /api/recommended-books to retrieve the most read books. 

## Collection

You can find a Postman collection with example requests in this [Postman Collection](https://github.com/0xelsherif/Reading-Recommendation-System/blob/master/postman_collection.json) file.

## Author

Ahmed Hamza El-Sherif
Connect with me on [LinkedIn](https://www.linkedin.com/in/0xelsherif/) or check out my [GitHub profile](https://github.com/0xelsherif/).Feel free to drop me an [email](mailto:dev.ahmedelsherif@gmail.com).