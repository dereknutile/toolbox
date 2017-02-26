# Schema Documentation

The database schema is handled using Laravel migrations.  The following is mainly documentation for planning and reference.

## Table Structure
Tables listed below are defined for planning and are not necessarily the actual names of the tables or the only tables created.

Also, as a rule, most tables will use the unique identifier `id` and store a `created_at` date and `updated_at` date.  Soft deletes are handled with a `deleted_at` field.

-------------------------------------------------------------------------------

### Acl
Access Control List.  Once a user authenticates, what can she access?

Note: consider a Laravel ACL package like [https://github.com/micheleangioni/entrust](https://github.com/micheleangioni/entrust) and/or [https://github.com/romanbican/roles](https://github.com/romanbican/roles).

-------------------------------------------------------------------------------

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

-------------------------------------------------------------------------------

### Asset
Assets are physical devices tracked in the system.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| asset_id      | integer       |          |          |          |
| name          | varchar       |          |          |          |
| description   | text          |          |          |          |
| assigned_to   | integer       |          |          |          |

-------------------------------------------------------------------------------

### Documentation
Store documentation text.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       |          |          |          |
| content       | text          |          |          |          |
| status_id     | integer       |          |          |          |
| author_id     | integer       |          |          |          |

-------------------------------------------------------------------------------

### Favorite
Flags that track users on the in-and-out board.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| author_id     | integer       |          |          |          |
| user_id       | integer       |          |          |          |

-------------------------------------------------------------------------------

### Flags
Adding flags allow objects to be called out.  Examples: For Review, or For Documenation, Needs Approval, etc.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       | 255      |          |          |
| entity        | varchar       | 255      |          |          |
| entitiy_id    | integer       |          |          |          |
| author_id     | integer       |          |          |          |

-------------------------------------------------------------------------------

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

-------------------------------------------------------------------------------

### Group
Named collections of users.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       |          |          |          |
| status_id     | integer       |          |          |          |

-------------------------------------------------------------------------------

### Group User

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| group_id      | integer       |          |          |          |
| user_id       | integer       |          |          |          |

-------------------------------------------------------------------------------

### Impact
How many users are impacted by this?

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       |          |          |          |
| content       | text          |          |          |          |
| deleted_at    | datetime      |          |          |          |

-------------------------------------------------------------------------------

### Key
Collection of stored security keys, passwords, and notes.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       | 255      |          |          |
| content       | text          |          |          |          |
| hash          | varchar       | 200      |          |          |
| status_id     | integer       |          |          |          |

-------------------------------------------------------------------------------

### Log

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| entry         | varchar       | 255      |          |          |
| entity        | varchar       | 255      |          |          |
| entity_id     | integer       |          |          |          |
| author_id     | integer       |          |          |          |

-------------------------------------------------------------------------------

### Message
Personal communications to users.  These messages could be other users requesting access to an owner of an object, like a security key or document.  They could also be management assignments, work orders expiring, etc.  The `read` boolean is a simple toggle to de/activate the marked-as-read feature.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| user_id       | integer       |          |          |          |
| requester_id  | integer       |          |          |          |
| message       | varchar       | 255      |          |          |
| entity        | varchar       | 255      |          |          |
| entity_id     | integer       |          |          |          |
| read          | boolean       |          |          |          |
| due_at        | datetime      |          |          |          |

-------------------------------------------------------------------------------

### Priority
Software priorities like essential, critical, desireable, etc.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       | 255      |          |          |
| content       | text          |          |          |          |
| deleted_at    | datetime      |          |          |          |

-------------------------------------------------------------------------------

### Software
Software directory to describe supported software, assign to internal support and external vendors.

#### Example fields
Title - Accela, IVR; Area - GIS, permits; Company - Verizon; Servers - SQLname, IISname; SoftwareType - tool, application; support priority - essential, critical, desireable; Web Based - t/f; Contacts - Joe, Jill

-------------------------------------------------------------------------------

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       | 255      |          |          |
| description   | text          |          |          |          |
| notes         | text          |          |          |          |
| contact_id    | integer       |          |          |          |
| priority_id   | integer       |          |          |          |
| deleted_at    | datetime      |          |          |          |

-------------------------------------------------------------------------------

### Status
Statuses, like active, open, closed, on-hold, etc.  Statuses are tied to entities like 'workorder'.

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       | 255      |          |          |
| content       | text          |          |          |          |
| entity        | varchar       | 255      |          |          |
| deleted_at    | datetime      |          |          |          |

-------------------------------------------------------------------------------

### Tag
Tags are ubiquitos categories.  Tags are many-to-many tied to an entity.

-------------------------------------------------------------------------------

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       | 255      |          |          |
| entity        | varchar       | 255      |          |          |
| author_id     | integer       |          |          |          |

-------------------------------------------------------------------------------

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

-------------------------------------------------------------------------------

### Workorder

#### Structure

| Name          | Type          | Length   | Default  | Required |
| ------------- |:-------------:| --------:| --------:| --------:|
| title         | varchar       | 255      |          |          |
| content       | text          |          |          |          |
| contact_id    | integer       |          |          |          |
| impact_id     | integer       |          |          |          |
| priority_id   | integer       |          |          |          |
| status_id     | integer       |          |          |          |
