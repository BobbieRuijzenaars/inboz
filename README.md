# inboz
Found a supicious file on a webserver. 
It's a webshell that uses a COOKIE and POST data to pass the commands.

Used curl for testing:
```
curl -d "key:value" -b "cookie:nomnomnnom" -X POST  http://localhost/Inboz.php
```
