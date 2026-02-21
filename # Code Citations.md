# Code Citations

## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

##
```


## License: unknown
https://github.com/akaunting/akaunting/blob/f126cc52a960e10bcaf7fa6c51ba77cafba3c3cb/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

## Step 4 — Set
```


## License: unknown
https://github.com/delhiarpitpatel/laravel-user-permission-management/blob/facf72a3a064b76c47098deb7a6ff6de6ace9541/index.php

```
The cleanest git-friendly setup is to keep the Laravel repo **outside** `public_html/`, then have `public_html/` only contain a thin `index.php` and `.htaccess` pointing to it. That way `git pull` never touches your web entry point.

## Step 1 — Move the project outside public_html

```bash
cd ~
mv ~/public_html ~/example-laravel
mkdir ~/public_html
```

## Step 2 — Create `public_html/.htaccess`

```bash
cat > ~/public_html/.htaccess << 'EOF'
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
EOF
```

## Step 3 — Create `public_html/index.php` pointing to your repo

```bash
cat > ~/public_html/index.php << 'EOF'
<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../example-laravel/vendor/autoload.php';

$app = require_once __DIR__.'/../example-laravel/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
)->send();

$kernel->terminate($request, $response);
EOF
```

## Step 4 — Set
```

