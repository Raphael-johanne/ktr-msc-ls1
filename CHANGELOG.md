# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.0.4] - 2021-03-15

### Added

#### Bonus 3/4 - Library collection per user

- Create 0 to n business card per user in library (relation one to many)
- EN translations


## [0.0.5] - 2021-03-15

### Added

#### Bonus 3 - User switch

- Allow users to log out
- EN translations

## [0.0.5] - 2021-03-15

### Added

#### Bonus 2 - Multi users

- Create one profile per user (relation one to one)
- EN translations
- Not mandatory but add of a register form to create different users (usefull for testing multi users)
- Flash messages

## [0.0.4] - 2021-03-15

### Added

#### Bonus 1 - Save the datas

- Create profile entity
- EN translations
- Make sure that this data is persistent (by id parameter in query)

## [0.0.3] - 2021-03-15

### Added

#### Step 4 - "Library" interface

- “library” interface that allows your user to add new business cards to your application with the
following fields:
    - Name (optional short text field)
    - Company name (optional short text field)
    - Email address (mandatory email field)
    - Telephone number (optional phone field)
- EN translations
- Menu links
    - Profile
    - Library

## [0.0.2] - 2021-03-15

### Added

#### Step 3 - Data protection

- Create a password protection system for this interface.
- Create database
- Create user entity
- Create sample default login user (john.doe@gmail.com / john)

## [0.0.1] - 2021-03-15

### Added

#### Step 2 - "Profile" interface

- CHANGELOG.md and README.md files
- “profile” interface allowing the user of the application to save his own information, in the following
form:
    - Name (mandatory short text field)
    - Company name (optional short text field)
    - Email address (optional long text field)
    - Telephone number (optional phone field)
- EN translations
