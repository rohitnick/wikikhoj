CREATE TABLE `khojdb`.`answer` (
`answerId` INT( 10 ) NOT NULL AUTO_INCREMENT COMMENT 'answer id',
`qid` BIGINT( 20 ) NOT NULL ,
`answer` LONGTEXT NOT NULL ,
`time` TIMESTAMP NOT NULL ,
`a_status` INT( 2 ) NOT NULL ,
PRIMARY KEY ( `answerId` )
) ENGINE = MYISAM ;