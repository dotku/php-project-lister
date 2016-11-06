#PHP Project Lister
A project lister view by reading the directories.

## Sample Folder Structure

```
/var/www/html     # install location
/var/www          # php composer vendor and projects location
/var/www/vendor   # php composer vendors
/var/www/projects # your project location
```
\*\* if you want to make your project accessabile,
you can simple create a symlink to the html folder, such as
`ln -s /var/www/project/projectA /var/www/html/projectA`.

In windows system, please refer to `mklink` command.

## Usage
1. Run `composer install` in
2. Create your poject under /var/www/projects
3. Enjoy the project viewer 
