# Reading Recommendation System

## Description
The Reading Recommendation System is a web application built using Laravel that allows users to submit their reading intervals for various books and provides recommendations based on the most read books by the users. The system also sends a thank-you SMS to users after submitting their reading intervals. This Laravel backend system consists of two main APIs:

1. API to submit a user reading interval.
2. API to calculate the most recommended five books.

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
### 1. Submit a User Reading Interval
- Add a reading interval: Send a POST request to /api/reading-intervals with the following JSON payload:

    ```json
        {
            "user_id": 1,
            "book_id": 1,
            "starting_page": 10,
            "ending_page": 30
        }

    ```
- Response:** 200 OK
    ```json
        {
            "message": "Reading interval submitted successfully."
        }

    ```
- Response: Success message indicating the reading interval submission.
- SMS Sent: A thank you message is sent to the user using the configured SMS provider.

### 2. Calculate the Most Recommended Five Books
- Send a GET request to /api/recommended-books to retrieve the most read books. 
- Response: 200 OK
    ```json
    [
        {
        "book_id": 1,
        "book_name": "Clean Code",
        "num_of_read_pages": "45"
        },
        {
            "book_id": 2,
            "book_name": "Harry Potter",
            "num_of_read_pages": "21"
        }
    ]
    ```

## Collection

You can find a Postman collection with example requests in this [Postman Collection](https://github.com/0xelsherif/Reading-Recommendation-System/blob/master/postman_collection.json) file.

### Unit Tests
Unit tests are implemented using PHPUnit. To run the tests, execute the following command:

```bash
php artisan test
```
You should see output similar to the following:
Attempt | Test Case | Duration
--- | --- | --- 
PASS | submit reading interval | 1.30s 
PASS | recommend books | 0.02s 

Tests:    2 passed (4 assertions)<br>
Duration: 1.46s

## Error Responses

- 400 Bad Request: Invalid request format or missing required parameters.
- 401 Unauthorized: Authentication failure.
- 404 Not Found: Resource not found.
- 500 Internal Server Error: Unexpected server error. 

## SMS Providers

The system supports two SMS providers and switches between them based on the environment variable.

- Mock SMS Provider 1: https://run.mocky.io/v3/8eb88272-d769-417c-8c5c-159bb023ec0a
- Mock SMS Provider 2: https://run.mocky.io/v3/268d1ff4-f710-4aad-b455-a401966af719

## Author

&copy; Ahmed Hamza El-Sherif <br>
Connect with me on [LinkedIn](https://www.linkedin.com/in/0xelsherif/) or check out my [GitHub profile](https://github.com/0xelsherif/). Feel free to drop me an [email](mailto:dev.ahmedelsherif@gmail.com).

## Acknowledgements

Special thanks to the Koinz team for providing the opportunity to work on this project.
