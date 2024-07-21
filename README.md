# Uses

# Init Class<br/>
$env = new Ndinkar\Env;<br/>

# Init file with path<br/>
$data = $env->init(".env");<br/>

# Get value of any key or use default with it in case of empty value<br/>
$data->env('APP_KEY');<br/>
or<br/>
$data->env('APP_KEY', 'user input');<br/>


# Example file data<br/>
APP_NAME=""<br/>
APP_VERSION=""<br/>
APP_ENV=<br/>
APP_KEY=base64:0dt0662DOpf4syHE2JxwHwoZsYlCQ3jOvItzpl8WBpQ=<br/>
APP_DEBUG=true<br/>
APP_CIPHER=AES-256-CBC<br/>
DEBUG_MODE=<br/>
