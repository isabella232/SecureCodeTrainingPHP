cd /var/www/html
find . -maxdepth 1 -type d | grep -v SecureCodeTrainingPHP | xargs -I {} cp -r SecurecodeTrainingPHP/* {}/