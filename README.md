# lab5_557
These are the corrections i made to make the files run properly.
Feel free to download the files provided.

Note: All of these are unsanitized version of the file. 

**login.php**
1. Removed "root" in password to ensure database connectivity without password. This is much more convenient and does not affect the database at all.

**login_secure.php**
1. Removed "root" in password for database connectivity.
2. Original defined "$mysql" instead of "$conn" for database connection thus causing minor issue. Fixed it by changing variable name.

**user.detail.php**
1. Removed "root" in password for database connectivity.

Last but not least, use this injection on username if the one in the instruction is not working:
**' OR '1'='1' --**
you can left the password empty


Contact me for enquiries or correction
also, please star my repo hahahah
Happy hacking! 🦆
