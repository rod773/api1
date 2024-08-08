create table tasks(
id int not null auto_increment,
name varchar(128) not null,
priority int default null,
is_completed boolean not null default false,
primary key(id),
index (name)
);

describe tasks;