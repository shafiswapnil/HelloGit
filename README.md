# HelloGit
Git and GitHub both are fantastic!

## Lesson 5
In Lesson 5: Git Remote, push, pull, I've learnt
  - Remote
  - Push
  - Pull
  - Benefits of using Git Repository
  - Providers

Also I'm providing those commands I've used in Lesson 5.

## Remote
Where we actually push codes to the Internet, that is called remote. It's not necessary to think that we have to host our codes to Internet, rather we can host them in Intranet also.

## Push
``` $ git push ``` is used for pushing current files to the Internet.

## Pull
``` $ git pull ``` is used for pulling latest working files into working directory from the server.
TIP: Always pull codes from server if you have multi developer project.

## Benefits of using Git Repository
   - Your codes will be safe. Even in case of hardisk failure, your codes will be safe.
   - If you work in different machines separately, then you can sync your code between all of your devices.
   - If too many developers work in same project, then hosting your code to internet is the only way. This way all the developers can sync their code between them.

## Providers
Available Code hosting providers.

| Provider Name | Link |
| ------ | ------ |
| BitBucket | https://bitbucket.org/product |
| GitHub | https://github.com/ |
| Get Meat | http://getmeat.io |
| GitLab | https://about.gitlab.com/ |

## Usage
To start using git remote, you can do it in an existing file or on a new file.

To start a new project, all you have to do is to run,
```sh
$ git clone git@github.com:shafiswapnil/HelloGit.git <folderName>
```

Or on an existing project, you will have to,
```sh
$ git remote add origin git@github.com:shafiswapnil/HelloGit.git
```
Here I named my GitHub remote by 'origin'. You can name it anything. But 'origin' is mostly used.

To view all remotes added in a project, you can run
```sh
 $ git remote show
```

To view remote URL then,
```sh
$ git remote show origin
```

To Push code to the server, you have to run
```sh
$ git push origin master
```

To Pull code from server, you have to run
```sh
$ git pull origin master
```
