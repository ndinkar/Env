# Uses

# Init Class & Init file with path<br/>
use Ndinkar\Env;<br/>
$env = new Env("filepath/.env");<br/>

# Get value of any key or use default with it in case of empty value<br/>
$data->env('APP_KEY');<br/>
# or<br/>
$data->env('APP_KEY', 'user input');<br/>

# Example file data<br/>
APP_NAME=""<br/>
APP_VERSION=""<br/>
APP_ENV=<br/>
APP_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br/>
APP_DEBUG=true<br/>
APP_CIPHER=AES-256-CBC<br/>
DEBUG_MODE= <br/>

Install using : composer require Ndinkar/Env:dev-master