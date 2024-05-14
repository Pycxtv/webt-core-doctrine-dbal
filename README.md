# WEBT | CORE | Doctrine DBAL

## Overview
The USARPS Championship is scheduled for a comeback - and your company is to develop a tool that allows to log the tournament statistics.
https://www.youtube.com/watch?v=6yrdT5y12kA

## User Story 1
*As a Developer I want to create a responsive prototype HTML page, containing demonstration entries for Rock, Paper, Scissors game rounds, so that the customer can get an impression of the final view.*

### Acceptance Criteria
- A plain HTML prototype exists
- The HTML needs to be responsive 
- The tournament name and date are listed
- A minimum of 5 game rounds are listed (1 game round equals 1 RPS game)
- Each game round features the player, symbol he/she picked (rock, paper, scissors), as well as date and time

## User Story 2
*As a Developer I want to create a database for saving staistics about game rounds, so that the data can later be retrieved and analyzed.*

### Acceptance Criteria
- A relational database is setup on the dev environment per developer
- A table for storing game rounds exists (having attributes with according types)
- The create statements are available as SQL file

## User Story 3
*As a Developer I want to insert test data into the database (aka “seed the database”), so that the retrieval and display of data can later be tested.*

### Acceptance Criteria
- The database contains information about at least 5 rounds of RPS (see user story 2 for a round definition).

## User Story 4
*As a Developer I want to connect the view (see user story 1) with the data from the database and list all entries, so that the information from the database is directly displayed in the final frontend representation.*

### Acceptance Criteria
- The database information is used as data source for the view

## User Story 5
*As a Developer I want to create a webpage that allows to insert new records into the database, so that I can store new information easier.*

### Acceptance Criteria
- A webpage exists that allows to enter relevant information for the record
- The webpage uses Doctrine DBAL to store the information in the database

## User Story 6
*As a Developer I want to create a webpage that allows to delete records in the database, so that I can remove information easier.*

### Acceptance Criteria
- A webpage exists that allows to delete a record from the database
- The webpage uses Doctrine DBAL to delete the information in the database

#### Links
https://my.skilldisplay.eu/en/skillset/88


# WEBT | ADV | Doctrine Database Storage and Object Mapping

## Overview
The customer is very happy with your solution – as a developer it does however seem tedious to map your PHP classes to the database and vice versa. Also changes on the database have to be communicated between developers. You are looking into ORM to address some of those issues.

Apply this advanced user stories to a fitting CORE scenario of your choice.

## User Story 1
*As a Developer I want to install Doctrine ORM via composer, so that I can use it in my project.*

### Acceptance Criteria
- Doctrine ORM is required and installed via composer
- Doctrine ORM is ready to use in the project

## User Story 2
*As a Developer I want to write Entity Models for my main business objects, so that I can later create the database from them.*

### Acceptance Criteria
- Classes which represent the business objects exist
- The classes features the according properties
- The classes uses Doctrine ORM annotations to mark them as entities
- The classes use Doctrine ORM annotations to define the property settings

## User Story 3
*As a Developer I want to re-create the database with a new database name to make use of the new entity model, so that I don’t have to tend to the database manually in the future.*

### Acceptance Criteria
- The database is created with the help of Doctrine ORM
- The database structure is based on the entity models

## User Story 4
*As a Developer I want to insert demonstration data into the database, so that I can use this data in the view.*

### Acceptance Criteria
- The database is seeded with the help of https://github.com/doctrine/data-fixtures

## User Story 5
*As a Developer I want to perform all data operations with Doctrine ORM, so that I can work entity based.*

### Acceptance Criteria
- All instances of accessing the database (select, insert, delete, etc.) are using ORM

#### Links
https://my.skilldisplay.eu/en/skillset/358
