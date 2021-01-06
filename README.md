# Docker

- 进入容器：`docker exec -it id /bin/bash`
- 拷贝容器文件：`docker cp `

### Nginx管理

- 重新加载配置文件 `docker exec -it nginx nginx -s reload`

### PHP管理

- docker安装PHP扩展常用命令
    - docker-php-source
      > 在PHP容器中创建一个/usr/src/php的目录，里面放了一些自带的文件而已。我们就把它当作一个从互联网中下载下来的PHP扩展源码的存放目录即可。事实上，所有PHP扩展源码扩展存放的路径： /usr/src/php/ext 里面。

    - docker-php-ext-install
      > 用来启动 PHP扩展 的。我们使用pecl安装PHP扩展的时候，默认是没有启动这个扩展的，如果想要使用这个扩展必须要在php.ini这个配置文件中去配置一下才能使用这个PHP扩展。而 docker-php-ext-enable 这个命令则是自动给我们来启动PHP扩展的，不需要你去php.ini这个配置文件中去配置。

    - docker-php-ext-enable
      >用来安装并启动PHP扩展的。命令格：`docker-php-ext-install “源码包目录名”`

    - docker-php-ext-configure
      > 一般都是需要跟 docker-php-ext-install搭配使用的。它的作用就是，当你安装扩展的时候，需要自定义配置时，就可以使用它来帮你做到。
