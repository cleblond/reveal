<?php

// The SQL to uninstall this tool
$DATABASE_UNINSTALL = array(
"drop table if exists {$CFG->dbprefix}eo_slidedecks"
);

// The SQL to create the tables if they don't exist
$DATABASE_INSTALL = array(

array( "{$CFG->dbprefix}reveal_slidedecks",
"create table {$CFG->dbprefix}reveal_slidedecks (
    id     INTEGER NOT NULL,
    user_id     INTEGER NOT NULL,
    description        TEXT NOT NULL,
    slides       TEXT NOT NULL,
    share        TINYINT DEFAULT 0,
    options      TEXT NOT NULL,
    updated_at  DATETIME NOT NULL,
    UNIQUE(id)
) ENGINE = InnoDB DEFAULT CHARSET=utf8"),

array( "{$CFG->dbprefix}reveal_assigned",
"create table {$CFG->dbprefix}reveal_assigned (
    id          INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id     INTEGER NOT NULL,
    slidedeck_id     INTEGER NOT NULL,
    link_id        INTEGER NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET=utf8")

);

