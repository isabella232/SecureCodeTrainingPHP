cd /var/www/html
find . -maxdepth 1 -type d ! -name SecureCodeTrainingPHP ! -path . -exec cp -r SecureCodeTrainingPHP/* {} \;