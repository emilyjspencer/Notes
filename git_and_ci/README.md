# Git and CI
 
 ### Create a branch 
```html
 git branch name_of_branch
 ```

 ### Create a branch and switch to it
```html
git checkout -b name_of_branch
```

 ### Switch to a different git branch
 ```html
 git checkout name_of_branch
 ```

 ### How a hard reset - will remove code that has been pushed to GitHub. Also deletes it locally,so not recommended
 ```html
 git reset HEAD^ --hard
 git push -f
 ```

 ### Do a soft reset - will remove things from the staging area
 ```html
git reset --soft HEAD^ 
 ```
 ### HEAD - refers to the current branch

 ### master - refers to the repo's default branch(main)

 ### origin - refers to the remote repo - the shorthand for the remote repository

 ### origin/master - the default/main branch of the remote repository

 ### Add something to .gitignore
 ```html
 echo "file_to_add" >> .gitignore
 ```

 ### List hidden files
 ```html
 ls -a
 ```

 ### List in long format
 ```html
 ls -l
 ```

 ### Three classes of permissions:
 ```html
 user
 group
 others
 ```

 ### View permissions
 ```html
 ls -l
 ```
 Need to check the columns with r w x -  read, write, execute permissions
 First column: user permissions
 Second column: group permissions
 Third column: other permissions

 ### Change permissions
 ```html
 chmod
 ```
 e.g give the file sunny.text read and write permissions:
 ```html
 chmod u+w sunny.txt
 ```
 ### Read files without opening them
 ```html
 cat file_name
 ```

 ### Combine two files
 ```html
 cat file1 file2 > new_combined_file
 ```

 ### Check username
 ```html
 whoami
 ```

### Continuous Integration - CI

An automated process that runs a suite of tests when code is submitted to a version control repo i.e. GitHub or through a pull request

* origin/master should pass its tests
* all commits on the master branch should compile and pass all tests
* origin/master should be deployable at all times
* all commits on the master branch should be of sufficient quality to be deployed
* pull requests should be short-lived - four hours maximum
* pull requests should be short - 400 lines maximum
* pull requests should pass all tests and not have linter warnings

### Automated build tools
* Travis CI
* CircleCI
* Jenkins
* Gitlab CI

Automated build tools run tests every time a new commit is pushed to a pull request branch and also runs the tests as an integration with master





 
