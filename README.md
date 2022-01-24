# simple-jsonserver for Namnsdag
Just a simple json-server getting namnsdagar from a mysql database

In Sweden we have Namnsdagar, and I wanted a small jsonserver serving those names to my MagicMirror.

I have a database with all namnsdagar in it, and my MagicMirror requests the current namnsdag each day.
Source of namnsdagar is Wikipedia. I won't provide the names here.

# database content
```
+-----------------+-------------+------+-----+---------+----------------+
| Field           | Type        | Null | Key | Default | Extra          |
+-----------------+-------------+------+-----+---------+----------------+
| id              | int(11)     | NO   | PRI | NULL    | auto_increment |
| datum           | date        | YES  |     | NULL    |                |
| namnsdag        | longtext    | YES  |     | NULL    |                |
+-----------------+-------------+------+-----+---------+----------------+
```
