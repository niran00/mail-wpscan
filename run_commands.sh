#!/bin/bash

# Specify full paths
WPCAN_PATH="/usr/local/bin/wpscan"
PHP_PATH="/Applications/MAMP/bin/php/php7.4.33/bin/php"  # Replace {version} with your PHP version

# API_TOKEN="0rCaVkwpKQvatBsg66zapRorZKtU4qWwDxV4j5OCwwg"
SITE_URL="zeracafe.ca"

# Navigate to the script directory
cd /Applications/MAMP/htdocs/mail-wpscan

# Run the first command
$WPCAN_PATH --url $SITE_URL  > wpscan-result.txt

# Check if the first command was successful
if [ $? -eq 0 ]; then
    echo "First command (wpscan) completed successfully. Proceeding to the second command."

    # Run the second command using the PHP binary path
    $PHP_PATH send_email.php

    # Check if the second command was successful
    if [ $? -eq 0 ]; then
        echo "Second command (php send_email.php) completed successfully."
    else
        echo "Error: Second command (php send_email.php) failed."
    fi
else
    echo "Error: First command (wpscan) failed. Exiting."
fi
