## Quick Start

1. Clone the repository
2. Clone the Backend Python Flask App in this repository "https://github.com/sc23mm/MSc-project-Backend". Make sure you are running this backend. 
3. Get the server ip address of Backend running (eg "http://127.0.0.1:5000/predict"). ADD `/predict` to the local ip address which you have noted after running the Backend.
4. Put the ip address in the `MSC-Project-Frontend/assets/js/script.js` line 107 eg `http://YOUR-BACKEND-LOCAL-IP/predict`
3. This is optional Add your OpenAI API key to `settings.php` (see `settings.sample.php`) 
4. Start a server `php -S localhost:8080`

```console
$ php -S localhost:8080
```

4. Go to http://localhost:8080


## API key[OPTIONAL]

You will need an API key from OpenAI to use the code. The API key must be added to the `settings.php`.
