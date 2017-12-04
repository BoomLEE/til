# About Apache

### Clients, Servers, and URLs
- Uniform Resource Locators
  - protocol (e.g. http)
  - servername (e.g. www.apache.org)
  - URL-path (e.g. /docs/current/getting-started.html)
  - a query string (e.g. ?arg=value)

### Hostnames and DNS
- A [hosts file](https://en.wikipedia.org/wiki/Hosts_file) will probably be located at __/etc/hosts__.
- Virtual hosts
 - More than one __hostname__ may point to the __same IP address__.
 - More than one __IP address__ can be attached to the __same physical server__.
 - You can run more than one __web site__ on the same __physical server__.

### Configuration Files and Directives
- the default location of the configuration files is __/usr/local/apache2/conf__.
- The default configuration file is usually called __httpd.conf__ .
- [.htaccess](http://httpd.apache.org/docs/2.4/howto/htaccess.html) are primarily for people who do not have access to the main server configuration file(s).

### Log Files and Troubleshooting
- The location of the error log is defined by the [ErrorLog](http://httpd.apache.org/docs/2.4/logs.html) directive,
  which may be set globally, or per virtual host.
- Entries in the error log tell you what went wrong, and when.

## See also
- [About Nginx](https://nginx.org/en/)

## References
- [Getting Started Apache](http://httpd.apache.org/docs/2.4/getting-started.html)
- [hosts file](https://en.wikipedia.org/wiki/Hosts_file)
- [DNS:Domain Name System](https://en.wikipedia.org/wiki/Domain_Name_System)
- [Apache httpd default layout](https://wiki.apache.org/httpd/DistrosDefaultLayout)

## External links
- etc
