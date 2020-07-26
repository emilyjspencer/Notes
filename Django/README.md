### Django

Django is a web application framework written in Python

### Installing django, pip and virtual environment

Installing pip

```html
sudo easy_install pip
```

Upgrading pip

```html
sudo pip install -upgrade pip
```

### Creating a virtual environment

A virtual environment virtualenv isolates the Pythons/django setup on a per-project basis.

Create a virtualenv:

```
python3 -m venv myvenv
```

Creates a folder called myvenv which contains the virtual environment - directories and files

Start the virtual environment:

```
source myvenv/bin/active
```

You can verify that you are in the virtualenv because the name of it, in this case, myvenv, will be prepended to the console.

When working in a virtualenv, Python automatically refers to the correct version so that you can use Python instead of Python3.

### Installing Django

Use the requirements.text file to list dependencies:

```html
touch requirements.txt
```

Add Django to the requirements.txt, as you would with a Gem file:

requirements.txt
```html
Django~=2.2.4
```

Install the dependencies by running:
```html
pip install -r requirements.txt
```

### Creating a project with Django

Within the virtual environment:

```html
django-admin startproject projectname .
```

Creates a new folder with the name specified

Contains the following files:

* manage.py
* _init_.py
* settings.py
* urls.py
* wsgi.py


manage.py is a script that enables the developer to start a server.
Use the following command:
```html
python manage.py runserver
```

settings.py - contains the configuration

urls.py - contains a list of patterns used by urlresolver

### Creating a database with Django