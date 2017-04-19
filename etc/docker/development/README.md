Development environment
=======================

```
$ cd skeleton-api

# first run
$ docker-compose -f etc/docker/development/docker-compose.yml.dist up -d --build

# stop and resume
$ docker-compose -f etc/docker/development/docker-compose.yml.dist stop
$ docker-compose -f etc/docker/development/docker-compose.yml.dist start

# destroy
$ docker-compose -f etc/docker/development/docker-compose.yml.dist down    # mysql and redis data will still be saved
$ docker-compose -f etc/docker/development/docker-compose.yml.dist down -v # nuke everything, even the volumes
```

This setup enhances the FPM container with SSH access to ease debugging. The code is shared between containers and the host machine by relying on volumes.
