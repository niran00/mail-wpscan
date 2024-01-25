# Your Project Name

Automated wpscan results to email.

## Installation

1.Clone the project your sever (in my case MAMP/htdocs)<br>
2.Run composer install<br>
3.Go to the run_commands.sh set the correct paths and insert your site url<br>
4.Go to send_email.php config your smtp (In my case mail.smtp2go.com) and your sender/recipient options<br>
5.Run a cronjob on path-to-project/run_commands.sh > path-to-project/logfile.log 2>&1

## Usage

Automatically runs wpscan on your sever then sends the results to your email.
