# Your Project Name

Automated wpscan results to email.

## Installation

1.Clone the project your sever (in my case MAMP/htdocs)
2.Run composer install
3.Go to the run_commands.sh configure the correct paths and insert your site url
4.Go to send_email.php config your smtp (In my case mail.smtp2go.com) and your sender/recipient options
5.Run a cronjob on run_commands.sh

## Usage

Automatically runs wpscan on your sever then sends the results to your email.
