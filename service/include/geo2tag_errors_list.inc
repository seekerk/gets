<?php
define('SUCCESS', 0);
define('WRONG_TOKEN_ERROR', 1);
define('USER_ALREADY_EXIST_ERROR', 2);
define('USER_DOES_NOT_EXIST_ERROR', 3);
define('CHANNEL_ALREADY_EXIST_ERROR', 4);
define('CHANNEL_DOES_NOT_EXIST_ERROR', 5);
define('SUBSCRIPTION_ALREADY_EXIST', 6);
define('INTERNAL_DB_ERROR', 7);
define('INCORRECT_QUERY_NAME_ERROR', 8);
define('INCORRECT_JSON_ERROR', 9);
define('INCORRECT_CREDENTIALS_ERROR', 10);
define('CHANNEL_NOT_SUBCRIBED_ERROR', 11);
define('CHANNEL_ALREADY_SUBSCRIBED_ERROR', 12);
define('TAG_DOES_NOT_EXIST_ERROR', 13);
define('TAG_ALREADY_EXIST_ERROR', 14);
define('NULL_TIMESLOT_ERROR', 15);
define('UNKNOWN_ERROR', 16);
define('TMP_USER_ALREADY_EXIST_ERROR', 17);
define('NETWORK_ERROR', 18);
define('EMAIL_ALREADY_EXIST_ERROR', 19);
define('WEAK_PASSWORD_ERROR', 20);
define('NOT_SUPPORTED', 21);
define('DB_DOES_NOT_EXIST_ERROR', 22);
define('USER_DOES_NOT_OWN_CHANNEL_ERROR', 23);

class ChannelAlreadyExistException extends Exception {}
class ChannelAlreadySubscribedException extends Exception {}
class ChannelNotSubscribedException extends Exception {}
class WrongTokenException extends Exception {}
?>
