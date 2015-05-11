#git-dyno-htaccess
### Dynamically generate .htaccess rules from a PHP file.

Solve deployment issues when working within on a web project, where each contributor might have different server setup. 
####Include in your workflow 

Better than adding and removing `.gitignore` rules, or continuous update to the `.htaccess` file everytime.

##Installation

* Go to your local repository and clone __git-dyno-htaccess__

    ```
    cd /path/to/my/repo
    git clone https://github.com/mchebib/git-dyno-htaccess.git
    ```
    
    This shoud create a new directory inside your repository - _will be delete later*_.
    
* Move core files to your repository

    ```
    mv git-dyno-htaccess/git-dyno-htaccess-install git-dyno-htaccess/git-dyno-htaccess.php git-dyno-htaccess/post-checkout .
    ```
    
    *OPTIONAL*: Move the file `prepend.php`
    ```
    mv git-dyno-htaccess/prepend.php .  ## Optional
    ```
    This was inspired by [Kev's question](https://stackoverflow.com/q/13230984/2172146)
    
* Delete the new directory
    ```
    rm git-dyno-htaccess
    ```
    
* Run the executable file to initiate the Git hook
    ** This is one time onle, the file will delete itself **
    ```
    bash git-dyno-htaccess-install
    ```
    
* Edit the new `git-dyno-htaccess.php` with your `.htaccess` rules


* Stage & commit the newly added files
    ```
    git add git-dyno-htaccess.php
    git commit -m "Added git-dyno-htaccess - .htaccess will be regenerated right after every 'git checkout'. Contributors need to be notified."
    ```
    
* __FINALLY:__ ... that's it.. Just keep an eye on your git-dyno-htaccess.php file, and `git checkout` after every `git pull`

   
###That is what you add into your team's workflow
```
    git checkout
    git checkout
    git checkout
    ```
    
 

_MIT License_