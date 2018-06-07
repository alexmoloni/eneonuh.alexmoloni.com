#!/usr/bin/env bash

declare -A config

### Database Settings ###

#careful - only alphanumeric chars and _ and $ no hyphens allowed in db name
config[dbuser]="eneonuh_alexmoloni_com"

#has to satisfy mysql password plugin restrictions
#one non alphanumeric, at least one uppercase, at least one number, minimum 8 chars
config[dbpass]="ew7xcNT@%MzP"
#careful - only alphanumeric chars and _ and $ no hyphens allowed in db name
config[dbname]="eneonuh_alexmoloni_com"

#the prefix added to the database tables
#add an underscore at the end of prefix for better clarity
config[dbprefix]="eneonuh_"

### Wordpress settings ###

#The url under which the site is available
#For staging sites usually will be [site].alexmoloni.com
config[wpurl]="eneonuh.alexmoloni.com"

#the title for the site
config[wptitle]="eneonuh"

#name for admin user to be created
config[wpuser]="alexito"

#admin users password @, #, *, etc.
#you can use special characters like
config[wppass]="Qw/r=x@*D!3f2"

#the email for notifications for the admin user
config[wpemail]="alejandro.moloniewicz@gmail.com"