# MVC-P5

## Install
To use the project locally, you must install a local server with wamp or xampp for example.
You have to create a database, I’ll give you the structure of the database. 
Download mvc-p5.sql for integrate the database.

### Instructions
You must create a json file to configure and use your database with the application
For the development phase, leave the environment line as it is. For the production phase, the environment line must be removed.
Example file JSON : name file = Config.json in the folder Config !(Important)
```javascript
{
	"autoloadFolder": [
		"Framework",
		"Framework/Exception",
		"Controller",
		"Model/Entite",
		"Model/Manager"
	],
	"database":  {
            "dbname": "",
            "host": "",
            "user": "",
            "password": ""
    },
	"basepath" : "/MVC-p5",
	"environement" : "dev"
}
```

### Recaptcha (option)
The Recaptcha needs to be changed as it will not work. It is configured for a local test phase only on the author’s environment. It is useless to try to hijack the secret and public keys.

### Codacy
![alt text](https://github.com/Damien30340/MVC-P5/blob/main/Public/media/A_Codacy.png "Codacy A")
