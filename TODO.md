### To Do ###

```sh
|[0] # This command namespace must implement the selenium related interface
| user@host:~$ php app/console igd:codeception:selenium
|- :get | :status | :start | :stop | :remove

|[0] # This command namespace must implement the scaffold interface
| user@host:~$ php app/console igd:codeception:scaffold
|- ( :test | :suite | :module ) --create --remove

|[0] # This command namespace must implement the driver interface
| user@host:~$ php app/console igd:codeception:driver
|- :get | :list | :remove

|[0] # This is an alias to codeception:build native command
| user@host:~$ php app/console igd:codeception:build

|[0] # This is an alias to codeception:bootstrap native command
| user@host:~$ php app/console igd:codeception:bootstrap

|[0] # This command put some useful defaults over the native codeception:run
| user@host:~$ php app/console igd:codeception:run
```
