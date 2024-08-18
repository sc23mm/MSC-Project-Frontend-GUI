## Quick Start

1. Clone the repository
2. Clone the Backend Python Flask App in this repository "https://github.com/sc23mm/MSc-project-Backend". Make sure you are running this backend. 
3. Get the server ip address of Backend running (eg "http://127.0.0.1:5000/predict").
4. Put the ip address in the `chatbotFrontEnd/assets/js/script.js` line 107 
3. This is optional Add your OpenAI API key to `settings.php` (see `settings.sample.php`) 
4. Start a server `php -S localhost:8080`

```console
$ php -S localhost:8080
```

4. Go to http://localhost:8080

## Docker

```console
$ sudo docker build -t chatwtf .
$ sudo docker run -p 8080:80 chatwtf
```

Note: If you get `caught SIGWINCH, shutting down gracefully`, add the `-d` flag to run it in the background.

## API key

You will need an API key from OpenAI to use the code. The API key must be added to the `settings.sample.php` file, which you will need to rename to `settings.php`.
