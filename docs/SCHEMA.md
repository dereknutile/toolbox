# Schema Documentation

The database schema is handled using Laravel migrations.  The following is mainly documentation for planning and reference.

## Table Structure
Tables listed below are defined for planning and are not necessarily the actual names of the tables or the only tables created.

Also, as a rule, most tables will use the unique identifier `id` and store a `created_at` date and `updated_at` date.

### Acl

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
Assets are physical devices tracked in the system.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| asset_id      | integer       |          |          |          |
| name          | varchar       |          |          |          |
| description   | text          |          |          |          |
| assigned_to   | integer       |          |          |          |

### Documentation

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       |          |          |          |
| content       | text          |          |          |          |
| status_id     | integer       |          |          |          |
| author_id     | integer       |          |          |          |

### Favorite

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| author_id     | integer       |          |          |          |
| user_id       | integer       |          |          |          |

### File
Common table to store file data.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| url           | varchar       | 255      |          |          |
| title         | varchar       | 255      |          |          |
| entity        | varchar       | 255      |          |          |
| entitiy_id    | integer       |          |          |          |
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
| title         | varchar       |          |          |          |
| status_id     | integer       |          |          |          |

### Group User

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| group_id      | integer       |          |          |          |
| user_id       | integer       |          |          |          |

### Impact

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
|               |               |          |          |          |

### Key

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       | 255      |          |          |
| content       | text          |          |          |          |
| hash          | varchar       | 200      |          |          |
| status_id     | integer       |          |          |          |

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
