# Uses

#Init Class
$env = new Env;

#Init file with path
$data = $env->init(".env");

#Get value of any key or use default with it in case of empty value
$data->env('APP_KEY', 'user input');


#Example file data
APP_NAME=""
APP_VERSION=""
APP_ENV=
APP_KEY=base64:0dt0662DOpf4syHE2JxwHwoZsYlCQ3jOvItzpl8WBpQ=
APP_DEBUG=true
APP_CIPHER=AES-256-CBC
DEBUG_MODE=
