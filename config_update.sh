#After you have created all the users in the /var/www/html/ directory. 
#Change {1..34} to the number of users in training.

#Finding all the config files.
files=$(find . -type f -name config.php | grep -v SecureCodeTrainingPHP)

#Count the number of files
i=0
for f in $files; do i=$((i+1));done

#Ensure that there is the more than i number of users created.
$created=$(mysql -e "SELECT user from mysql.user where user REGEXP 'learning[0-9]'" | grep -v user| sed -e 's/learning//g' | sort -nr | head -1)

if [ $created -gt $i ]; then
    j=1
    for f in $files; do
        sed -i "s/changemedatabase/db$j/g" -i "s/changemeusername/learning$j/g" -i "s/changemepassword/Secure@Training@$j/g" "$f"
    done
fi



