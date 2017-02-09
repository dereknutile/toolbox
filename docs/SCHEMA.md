# Schema Documentation

The database schema is handled using Laravel migrations.  The following is mainly documentation for planning and reference.

## Table Structure
Tables listed below are defined for planning and are not necessarily the actual names of the tables or the only tables created.

Also, as a rule, most tables will use the unique identifier `id` and store a `created_at` date and `updated_at` date.

### Administration

### Alert

### Asset

### Documentation

### Favorite

### File

### Flag

### Group

### Impact

### Key

### Log

### Message

### Report

### Status

### System

### Tag

### User
Things like last login, login location, login IP, etc. are better served in a historical table where you can run inserts and then query against the table if you need information. The idea is to have infrequent updates in a heavily used table, like users. Purge old records as necessary.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| first_name    | varchar       | 100      | null     | yes      |
| last_name     | varchar       | 100      | null     | yes      |
| middle_name   | varchar       | 100      | null     | yes      |
| user_name     | varchar       | 100      | null     | yes      |
| email         | varchar       | 100      | null     | yes      |

### Workorder
