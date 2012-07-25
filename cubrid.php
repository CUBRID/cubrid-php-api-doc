<?php

// Start of cubrid v.1.0

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Open a connection to a CUBRID Server
 * @link http://php.net/manual/en/function.cubrid-connect.php
 * @param string $host <p>
 * Host name or IP address of CUBRID CAS server.
 * </p>
 * @param string $port <p>
 * Port number of CUBRID CAS server (BROKER_PORT configured in
 * $CUBRID/conf/cubrid_broker.conf).
 * </p>
 * @param string $dbname <p>
 * Name of database.
 * </p>
 * @param string $username [optional] <p>
 * User name for the database. Default value is 'PUBLIC'.
 * </p>
 * @param string $password [optional] <p>
 * User password. Default value is empty string, i.e. no
 * password is defined.
 * </p>
 * @param bool $new_link [optional] <p>
 * If a second call is made to cubrid_connect()
 * with the same arguments, no new link will be established,
 * but instead, the connection identifier of the already
 * opened connection will be
 * returned. The new_link parameter modifies this 
 * behavior and makes cubrid_connect() always open
 * a new connection, even if cubrid_connect() was called
 * before with the same parameters.
 * </p>
 * @return resource <p>
 * a CUBRID connection identifier on succes or false on failure.
 * </p>
 */
function cubrid_connect ($host, $port, $dbname, $username = 'PUBLIC', $password = '', $new_link = FALSE) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Open a connection to a CUBRID Server
 * @link http://php.net/manual/en/function.cubrid-connect.php
 * @param string $conn_url <p>
 * A character string that contains server connection information.<br />
 * Syntax: 'CUBRID:&gt;host&lt;:&gt;port&lt;:&gt;dbname&lt;:&gt;username&lt;:&gt;password&lt;:?&gt;params&lt;'.<br />
 * E.g. <i>CUBRID:127.0.0.1:33088:demodb:dba:123456:?autocommit=off&althost=10.34.63.132:33088&rctime=100</i>
 * </p>
 * @param string $username [optional] <p>
 * User name for the database. Default value is 'PUBLIC'.
 * </p>
 * @param string $password [optional] <p>
 * User password. Default value is empty string, i.e. no
 * password is defined.
 * </p>
 * @param bool $new_link [optional] <p>
 * If a second call is made to cubrid_connect()
 * with the same arguments, no new link will be established,
 * but instead, the connection identifier of the already
 * opened connection will be
 * returned. The new_link parameter modifies this
 * behavior and makes cubrid_connect() always open
 * a new connection, even if cubrid_connect() was called
 * before with the same parameters.
 * </p>
 * @return resource <p>
 * a CUBRID connection identifier on success or false on failure.
 * </p>
 */
function cubrid_connect_with_url ($conn_url, $username = 'PUBLIC', $password = '', $new_link = FALSE) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Open a persistent connection to a CUBRID server
 * @link http://php.net/manual/en/function.cubrid-pconnect.php
 * @param string $host <p>
 * Host name or IP address of CUBRID CAS server.
 * </p>
 * @param string $port <p>
 * Port number of CUBRID CAS server (BROKER_PORT configured in
 * $CUBRID/conf/cubrid_broker.conf).
 * </p>
 * @param string $dbname <p>
 * Name of database.
 * </p>
 * @param string $username [optional] <p>
 * User name for the database. Default value is 'PUBLIC'.
 * </p>
 * @param string $password [optional] <p>
 * User password. Default value is empty string, i.e. no
 * password is defined.
 * </p>
 * @return resource <p>
 * a CUBRID persistent link identifier on success, or false on
 * failure.
 * </p>
 */
function cubrid_pconnect ($host, $port, $dbname, $username = 'PUBLIC', $password = '') {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Open a connection to a CUBRID Server
 * @link http://php.net/manual/en/function.cubrid-connect.php
 * @param string $conn_url <p>
 * A character string that contains server connection information.<br />
 * Syntax: 'CUBRID:&gt;host&lt;:&gt;port&lt;:&gt;dbname&lt;:&gt;username&lt;:&gt;password&lt;:?&gt;params&lt;'.<br />
 * E.g. CUBRID:127.0.0.1:33088:demodb:dba:123456:?autocommit=off&althost=10.34.63.132:33088&rctime=100
 * </p>
 * @param string $username [optional] <p>
 * User name for the database. Default value is 'PUBLIC'.
 * </p>
 * @param string $password [optional] <p>
 * User password. Default value is empty string, i.e. no
 * password is defined.
 * </p>
 * @return resource <p>
 * a CUBRID connection identifier on success or false on failure.
 * </p>
 */
function cubrid_pconnect_with_url ($conn_url, $username = 'PUBLIC', $password = '') {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Close CUBRID connection. Same as cubrid_disconnect().
 * @link http://php.net/manual/en/function.cubrid-close.php
 * @param resource $conn_identifier [optional]
 * @return bool Returns true on success or false on failure.
 */
function cubrid_close ($conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Close CUBRID connection. Same as cubrid_cose().
 * @link http://php.net/manual/en/function.cubrid-disconnect.php
 * @param resource $conn_identifier [optional]
 * @return bool Returns true on success or false on failure.
 */
function cubrid_disconnect ($conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Send a CUBRID query
 * @link http://php.net/manual/en/function.cubrid-query.php
 * @param string $query <p>
 * A SQL query
 * </p>
 * <p>
 * Data inside the query should be properly escaped.
 * </p>
 * @param resource $conn_identifier [optional]
 * @return resource <ul><li>
 * For SELECT, SHOW, DESCRIBE, EXPLAIN and other statements
 * returning resultset, cubrid_query() returns a resource
 * on success, or false on error.
 * </li>
 * <p>
 * The returned result resource should be passed to
 * cubrid_fetch_array(), and other functions for dealing
 * with result tables, to access the returned data.
 * </p>
 * <p>
 * Use cubrid_num_rows() to find out how many rows
 * were returned for a SELECT statement.
 * </p>
 * <li>
 * For other type of SQL statements, INSERT, UPDATE, DELETE, DROP, etc,
 * cubrid_query() returns true on success or false on error.
 * </li>
 * <p>
 * Use cubrid_affected_rows() to find out how many
 * rows were affected by a DELETE, INSERT, REPLACE, or UPDATE
 * statement.
 * </p>
 * <li>
 * cubrid_query() will also fail and return false
 * if the user does not have permission to access the table(s)
 * referenced by the query.
 * </li>
 * </ul>
 */
function cubrid_query ($query, $conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Execute a prepared SQL statement
 * @link http://php.net/manual/en/function.cubrid-execute.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param resource $sql <p>
 * SQL to be executed.
 * </p>
 * @param resource $option [optional] <p>
 * Query execution option CUBRID_INCLUDE_OID, CUBRID_ASYNC,
 * CUBRID_EXEC_QUERY_ALL.
 * </p>
 * @return resource <p>
 * Request identifier, when process is successful,
 * or FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_execute ($conn_identifier, $sql, $option = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Execute a prepared SQL statement
 * @link http://php.net/manual/en/function.cubrid-execute.php
 * @param resource $conn_identifier <p>
 * cubrid_prepare() identifier.
 * </p>
 * @param resource $option [optional] <p>
 * Query execution option CUBRID_INCLUDE_OID, CUBRID_ASYNC,
 * CUBRID_EXEC_QUERY_ALL.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_execute ($request_identifier, $option = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Bind variables to a prepared statement as parameters
 * @link http://php.net/manual/en/function.cubrid-bind.php
 * @param resource $req_identifier <p>
 * Request identifier as a result of cubrid_prepare().
 * </p>
 * @param mixed $bind_param <p>
 * Parameter identifier. For a prepared statement using
 * named placeholders, this will be a parameter name of
 * the form :name<br />
 * (Note that the name can only contain digit, alphabet,
 * and underscore, and it can not begin with digit.
 * The name length can not be longer than 32).<br />
 * For a prepared statement using question mark placeholders,
 * this will be the 1-indexed position of the parameter.
 * </p>
 * @param mixed $bind_value <p>
 * Actual value for binding.
 * </p>
 * @param string $bind_value_type [optional] <p>
 * A type of the value to bind. (It is omitted by default. Thus, system
 * internally use string by default. However, you need to specify the
 * exact type of the value as an argument when
 * they are NCHAR, BIT, or BLOB/CLOB).
 * </p>
 * <p>
 * The following bind types are supported:
 * "STRING", "NCHAR", "BIT", "NUMERIC", "NUMBER", "FLOAT", "DOUBLE",
 * "TIME", "DATE", "TIMESTAMP", "OBJECT", "BLOB", "CLOB", "NULL".
 * </p>
 * @return bool TRUE, when process is successful, or FALSE.
 */
function cubrid_bind ($req_identifier, $bind_param, $bind_value, $bind_value_type = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Close the request handle. Same as cubrid_close_request().
 * @link http://php.net/manual/en/function.cubrid-close-prepare.php
 * @param resource $req_identifier <p>
 * Request identifier.
 * </p>
 * @return bool TRUE, when process is successful, or FALSE.
 */
function cubrid_close_prepare ($req_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Close the request handle. Same as cubrid_close_prepare().
 * @link http://php.net/manual/en/function.cubrid-close-request.php
 * @param resource $req_identifier <p>
 * Request identifier.
 * </p>
 * @return bool TRUE, when process is successful, or FALSE.
 */
function cubrid_close_request ($req_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get contents of collection type column using OID
 * @link http://php.net/manual/en/function.cubrid-col-get.php
 * @param resource $conn_identifier <p>
 * Request identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance that you want to read.
 * </p>
 * @param string $attr_name <p>
 * Attribute name that you want to read from the instance.
 * </p>
 * @return array <ul><li>
 * Array (0-based numerical array) containing the
 * elements requested, when process is successful;
 * </li>
 * <li>
 * FALSE (to distinguish the error from the situation of
 * attribute having empty collection;
 * </li>
 * <li>
 * or NULL, in case of error, a warning message is shown;
 * in such case you can check the error by using
 * cubrid_error_code()), when process is unsuccessful.
 * </li>
 * </ul>
 */
function cubrid_col_get ($conn_identifier, $oid, $attr_name) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the number of elements in collection type column using OID
 * @link http://php.net/manual/en/function.cubrid-col-size.php
 * @param resource $conn_identifier <p>
 * Request identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance that you want to read.
 * </p>
 * @param string $attr_name <p>
 * Attribute name that you want to read from the instance.
 * </p>
 * @return int <p>
 * Number of elements, when process is successful.
 * FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_col_size ($conn_identifier, $oid, $attr_name) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Send an SQL query to CUBRID without fetching and buffering the result rows.
 * @link http://php.net/manual/en/function.cubrid-unbuffered-query.php
 * @param string $query <p>
 * The SQL query to execute.
 * </p>
 * <p>
 * Data inside the query should be properly escaped.
 * </p>
 * @param resource $conn_identifier [optional]
 * @return resource <p>
 * For SELECT, SHOW, DESCRIBE or EXPLAIN statements,
 * cubrid_unbuffered_query() returns a resource on success, or false on
 * error.
 * </p>
 * <p>
 * For other type of SQL statements, UPDATE, DELETE, DROP, etc,
 * cubrid_unbuffered_query returns true on success
 * or false on error.
 * </p>
 */
function cubrid_unbuffered_query ($query, $conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * List databases available on a CUBRID server
 * @link http://php.net/manual/en/function.cubrid-list-dbs.php
 * @param resource $conn_identifier
 * @return array <p>
 * a numeric array with all existing CUBRID databases on success,
 * or false on failure.
 * </p>
 */
function cubrid_list_dbs ($conn_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Returns the text of the error message from previous CUBRID operation.
 * Same as cubrid_error_msg();
 * @link http://php.net/manual/en/function.cubrid-error.php
 * @param resource $connection [optional]
 * @return string <p>
 * the error text from the last CUBRID function, or
 * '' (empty string) if no error occurred.
 * </p>
 */
function cubrid_error ($connection = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get last error message for the most recent function call.
 * Same as cubrid_error();
 * @link http://php.net/manual/en/function.cubrid-error-msg.php
 * @return string <p>
 * the error text from the last CUBRID function, or
 * '' (empty string) if no error occurred.
 * </p>
 */
function cubrid_error_msg () {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Returns the numerical value of the error message from previous
 * CUBRID operation. Same as cubrid_error_code();
 * @link http://php.net/manual/en/function.cubrid-errno.php
 * @param resource $conn_identifier [optional]
 * @return int <p>
 * the error number from the last CUBRID function, or
 * 0 (zero) if no error occurred.
 * </p>
 */
function cubrid_errno ($conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get error code for the most recent function call.
 * Same as cubrid_errno();
 * @link http://php.net/manual/en/function.cubrid-error-code.php
 * @return int <p>
 * the error number from the last CUBRID function, or
 * 0 (zero) if no error occurred.
 * </p>
 */
function cubrid_error_code () {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get number of affected rows in previous CUBRID operation
 * @link http://php.net/manual/en/function.cubrid-affected-rows.php
 * @param resource $result [optional]
 * @return int <p>
 * the number of affected rows on success,
 * or -1, when SQL statement is not INSERT, DELETE or UPDATE,
 * or FALSE, when the request identifier is not specified,
 * and there is no last request.
 * </p>
 * <p>
 * The REPLACE statement first deletes the record with the same primary key 
 * and then inserts the new record. This function returns the number of 
 * deleted records plus the number of inserted records.
 * </p>
 */
function cubrid_affected_rows ($result = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the ID generated in the last query
 * @link http://php.net/manual/en/function.cubrid-insert-id.php
 * @param resource $conn_identifier [optional]
 * @return string <p>
 * The ID generated for an AUTO_INCREMENT column
 * by the previous query on success, 0 if the previous query
 * does not generate an AUTO_INCREMENT value, or false if
 * no CUBRID connection was established.
 * </p>
 */
function cubrid_insert_id ($conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get result data
 * @link http://php.net/manual/en/function.cubrid-result.php
 * @param resource $result 
 * @param int $row <p>
 * The row number from the result that's being retrieved. Row numbers 
 * start at 0.
 * </p>
 * @param mixed $field [optional] <p>
 * The name or offset of the field being retrieved.
 * </p>
 * <p>
 * It can be the field's offset, the field's name, or the field's table 
 * dot field name (tablename.fieldname). If the column name has been
 * aliased ('select foo as bar from...'), use the alias instead of the 
 * column name. If undefined, the first field is retrieved.
 * </p>
 * @return string <p>
 * The contents of one cell from a CUBRID result set on success, or
 * false on failure.
 * </p>
 */
function cubrid_result ($result, $row, $field = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get number of rows in result
 * @link http://php.net/manual/en/function.cubrid-num-rows.php
 * @param resource $result 
 * @return int <p>
 * The number of rows in a result set on success,
 * 0 when the query was executed in async mode,
 * -1, if SQL statement is not SELECT.
 * </p>
 */
function cubrid_num_rows ($result) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get number of columns in the result set
 * @link http://php.net/manual/en/function.cubrid-num-cols.php
 * @param resource $result 
 * @return int <p>
 * the number of fields in the result set resource on
 * success, -1 if SQL statement is not SELECT.
 * </p>
 */
function cubrid_num_cols ($result) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get number of fields in the result set
 * @link http://php.net/manual/en/function.cubrid-num-fields.php
 * @param resource $result
 * @return int <p>
 * the number of fields in the result set resource on
 * success, -1 if SQL statement is not SELECT.
 * </p>
 */
function cubrid_num_fields ($result) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Fetch the next row from a result set
 * @link http://php.net/manual/en/function.cubrid-fetch.php
 * @param resource $result <p>
 * result comes from a call to cubrid_execute()
 * </p>
 * @param int $type [optional] <p>
 * Array type of the fetched result CUBRID_NUM, CUBRID_ASSOC,
 * CUBRID_BOTH, CUBRID_OBJECT.
 * </p>
 * @return mixed <p>
 * array or object, when process is successful.
 * FALSE, when there are no more rows; NULL, when process is
 * unsuccessful.
 * </p>
 * <p>
 * The result can be received either as an array or as an object,
 * and you can decide which data type to use by setting the type
 * argument. The type variable can be set to one of the following
 * values:
 * </p>
 * <ul>
 * <li>CUBRID_NUM : Numerical array (0-based)</li>
 * <li>CUBRID_ASSOC : Associative array</li>
 * <li>CUBRID_BOTH : Numerical & Associative array (default)</li>
 * <li>CUBRID_OBJECT : object that has the attribute name as the
 * column name of query result</li>
 * </ul>
 * <p>
 * When type argument is omitted, the result will be received using
 * CUBRID_BOTH option as default. When you want to receive query
 * result in object data type, the column name of the result must
 * obey the naming rules for identifiers in PHP. For example,
 * column name such as "count(*)" cannot be received in object type.
 * </p>
 */
function cubrid_fetch ($result, $type = CUBRID_BOTH) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get a result row as an enumerated array
 * @link http://php.net/manual/en/function.cubrid-fetch-row.php
 * @param resource $result 
 * @return array <p>
 * a numerical array of strings that corresponds
 * to the fetched row, or false if there are no more rows,
 * or NULL, if process is unsuccessful.
 * </p>
 * <p>
 * cubrid_fetch_row fetches one row of data from
 * the result associated with the specified result identifier. The
 * row is returned as an array. Each result column is stored in an
 * array offset, starting at offset 0.
 * </p>
 */
function cubrid_fetch_row ($result) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Fetch a result row as an associative array, a numeric array, or both
 * @link http://php.net/manual/en/function.cubrid-fetch-array.php
 * @param resource $result 
 * @param int $result_type [optional] <p>
 * The type of array that is to be fetched. It's a constant and can
 * take the following values: CUBRID_ASSOC, CUBRID_NUM, and CUBRID_BOTH.
 * </p>
 * @return array <p>
 * an array of strings that corresponds to the fetched row, or false
 * if there are no more rows, or NULL, when process is unsuccessful.
 * The type of returned array depends on how result_type is defined.
 * </p>
 * <p>
 * By using CUBRID_BOTH (default), you'll get an array with both
 * associative and number indices. Using CUBRID_ASSOC, you 
 * only get associative indices (as cubrid_fetch_assoc
 * works), using CUBRID_NUM, you only get number indices
 * (as cubrid_fetch_row works).
 * </p>
 * <p>
 * If two or more columns of the result have the same field names,
 * the last column will take precedence. To access the other column(s)
 * of the same name, you must use the numeric index of the column or
 * make an alias for the column. For aliased columns, you cannot
 * access the contents with the original column name.
 * </p>
 */
function cubrid_fetch_array ($result, $result_type = null) {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5)<br/>
 * Fetch a result row as an associative array
 * @link http://php.net/manual/en/function.cubrid-fetch-assoc.php
 * @param resource $result 
 * @return array <p>
 * an associative array of strings that corresponds
 * to the fetched row, or false if there are no more rows,
 * or NULL, when process is unsuccessful.
 * </p>
 * <p>
 * If two or more columns of the result have the same field names,
 * the last column will take precedence. To access the other
 * column(s) of the same name, you either need to access the
 * result with numeric indices by using cubrid_fetch_row or
 * add alias names. See the example at the cubrid_fetch_array
 * description about aliases.
 * </p>
 */
function cubrid_fetch_assoc ($result) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Fetch a result row as an object
 * @link http://php.net/manual/en/function.cubrid-fetch-object.php
 * @param resource $result 
 * @param string $class_name [optional] <p>
 * The name of the class to instantiate. If not specified,
 * a stdClass object is returned.
 * </p>
 * @param array $params [optional] <p>
 * An optional array of parameters to pass to the constructor
 * for class_name objects.
 * </p>
 * @return object <p>
 * an object with string properties
 * that correspond to the fetched row, or false if there
 * are no more rows, or NULL, when process is unsuccessful.
 * </p>
 */
function cubrid_fetch_object ($result, $class_name = null, array $params = null ) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Move internal result pointer
 * @link http://php.net/manual/en/function.cubrid-data-seek.php
 * @param resource $result
 * @param int $row_number <p>
 * The desired row number of the new result pointer.
 * </p>
 * @return int <p>
 * CUBRID_CURSOR_SUCCESS = 1, on success,
 * CUBRID_NO_MORE_DATA, when it is not a valid cursor location
 * FALSE on CAS error or row count is 0, or invalid offset.
 * </p>
 */
function cubrid_data_seek ($result, $row_number) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the length of each output in a result
 * @link http://php.net/manual/en/function.cubrid-fetch-lengths.php
 * @param resource $result 
 * @return array <p>
 * A numerical array of lengths on success,
 * or false on failure.
 * </p>
 * <p>
 * If field data type is BLOB/CLOB, cubrid_lob_size()
 * should be used to get the length.
 * </p>
 */
function cubrid_fetch_lengths ($result) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get column information from a result and return as an object
 * @link http://php.net/manual/en/function.cubrid-fetch-field.php
 * @param resource $result 
 * @param int $field_offset [optional] <p>
 * The numerical field offset. If the field offset is not specified, the 
 * next field that was not yet retrieved by this function is retrieved. 
 * The field_offset starts at 0.
 * </p>
 * @return object <p>
 * an object containing field information. The properties
 * of the object are:
 * </p>
 * <ul>
 * <li>name - column name</li>
 * <li>table - name of the table the column belongs to</li>
 * <li>def - default value of the column</li>
 * <li>max_length - maximum length of the column</li>
 * <li>not_null - 1 if the column cannot be &null;</li>
 * <li>primary_key - 1 if the column is a primary key</li>
 * <li>unique_key - 1 if the column is a unique key</li>
 * <li>multiple_key - 1 if the column is a non-unique key</li>
 * <li>numeric - 1 if the column is numeric</li>
 * <li>blob - 1 if the column is a BLOB</li>
 * <li>type - the type of the column</li>
 * <li>unsigned - 1 if the column is unsigned</li>
 * <li>zerofill - 1 if the column is zero-filled</li>
 * </ul>
 */
function cubrid_fetch_field ($result, $field_offset = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the column names in result
 * @link http://php.net/manual/en/function.cubrid-column-names.php
 * @param resource $req_identifier
 * @return array <p>
 * Array of string which containing column names,
 * when process is successful. FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_column_names ($req_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get column types in result
 * @link http://php.net/manual/en/function.cubrid-column-names.php
 * @param resource $req_identifier
 * @return array <p>
 * Array of string which containing column types,
 * when process is successful. FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_column_types ($req_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Move the result set cursor to a specified field offset
 * @link http://php.net/manual/en/function.cubrid-field-seek.php
 * @param resource $result 
 * @param int $field_offset 
 * @return bool Returns true on success or false on failure.
 */
function cubrid_field_seek ($result, $field_offset) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Free the memory occupied by the result data
 * @link http://php.net/manual/en/function.cubrid-free-result.php
 * @param resource $result 
 * @return bool <p>
 * Returns true on success or false on failure.
 * </p>
 * <p>
 * Note that it can only frees the client fetch buffer now,
 * and if you want free all memory, use function
 * cubrid_close_request().
 * </p>
 * <p>
 * It's worth noting that cubrid_query returns a resource
 * only for SELECT, SHOW, EXPLAIN, and DESCRIBE queries.
 * </p>
 */
function cubrid_free_result ($result) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the name of the specified field in a result
 * @link http://php.net/manual/en/function.cubrid-field-name.php
 * @param resource $result 
 * @param int $field_offset <p>
 * The field_offset starts at 0. If field_offset does not exist,
 * an error of level E_WARNING is also issued.
 * </p>
 * @return string <p>
 * The name of the specified field index on
 * success or false on failure.
 * </p>
 */
function cubrid_field_name ($result, $field_offset) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get name of the table the specified field is in
 * @link http://php.net/manual/en/function.cubrid-field-table.php
 * @param resource $result 
 * @param int $field_offset 
 * @return string <p>
 * The name of the table on success,
 * FALSE when field_offset value is invalid, or
 * -1 if SQL sentence is not SELECT.
 * </p>
 */
function cubrid_field_table ($result, $field_offset) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Returns the length of the specified field
 * @link http://php.net/manual/en/function.cubrid-field-len.php
 * @param resource $result 
 * @param int $field_offset <p>
 * The field_offset starts at 0. If field_offset does not exist,
 * an error of level E_WARNING is also issued.
 * </p>
 * @return int <p>
 * The length of the specified field index
 * on success, or false on failure.
 * </p>
 */
function cubrid_field_len ($result, $field_offset) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the type of the specified field in a result
 * @link http://php.net/manual/en/function.cubrid-field-type.php
 * @param resource $result 
 * @param int $field_offset <p>
 * The field_offset starts at 0. If field_offset does not exist,
 * an error of level E_WARNING is also issued.
 * </p>
 * @return string <p>
 * On success the returned field type will be one of
 * "int", "real", "string", "blob", and others as
 * detailed in the CUBRID documentation. Otherwise, FALSE
 * when invalid field_offset value, or -1 if SQL sentence
 * is not SELECT.
 * </p>
 */
function cubrid_field_type ($result, $field_offset) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the flags associated with the specified field in a result
 * @link http://php.net/manual/en/function.cubrid-field-flags.php
 * @param resource $result 
 * @param int $field_offset <p>
 * The field_offset starts at 0. If field_offset does not exist,
 * an error of level E_WARNING is also issued.
 * </p>
 * @return string <p>
 * a string of flags associated with the result,
 * or FALSE when invalid field_offset value, or -1 if SQL sentence
 * is not SELECT.
 * </p>
 * <p>
 * The following flags are reported, if your version of CUBRID
 * is current enough to support them: "not_null", "primary_key",
 * "unique_key", "foreign_key", "auto_increment", "shared",
 * "reverse_index", "reverse_unique", and "timestamp".
 * </p>
 */
function cubrid_field_flags ($result, $field_offset) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Escapes special characters in a string for use in a SQL statement
 * @link http://php.net/manual/en/function.cubrid-real-escape-string.php
 * @param string $unescaped_string <p>
 * The string that is to be escaped.
 * </p>
 * @param resource $conn_identifier [optional]
 * @return string the escaped string, or false on error.
 */
function cubrid_real_escape_string ($unescaped_string, $conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Returns the current CUBRID connection character set
 * @link http://php.net/manual/en/function.cubrid-client-encoding.php
 * @param resource $conn_identifier [optional]
 * @return string <p>
 * the default character set name for the
 * current connection on success, or false on failure.
 * </p>
 */
function cubrid_client_encoding ($conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Ping a server connection or reconnect if there is no connection
 * @link http://php.net/manual/en/function.cubrid-ping.php
 * @param resource $conn_identifier [optional]
 * @return bool <p>
 * true if the connection to the server is working,
 * otherwise false.
 * </p>
 */
function cubrid_ping ($conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the client library version info
 * @link http://php.net/manual/en/function.cubrid-get-client-info.php
 * @return string <p>
 * The CUBRID client version on success,
 * or false on failure.
 * </p>
 */
function cubrid_get_client_info () {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get CUBRID server version info
 * @link http://php.net/manual/en/function.cubrid-get-server-info.php
 * @param resource $conn_identifier [optional]
 * @return bool <p>
 * the CUBRID server version on success or false on failure.
 * </p>
 */
function cubrid_get_server_info ($conn_identifier = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.4.0)<br/>
 * Get auto-commit mode of the connection
 * @link http://php.net/manual/en/function.cubrid-get-autocommit.php
 * @param resource $conn_identifier
 * @return bool TRUE, if autocommit is set to true. FALSE otherwise.
 */
function cubrid_get_autocommit ($conn_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.4.0)<br/>
 * Get auto-commit mode of the connection
 * @link http://php.net/manual/en/function.cubrid-set-autocommit.php
 * @param resource $conn_identifier
 * @param bool $mode <p>
 * Auto-commit mode. The following constants can be used:
 * CUBRID_AUTOCOMMIT_FALSE, CUBRID_AUTOCOMMIT_TRUE
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_set_autocommit ($conn_identifier, $mode) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Get result data
 * @link http://php.net/manual/en/function.cubrid-db-name.php
 * @param array $result <p>
 * The result pointer from a call to cubrid_list_dbs.
 * </p>
 * @param int $index <p>
 * The index into the result set.
 * </p>
 * @return string <p>
 * the database name on success, and false on failure. If false
 * is returned, use cubrid_error to determine the nature
 * of the error.
 * </p>
 */
function cubrid_db_name ($result, $index) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Get result data
 * @link http://php.net/manual/en/function.cubrid-db-parameter.php
 * @param resource $conn_identifier <p>
 * The CUBRID connection. If the connection identifier is not specified,
 * the last link opened by cubrid_connect() is assumed.
 * </p>
 * @return array <p>
 * An associative array with CUBRID database
 * parameters; on success. FALSE on failure.
 * </p>
 */
function cubrid_db_parameter ($conn_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.4.0)<br/>
 * Sets the CUBRID database parameters
 * @link http://php.net/manual/en/function.cubrid-set-db-parameter.php
 * @param resource $conn_identifier <p>
 * The CUBRID connection. If the connection identifier is not specified,
 * the last link opened by cubrid_connect() is assumed.
 * </p>
 * @param int $param_type <p>
 * Database parameter type. Can be PARAM_ISOLATION_LEVEL,
 * or PARAM_LOCK_TIMEOUT.
 * </p>
 * @param int $param_value <p>
 * Isolation level value (1-6) or lock timeout (in seconds) value.
 * </p>
 * @return array <p>
 * An associative array with CUBRID database
 * parameters; on success. FALSE on failure.
 * </p>
 */
function cubrid_set_db_parameter ($conn_identifier, $param_type, $param_value) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Get the query timeout value of the request
 * @link http://php.net/manual/en/function.cubrid-get-query-timeout.php
 * @param resource $req_identifier <p>
 * Request identifier.
 * </p>
 * @return int <p>
 * Success: the query timeout value of the current request.
 * Units of msec. Failure: FALSE
 * </p>
 */
function cubrid_get_query_timeout ($req_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Get the query timeout value of the request
 * @link http://php.net/manual/en/function.cubrid-set-query-timeout.php
 * @param resource $req_identifier <p>
 * Request identifier.
 * </p>
 * @param int $timeout <p>
 * Timeout time, unit of msec.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_set_query_timeout ($req_identifier, $timeout) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get table name using OID
 * @link http://php.net/manual/en/function.cubrid-tablename.php
 * @param resource $conn_identifier <p>
 * A connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance that you want to check the existence.
 * To get the current OID of the request, use
 * cubrid_current_oid() function.
 * </p>
 * @return string The name of the table on success or false on failure;
 */
function cubrid_get_class_name ($conn_identifier, $oid) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get a column using OID
 * @link http://php.net/manual/en/function.cubrid-get.php
 * @param resource $conn_identifier <p>
 * A connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance that you want to read.
 * To get the current OID of the request, use
 * cubrid_current_oid() function.
 * </p>
 * @param string $attr [optional] <p>
 * Name of the attribute that you want to read.
 * </p>
 * @return mixed <p>
 * Content of the requested attribute,
 * when process is successful; When attr is set with string
 * data type, the result is returned as a string; when attr is
 * set with array data type (0-based numerical array), then the
 * result is returned in associative array. When attr is omitted,
 * then all attributes are received in array form.
 * </p>
 * <p>
 * FALSE when process is unsuccessful or result is NULL
 * (If error occurs to distinguish empty string from NULL,
 * then it prints the warning message. You can check the
 * error by using cubrid_error_code()).
 * </p>
 */
function cubrid_get ($conn_identifier, $oid, $attr = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Check whether the instance pointed by OID exists
 * @link http://php.net/manual/en/function.cubrid-is-instance.php
 * @param resource $conn_identifier <p>
 * A connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance that you want to check the existence.
 * To get the current OID of the request, use
 * cubrid_current_oid() function.
 * </p>
 * @return int <p>
 * 1, if such instance exists; 0, if such instance
 * does not exist; -1, in case of error
 * </p>
 */
function cubrid_is_instance ($conn_identifier, $oid) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Commit a transaction
 * @link http://php.net/manual/en/function.cubrid-commit.php
 * @param resource $conn_identifier
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_commit ($conn_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Roll back a transaction
 * @link http://php.net/manual/en/function.cubrid-rollback.php
 * @param resource $conn_identifier
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_rollback ($conn_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get OID of the current cursor location
 * @link http://php.net/manual/en/function.cubrid-commit.php
 * @param resource $req_identifier
 * @return string <p>
 * OID of current cursor location, when process
 * is successful. FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_current_oid ($req_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Delete an instance using OID
 * @link http://php.net/manual/en/function.cubrid-commit.php
 * @param resource $conn_identifier
 * @param string $oid <p>
 * OID of the instance that you want to delete.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE,
 * when process is unsuccessful.
 * </p>
 */
function cubrid_drop ($conn_identifier, $oid) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the facility code of error
 * @link http://php.net/manual/en/function.cubrid-error-code-facility.php
 * @return int <p>
 * Facility code of the error code that occurred:
 * CUBRID_FACILITY_DBMS, CUBRID_FACILITY_CAS,
 * CUBRID_FACILITY_CCI, CUBRID_FACILITY_CLIENT
 * </p>
 */
function cubrid_error_code_facility () {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Close BLOB/CLOB data
 * @link http://php.net/manual/en/function.cubrid-lob-close.php
 * @param array $lob_identifier_array <p>
 * LOB identifier array return from cubrid_lob_get().
 * </p>
 * @return bool <p>
 * TRUE, when process is successful.
 * FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_lob_close ($lob_identifier_array) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Close BLOB/CLOB data
 * @link http://php.net/manual/en/function.cubrid-lob-export.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param resource $lob_identifier <p>
 * LOB identifier.
 * </p>
 * @param string $path_name <p>
 * Path name of the file.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful.
 * FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_lob_export ($conn_identifier, $lob_identifier, $path_name) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * cubrid_lob_get() is used to get BLOB/CLOB meta info from
 * CUBRID database. CUBRID gets BLOB/CLOB by executing the SQL statement,
 * and returns all LOBs as a resource array. Be sure that the SQL
 * retrieves only one column and its data type is BLOB or CLOB.
 * Remember to use cubrid_lob_close() to release the LOBs if you
 * don't need it any more.
 * @link http://php.net/manual/en/function.cubrid-lob-get.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param array $sql <p>
 * SQL statement to be executed.
 * </p>
 * @return array <p>
 * Return an array of LOB resources, when process
 * is successful. FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_lob_get ($conn_identifier, $sql) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Read BLOB/CLOB data and send straight to browser
 * @link http://php.net/manual/en/function.cubrid-lob-send.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param resource $lob_identifier <p>
 * LOB identifier.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_lob_send ($conn_identifier, $lob_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.1)<br/>
 * Read BLOB/CLOB data and send straight to browser
 * @link http://php.net/manual/en/function.cubrid-lob-size.php
 * @param resource $lob_identifier <p>
 * LOB identifier.
 * </p>
 * @return string <p>
 * A string representing LOB data size, when
 * process is successful. FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_lob_size ($lob_identifier) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Set a read lock on the given OID
 * @link http://php.net/manual/en/function.cubrid-lock-read.php
 * @param resource $conn_identifier <p>
 * LOB identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance that you want to put read lock on.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_lock_read ($conn_identifier, $oid) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Set a write lock on the given OID
 * @link http://php.net/manual/en/function.cubrid-lock-write.php
 * @param resource $conn_identifier <p>
 * LOB identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance that you want to put write lock on.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_lock_write ($conn_identifier, $oid) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Move the cursor in the result
 * @link http://php.net/manual/en/function.cubrid-move-cursor.php
 * @param resource $req_identifier <p>
 * Request identifier.
 * </p>
 * @param int $offset <p>
 * Number of units you want to move the cursor.
 * </p>
 * @param int $origin <p>
 * Location where you want to move the cursor from
 * CUBRID_CURSOR_FIRST, CUBRID_CURSOR_CURRENT, CUBRID_CURSOR_LAST.
 * </p>
 * @return int <p>
 * CUBRID_CURSOR_SUCCESS, when process is successful.
 * CUBRID_NO_MORE_DATA, when it is not a valid cursor location.
 * CUBRID_CURSOR_ERROR, in case of error.
 * </p>
 */
function cubrid_move_cursor ($req_identifier, $offset, $origin = CUBRID_CURSOR_CURRENT) {}

/**
 * (PHP 5, CUBRID &gt;= 8.4.0)<br/>
 * Get result of next query when executing multiple SQL statements
 * @link http://php.net/manual/en/function.cubrid-next-result.php
 * @param resource $result <p>
 * result comes from a call to cubrid_execute().
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE, when
 * process is unsuccessful.
 * </p>
 */
function cubrid_next_result ($result) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Prepare an SQL statement for execution
 * @link http://php.net/manual/en/function.cubrid-prepare.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param string $prepare_stmt <p>
 * Prepare query.
 * </p>
 * @param int $option [optional] <p>
 * OID return option CUBRID_INCLUDE_OID.
 * </p>
 * @return resource <p>
 * Request identifier, if process is successful;
 * FALSE, if process is unsuccessful.
 * </p>
 */
function cubrid_prepare ($conn_identifier, $prepare_stmt, $option = 0) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Update a column using OID
 * @link http://php.net/manual/en/function.cubrid-put.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance that you want to update.
 * </p>
 * @param string $attr [optional] <p>
 * Name of the attribute that you want to update.
 * </p>
 * @param mixed $value <p>
 * New value that you want to assign to the attribute.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful.
 * FALSE, when process is unsuccessful.
 * </p>
 */
function cubrid_put ($conn_identifier, $oid, $attr = null, $value) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the requested schema information
 * @link http://php.net/manual/en/function.cubrid-schema.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param int $schema_type <p>
 * Schema data that you want to know.
 * </p>
 * @param string $class_name [optional] <p>
 * Table you want to know the schema of.
 * </p>
 * @param string $attr_name [optional] <p>
 * Attribute you want to know the schema of.
 * </p>
 * @return array <p>
 * Array containing the schema information,
 * when process is successful; FALSE, when process is
 * unsuccessful.
 * </p>
 */
function cubrid_schema ($conn_identifier, $schema_type, $class_name = null, $attr_name = null) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Delete an element from sequence type column using OID
 * @link http://php.net/manual/en/function.cubrid-seq-drop.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance you want to work with.
 * </p>
 * @param string $attr_name <p>
 * Name of the attribute that you want to delete an element from.
 * </p>
 * @param int $index <p>
 * Index of the element that you want to delete (1-based).
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE,
 * when process is unsuccessful.
 * </p>
 */
function cubrid_seq_drop ($conn_identifier, $oid, $attr_name, $index) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Insert an element to a sequence type column using OID
 * @link http://php.net/manual/en/function.cubrid-seq-insert.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance you want to work with.
 * </p>
 * @param string $attr_name <p>
 * Name of the attribute you want to insert an instance to.
 * </p>
 * @param int $index <p>
 * Index of the element that you want to delete (1-based).
 * </p>
 * @param string $seq_element <p>
 * Content of the element that you want to insert.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE,
 * when process is unsuccessful.
 * </p>
 */
function cubrid_seq_insert ($conn_identifier, $oid, $attr_name, $index, $seq_element) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Update the element value of sequence type column using OID
 * @link http://php.net/manual/en/function.cubrid-seq-put.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance you want to work with.
 * </p>
 * @param string $attr_name <p>
 * Name of the attribute that you want to update an element.
 * </p>
 * @param int $index <p>
 * Index of the element that you want to delete (1-based).
 * </p>
 * @param string $seq_element <p>
 * New content that you want to use for the update.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE,
 * when process is unsuccessful.
 * </p>
 */
function cubrid_seq_put ($conn_identifier, $oid, $attr_name, $index, $seq_element) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Insert a single element to set type column using OID
 * @link http://php.net/manual/en/function.cubrid-seq-add.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance you want to work with.
 * </p>
 * @param string $attr_name <p>
 * Name of the attribute you want to insert an element.
 * </p>
 * @param string $seq_element <p>
 * Content of the element that you want to insert.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE,
 * when process is unsuccessful.
 * </p>
 */
function cubrid_seq_add ($conn_identifier, $oid, $attr_name, $seq_element) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Delete an element from set type column using OID
 * @link http://php.net/manual/en/function.cubrid-set-drop.php
 * @param resource $conn_identifier <p>
 * Connection identifier.
 * </p>
 * @param string $oid <p>
 * OID of the instance you want to work with.
 * </p>
 * @param string $attr_name <p>
 * Name of the attribute you want to delete an element from.
 * </p>
 * @param string $set_element <p>
 * Content of the element you want to delete.
 * </p>
 * @return bool <p>
 * TRUE, when process is successful. FALSE,
 * when process is unsuccessful.
 * </p>
 */
function cubrid_set_drop ($conn_identifier, $oid, $attr_name, $set_element) {}

/**
 * (PHP 5, CUBRID &gt;= 8.3.0)<br/>
 * Get the CUBRID PHP module's version
 * @link http://php.net/manual/en/function.cubrid-version.php
 * @return string Version information (eg. "8.4.1.0001").
 */
function cubrid_version () {}

/**
 * Columns are returned into the array having a numerical index to the
 * fields. This index starts with 0, the first field in the result.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_NUM', 1);

/**
 * Columns are returned into the array having the fieldname as the array
 * index.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_ASSOC', 2);

/**
 * Columns are returned into the array having both a numerical index
 * and the fieldname as the array index.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_BOTH', 3);

/**
 * Get query result as an object.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_OBJECT', 4);

/**
 * Determine whether to get OID during query execution.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_INCLUDE_OID', 1);

/**
 * Execute the query in asynchronous mode.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_ASYNC', 2);

/**
 * Execute the query in synchronous mode.
 * This flag must be set when executing multiple SQL statements.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_EXEC_QUERY_ALL', 4);

/**
 * Returned value of cubrid_move_cursor() function
 * in case of success.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_CURSOR_SUCCESS', 1);

/**
 * Returned value of cubrid_move_cursor() function in case
 * of failure.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_NO_MORE_DATA', 0);

/**
 * Returned value of cubrid_move_cursor() function in case
 * of failure.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_CURSOR_ERROR', -1);

/**
 * Enable the auto-commit mode.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_AUTOCOMMIT_TRUE', 1);

/**
 * Disable the auto-commit mode.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_AUTOCOMMIT_FALSE', 0);

/**
 * Move current cursor to the first position in the result.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_CURSOR_FIRST', 0);

/**
 * Move current cursor as a default value if the origin is
 * not specified.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_CURSOR_CURRENT', 1);

/**
 * Move current cursor to the last position in the result.
 * @link http://php.net/manual/en/cubrid.constants.php
 */
define ('CUBRID_CURSOR_LAST', 2);

// End of cubrid v.1.0
?>
