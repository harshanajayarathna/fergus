## Requirements
To run this application, you will need to install php & mysql in your local machine.

## How to setup project

To download and run the repository, follow below steps.

```bash
# Clone this repository
$ git clone https://github.com/harshanajayarathna/fergus-rest-api

# Go into the repository
$ cd fergus-rest-api

# create a database in mysql 

# change .env file database credentials

# start Laravel's local development server 
$ php artisan serve

# run migrate & seed command
$ php artisan migrate --seed

```
## API endpoints
Below show the api endpoints for the test

### get All jobs
With this, you can get all jobs with meta details.
eg: GET http://127.0.0.1:8000/api/v1/

### get All jobs with filter & sorting
With this endpoint, you can filter & sort the result as you wish.
eg: GET http://127.0.0.1:8000/api/v1/jobs?filter=Scheduled&sort_by=first_name&order_by=desc

### Update All jobs with filter & sorting
With this endpoint, you can update the status of job.
eg: GET http://127.0.0.1:8000/api/v1/jobs/{id}

### view a job
With this endpoint, you can view a job
eg: GET http://127.0.0.1:8000/api/v1/jobs/{id}

### update job status
With this endpoint, you can view a job. For this you need to make a PUT request with status_id (integer).
eg: PUT http://127.0.0.1:8000/api/v1/jobs/{id}

##  Add a note to job
via below endpoint, you can create a new note for a job. For this you need to create a POST request with job_id (integer), subject (string), description (text)  
eg: POST http://127.0.0.1:8000/api/v1/notes 

##  update a note to job
via below endpoint, you can create update note for a job. For this you need to create a PUT request with job_id (integer), subject (string), description (text)  
eg: POST http://127.0.0.1:8000/api/v1/notes/{id} 











