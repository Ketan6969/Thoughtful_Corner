#!/bin/bash

# Directory containing PHP files
DIRECTORY="."

# Loop through all PHP files in the directory
for file in "$DIRECTORY"/*.php; do
    # Check if file exists and is not empty
    if [ -s "$file" ]; then
        # Add ob_start() at the beginning and ob_end_flush() at the end
        sed -i '1s/^/<?php ob_start(); ?>\n/' "$file"
        echo -e "\n<?php ob_end_flush(); ?>" >> "$file"
    fi
done

echo "Added ob_start() and ob_end_flush() to all PHP files in $DIRECTORY"
