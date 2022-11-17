Last login: Thu Nov 17 18:46:46 on ttys000
You have new mail.
MacBook-Pro-de-Rafael-3:~ rafaelteixeira$ ear install Net_SMTP Mail
-bash: ear: command not found
MacBook-Pro-de-Rafael-3:~ rafaelteixeira$ pear install Net_SMTP Mail
-bash: pear: command not found
MacBook-Pro-de-Rafael-3:~ rafaelteixeira$ sudo vi /etc/apache2/httpd.conf
Password:
















#
# This is the main Apache HTTP server configuration file.  It contains the
# configuration directives that give the server its instructions.
# See <URL:http://httpd.apache.org/docs/2.4/> for detailed information.
# In particular, see
# <URL:http://httpd.apache.org/docs/2.4/mod/directives.html>
# for a discussion of each configuration directive.
#
# Do NOT simply read the instructions in here without understanding
# what they do.  They're here only as hints or reminders.  If you are unsure
# consult the online docs. You have been warned.
#
# Configuration and logfile names: If the filenames you specify for many
# of the server's control files begin with "/" (or "drive:/" for Win32), the
# server will use that explicit path.  If the filenames do *not* begin
# with "/", the value of ServerRoot is prepended -- so "logs/access_log"
# with ServerRoot set to "/usr/local/apache2" will be interpreted by the
# server as "/usr/local/apache2/logs/access_log", whereas "/logs/access_log"
# will be interpreted as '/logs/access_log'.

#
# ServerRoot: The top of the directory tree under which the server's
# configuration, error, and log files are kept.

