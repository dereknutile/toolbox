# Schema Documentation

The database schema is handled using Laravel migrations.  The following is mainly documentation for planning and reference.

## Table Structure
Tables listed below are defined for planning and are not necessarily the actual names of the tables or the only tables created.

Also, as a rule, most tables will use the unique identifier `id` and store a `created_at` date and `updated_at` date.

### Administration

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Alert
Stores messages to communicate alerts to user base.  Ties to the priority table.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| start         | datetime      |          |          |          |
| end           | datetime      |          |          |          |
| title         | varchar       |          |          |          |
| description   | text          |          |          |          |
| priority_id   | integer       |          |          |          |
| contact_id    | integer       |          |          |          |
| author_id     | integer       |          |          |          |

### Asset

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Documentation

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Favorite

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### File
Common table to store file data.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       |          |          |          |
| entitiy_id    |               |          |          |          |
| author_id     | integer       |          |          |          |

### Flag

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Group

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Impact

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Key

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Log

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Message

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Report

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Status

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### System

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Tag

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

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

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |
